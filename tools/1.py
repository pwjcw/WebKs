# 这是一个爬虫程序,为了还原原页面内容，减小操作的麻烦，与图片的不断保存操作，故爬取原网站数据

import requests
from lxml import etree
res=requests.get("https://www.itdjs.com/").text
html=etree.HTML(res)
src=html.xpath("/html/body/div/main/section/div/div/div/div/div/div/div/a/img/@data-src")
titlr=html.xpath("//*[@id=\"ceotheme\"]/div/main/section/div/div/div/div[1]/div/div/div[2]/div/a/text()")
href=html.xpath("/html/body/div/main/section/div/div/div/div/div/div/div[1]/a/@href")
title=[]
for i in titlr:
    title.append(str(i).replace("\n","").replace(" ","").replace("\t",""))
str=""
for i in range(0,len(src)):
    # 这是自己写好的模板
    tmp="""
    <div class="con_body_concrete">
                <a href="{}" id="a_con">
                    <div id="img_top"></div>
                    <img src="{}" id="a_img2">
                    <span id="title">{}</span>
                    <div class="sign_all">
                        <div class="sign">
                            <img src="./images/24gl-folderOpen.png">
                            <span>c/c++</span>
                        </div>
                        <div class="sing_right">
                            <span id="sing_right_left">#</span>
                            <span>精品</span>
                        </div>

                    </div>
                    <div class="buttom_con">
                        <div class="buttom_con_right">
                            <img src="./images/avatar-1-90.jpg">
                        </div>
                        <div class="buttom_con_left">
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/记事本.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/眼睛.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/钻石.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>


    """.format(href[i],src[i],title[i])
    if i%5==0:
        str+="\n<!------------------------------------分割线-------------------------------------!>"
    str+=tmp
with open("tmp.txt", "w") as f:
    f.write(str)
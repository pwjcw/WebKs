<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>独角兽资源网</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
</head>

<body>
   
    <!-- 页面头部 -->
    <div class="top">
        <div class="top_images"></div>
        <div class="top_child">
            <ul>
                <li>首页</li>
                <li>svip</li>
                <li>独家精品</li>
                <li>it编程</li>
                <li>高薪课程</li>
                <li>奈学</li>
                <li>拉钩</li>
                <li>开课吧</li>
                <li>北美it求职培训</li>
            </ul>
        </div>
        <div class="top_right">
            <div class="top_right_image"></div>
            <a href="javascript:switchNightMode()" >
                <div class="moon"></div>
            </a>
            <?php
if ($_COOKIE["djs"]) {
	echo "<a class='login' href='/pages/user.php'>".$_COOKIE['djs']."</a>";
} else {
    echo "<a class='login' href='/pages/login2.php' >登入</a>";
}
?>
        </div>
    </div>
    <!-- 页面主体-->
    <div class="con">
        <!-- 展示图片 -->
        <!-- <div class="show_images"></div> -->
        <p>
        <div class="test" id="lbt"></div>
        </p>
        <!-- 图片之后的网页汇总信息 -->
        <div class="con-1">
            <div id="new">
                <div class="new_ico">
                    <img src="./images/lb.png" id="new_img">
                    <div style="width: 2px;"></div>
                    <span>最新发布</span>
                </div>
                <span>国内首个面向工业级实战的点云处理课程</span>
                <div class="new_right">
                    <img src="./images/jsb.png">
                    <span>2022-11-23</span>
                    <div style="width: 10px;"></div>
                    <img src="./images/eye.png">
                    <span>2022-11-23</span>
                </div>
            </div>
            <div class="con-1-right">
                <div class="con-right-con">
                    <div class="con-right-img">
                        <img src="./images/count-icon1.png">
                    </div>
                    <div style="width: 10px;"></div>
                    <div class="con-right-font">
                        <span>会员总数</span>
                        <span>14473</span>
                    </div>
                </div>
                <div style="width: 20px;"></div>
                <div class="con-right-con">
                    <div class="con-right-img">
                        <img src="./images/count-icon2.png">
                    </div>
                    <div style="width: 10px;"></div>
                    <div class="con-right-font">
                        <span>今日发布</span>
                        <span>5</span>
                    </div>
                </div>
                <div style="width: 20px;"></div>
                <div class="con-right-con">
                    <div class="con-right-img">
                        <img src="./images/count-icon3.png">
                    </div>
                    <div style="width: 10px;"></div>
                    <div class="con-right-font">
                        <span>本周发布</span>
                        <span>26</span>
                    </div>
                </div>
                <div style="width: 20px;"></div>
                <div class="con-right-con">
                    <div class="con-right-img">
                        <img src="./images/count-icon4.png">
                    </div>
                    <div style="width: 10px;"></div>
                    <div class="con-right-font">
                        <span>资源总数</span>
                        <span>338473</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- 页面标题一 -->
        <div class="con_title_1">
            <p id="title1">
                <img src="./images/ceo_hdicon4.png">
                <span>你的前景,远超我们想象</span>
                <img src="./images/ceo_hdicon3.png">
            </p>
        </div>
        <!-- 标题下的分类按钮 -->
        <div class="nav">
            <ul>
                <li>最新发布</li>
                <li>独家精品</li>
                <li>高薪课程</li>
            </ul>
        </div>
        <!-- 具体内容 -->
        <div class="con_body_1">
            <!-- 一个con_body_concrete为一个卡片 -->
            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/1810/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/03/1647697344-ea6fed66c584410.jpg&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        【体系课】吃透前端工程化大厂级实战项目以战带练</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/4013/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/11/2022111917064721.png&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        C++百万并发网络通信引擎架构与实现第2季</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/4024/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/11/2022112219311662.png&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        FFmpeg5.0核心技术精讲，打造自己的音视频播放器</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/3997/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/11/2022111000350769.png&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        FFmpeg第一季：小白开窍+九阳神功系列课</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/4016/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/11/2022111918165891.png&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        SQ-软件测试之python自动化测试57期</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- 第二行内容 -->
        <div class="row_2">
            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/4049/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/11/2022112823312492.png&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        大鹏-数据分析师综合课</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/4045/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/11/2022112822554640.png&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        BWF软件测试提速班2022</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/3936/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/10/2022102307020887.png&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        NX大前端架构师1期</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/3959/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/10/2022103007410160.png&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        NXP7架构师17期2022</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/4021/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/11/2022112218502068.png&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        国内首个面向工业级实战的点云处理课程</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>


        </div>
        <!-- 第二标题，架构师 -->
        <div class="title_2">
            <div id="title_2_left">
                <img src="./images/dq.png" width="25px" height="25px">
                <span>架构师</span>
            </div>
            <div id="title_2_right">
                <span><a href="https://www.itdjs.com/gxkc/jgs" target="_blank">查看更多</a></span>
                <img src="./images/jrjt.png" width="16px" height="16px">
            </div>
        </div>
        <!-- 架构师课程的卡片内容 -->
        <div class="jgs">
            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/3980/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/11/2022110219513847.png&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        KKB自动驾驶算法工程师</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/3934/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/04/1650793837-0a45b15ac6a28a5.jpg&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        [分段版2]Coderwhy前端系统课最新</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/2558/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/04/1650793837-0a45b15ac6a28a5.jpg&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        [分段1完结]CoderWhy-Web前端线上系统课首发1663集DAY92</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/3902/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/10/2022100919411133.webp&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        大课训练营PaaS云平台+SpringCloudAlibaba+JDK11综合项目实战</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/3893/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/10/2022100818412766.png&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        安全微专业web安全工程师高薪正式班13期</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- 第三标题，大数据 -->
        <div class="title_2">
            <div id="title_2_left">
                <img src="./images/dq.png" width="25px" height="25px">
                <span>大数据</span>
            </div>
            <div id="title_2_right">
                <span><a href="https://www.itdjs.com/gxkc/dsj" target="_blank" id="test">查看更多</a></span>
                <img src="./images/jrjt.png" width="16px" height="16px">
            </div>
        </div>
        <!-- 大数据的卡片内容 -->
        <div class="jgs">
            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/3962/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/04/1651167215-f61a2f29ae47974.png&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        hm博学谷-JavaEE在线就业班2022年+中级进修课+精英进阶</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/3940/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/10/2022102505271789.png&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        NXP7数据分析架构师保薪班2022一期</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/3931/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/10/2022102101391432.png&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        NXP6大数据研发工程师11期2022</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/3949/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/10/2022102819250473.png&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        七月算法大数据工程师集训营2022</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/3896/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/10/2022100819171357-e1665257271739.jpg&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        开课吧完成你的第一个智能机器人2期</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>


        </div>
        <!-- 第四标题，人工智能 -->
        <div class="title_2">
            <div id="title_2_left">
                <img src="./images/dq.png" width="25px" height="25px">
                <span>人工智能</span>
            </div>
            <div id="title_2_right">
                <span><a href="https://www.itdjs.com/gxkc/ai" target="_blank" id="test">查看更多</a></span>
                <img src="./images/jrjt.png" width="16px" height="16px">
            </div>
        </div>
        <!-- 人工智能相关的卡片内容 -->
        <div class="jgs">
            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/3868/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/09/2022092916462164.png&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        百战大厂算法特训班</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/3876/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/10/2022100219423972.png&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        机器学习算法工程师特训营</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/3853/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/09/2022092816411046.png&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        奈学全学科超级会员</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/3859/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/09/2022092817321890.png&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        开课吧数据智能时代Python全栈工程师培养计划</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/3841/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/09/202209260421088.png&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        爱编程Java架构师VIP系统黄埔班</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- 第五标题，超级前端 -->
        <div class="title_2">
            <div id="title_2_left">
                <img src="./images/dq.png" width="25px" height="25px">
                <span>超级前端</span>
            </div>
            <div id="title_2_right">
                <span><a href="https://www.itdjs.com/gxkc/gjqd" target="_blank" id="test">查看更多</a></span>
                <img src="./images/jrjt.png" width="16px" height="16px">
            </div>
        </div>
        <!-- 高级前端的卡片内容 -->
        <div class="jgs">
            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/3936/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/10/2022102307020887.png&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        NX大前端架构师1期</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/3959/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/10/2022103007410160.png&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        NXP7架构师17期2022</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/4021/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/11/2022112218502068.png&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        国内首个面向工业级实战的点云处理课程</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/4033/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/11/2022112221115151.png&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        七月算法机器学习集训营15期2022</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="con_body_concrete">
                <a href="https://www.itdjs.com/3993/html" id="a_con">
                    <div id="img_top"></div>
                    <img src="https://www.itdjs.com/wp-content/themes/ceomax/timthumb.php?src=https://www.itdjs.com/wp-content/uploads/2022/11/2022110700364031.png&h=200&w=300&zc=1&a=t&q=100&s=1"
                        id="a_img2">
                    <span id="title">
                        HM狂野大数据二期</span>
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
                                    <img src="./images/jsb.png" id="buttom_left_img">
                                    <span>两天前</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/eye.png" id="buttom_left_img">
                                    <span>3456</span>
                                </div>
                            </div>
                            <div style="width: 10px;"></div>
                            <div id="buttom_con_left_con">
                                <div id="buttom_con_left_con_con">
                                    <img src="./images/zs.png" id="buttom_left_img">
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- 页面底部，数据详情 -->
        <div class="page_bottom">
            <!-- 数据信息 -->
            <div class="page_bottom_data">
                <ul class="page_bottom_ul">
                    <li>
                        <div class="page_bottom_data_con">
                            <span id="span_1">1000004001<sup>+</sup></span>
                            <span id="span_2">访问总数</span>
                        </div>
                    </li>
                    <li>
                        <div class="page_bottom_data_con">
                            <span id="span_1">14522<sup>+</sup></span>
                            <span id="span_2">会员总数</span>
                        </div>
                    </li>
                    <li>
                        <div class="page_bottom_data_con">
                            <span id="span_1">33836<sup>+</sup></span>
                            <span id="span_2">资源总数</span>
                        </div>
                    </li>
                    <li>
                        <div class="page_bottom_data_con">
                            <span id="span_1">4<sup>+</sup></span>
                            <span id="span_2">今日发布</span>
                        </div>
                    </li>
                    <li>
                        <div class="page_bottom_data_con">
                            <span id="span_1">15<sup>+</sup></span>
                            <span id="span_2">今日发布</span>
                        </div>
                    </li>
                    <li>
                        <div class="page_bottom_data_con">
                            <span id="span_1">2730<sup>+</sup></span>
                            <span id="span_2">运行天数</span>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- 文字 -->
            <p id="page_bottom_font">你的前景,远超我们想象</p>
            <div class="page_bottom_login">
                <a href="pages/login.html" style="text-decoration: none; color: white;" target="_blank">免费注册</a>
            </div>
        </div>
        <!-- 页面底部，关键词 -->
        <div class="page_foot">
            <div class="page_foot_left">
                <img src="./images/1639823251-96d6f2e7e1f705a.png">
                <div style="height: 10px;"></div>
                <span id="page_foot_left_font">欢迎您光临独角兽资源站,本站收集各种优质it资源共享下载,专注精品,持续更新,销售只是起点 服务永无止境！</span>
            </div>
            <div class="page_foot_right">
                <div class="page_foot_right_right_font">
                    <span id="page_foot_right_font_all">IT课程</span>
                    <span id="page_foot_right_font_all">独家精品</span>
                    <span id="page_foot_right_font_all">人工智能</span>
                    <span id="page_foot_right_font_all">大数据</span>
                </div>
                <div class="page_foot_right_right_font" id="foot_right_right">
                    <span id="page_foot_right_font_all"></span>
                    <span id="page_foot_right_font_all">IT分类</span>
                    <span id="page_foot_right_font_all">架构师</span>
                    <span id="page_foot_right_font_all">高级前端</span>
                </div>
            </div>
            <!-- 版权所有 -->

        </div>
        <div class="final_foot">
                <span>© 2015-2022 独角兽资源站 - ITDJS.COM.All rights reserved</span>
        </div>
    </div>

</body>
<!-- js代码放到最后，因为轮播图为js实现，避免js先与dom结构加载完成而引发的报错 -->
<script type="text/javascript" src="./js/index.js"></script>
</html>
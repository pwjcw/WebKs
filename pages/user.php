<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>个人中心</title>
    <link rel="stylesheet" href="../css/user.css">
</head>
<body>
    <!-- 页面顶部的图片 -->
    <div class="top_img">
        <span id="top_img_font" >个人中心</span>
    </div>
    <!-- 页面主体 -->
    <div class="con">
        <!-- 个人头像显示区域 -->
        <div class="con_left">
            <!-- <img src="../images/1.png" width="96px" height="96px" id="con_left_img"> -->
            <!-- 随机头像的api -->
            <img src="http://api.btstu.cn/sjtx/api.php" width="96px" height="96px" id="con_left_img">
            <div class="name">
                <span><?php echo $_COOKIE["djs"];?></span>
                <div style="width: 12px;"></div>
                <div id="name-attribute">普通用户</div>
            </div>
            <span>特权到期时间： 2022-12-01</span>
        </div>
        <!-- 右侧卡片组件 -->
        <div class="con_right_top">
            <div class="con_card">
                <span id="fload">积分</span>
                <div class="card_font">
                    <span>当前余额</span>
                    <span>0.00</span>
                </div>
            </div>
            <div class="con_card" style="background-color: #ff6a6d;">
                <span id="fload">积分</span>
                <div class="card_font">
                    <span>已消费</span>
                    <span>0.00</span>
                </div>
            </div>
            <div class="con_card" style="background-color: #4caf50;">
                <span id="fload">今日/次</span>
                <div class="card_font">
                    <span>可下载</span>
                    <span>0</span>
                </div>
            </div>
            <div class="con_card" style="background-color: #ffc107;">
                <span id="fload">今日/次</span>
                <div class="card_font">
                    <span>已下载</span>
                    <span>0</span>
                </div>
            </div>
        </div>
        
    </div>
    <!-- 信息更改区域 -->
    <div class="data_body">
        <h3  id="data_body_top">基本信息</h3>
        <div class="data_body_con_column">
            <div class="data_body_con_row">
                <div class="data_body_con">
                    <label for="id">ID</label>
                    <input type="text" value="9999" id="id" disabled="disabled" class="input-con">
                </div>
                <div class="data_body_con">
                    <label for="name">昵称</label>
                    <input type="text" value=<?php echo $_COOKIE["djs"];?> id="name" class="input-con">
                </div>
            </div>
            <div class="data_body_con_row">
                <div class="data_body_con">
                    <label for="emial">邮箱</label>
                    <input type="text" value="<?php echo $_COOKIE["djs"];?>" id="emial"  class="input-con">
                </div>
                <div class="data_body_con">
                    <label for="number">手机号</label>
                    <input type="text" value="123456890" id="number" class="input-con">
                </div>
            </div>
            <div class="data_body_con_row">
                <div class="data_body_con">
                    <label for="id">地址</label>
                    <input type="text" value="河南省郑州市xxxx" id="id" class="input-con">
                </div>
                <div class="data_body_con">
                    <label for="name">QQ</label>
                    <input type="number" value="xxxxx" id="name" class="input-con">
                </div>
            </div>
            <!-- 文本输入框，个人介绍 -->
            <div class="page_foot">
                <label for="user">个人介绍</label>
                <textarea id="user" rows="6"></textarea>
            </div>
        </div>
        <input type="submit" id="submit" onclick="alert('暂不支持修改信息')" value="提交信息">
    </div>
</body> 
</html>
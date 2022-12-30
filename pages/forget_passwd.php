<?php
if($_COOKIE["djs"]){
    echo "<script language='javascript'>\n";
        echo "location.href='../index.php'\n";   //如果存在cookie就跳转回主页
        echo "</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="con_body">
        <div class="con_left">
            <span id="con_font">欢迎来到独角兽资源网</span>
        </div>
        <div class="con_right_1">
            <p style="text-align:center;">
            <div class="login_con">
                <div class="login_con_top">
                    <p style="text-align:center ;">重置密码</p>
                </div>
                <!-- 登入框 -->
                <form action="login.php" method="post" class="login_all">
                    <div class="number">
                        <img src="../images/user.png" width="17px" height="17px">
                        <input type="email" id="number" placeholder="邮箱" name="name">
                    </div>
                    <div class="number">
                        <img src="../images/lock.png" width="17px" height="17px">
                        <input type="number" id="number" placeholder="验证码" name="passwd">
                    </div>
                    <div class="submit_button">
                        <input type="submit" id="submit" value="提交" onclick="alert('出错了,请联系管理员!')">
                    </div>
                </form>
                <div class="login_foot">
                    <a href="login2.php">登入</a>
                    <a href="register.html">注册</a>
                </div>
            </div>
            </p>
        </div>
    </div>
</body>

</html>
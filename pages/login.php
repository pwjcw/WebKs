<?php
ob_start();
if($_COOKIE["djs"]){
    echo "<script language='javascript'>\n";
        echo "location.href='../index.php'\n";   //如果存在cookie就跳转回主页
        echo "</script>";
}
$fp = fopen("passwd.txt",'r');
$name=$_POST["name"];
$passwd=$_POST["passwd"];
//判断信息提交是否完整
if(empty($name) or empty($passwd)){
    echo "<script language='javascript'>\n";
    echo "alert('用户名或者密码不能为空');\n";
    echo "history.go(-1);\n";
    echo "</script>";
    die();
}
while(!feof($fp)){//判断文件指针是否到达末尾
    $line = fgets($fp);//返回一行文本，并将文件指针移动到下一行头部
    $name_actual=explode(" ",$line)[0];
    $passwd_actual=rtrim(explode(" ",$line)[1]);
    if($name==$name_actual and $passwd==$passwd_actual){
        setcookie("djs",$name, time()+36002430,'/'); //设置cookie
        echo "<script language='javascript'>\n";
        echo "alert('登入成功!');\n";
        echo "location.href='../index.php'\n";   //跳转到首页
        echo "</script>";
        die();
    }elseif($name==$name_actual and $passwd !=$passwd_actual) {
        echo "<script language='javascript'>\n";
        echo "alert('密码错误，请重新输入！');\n";
        echo "history.go(-1);\n";
        echo "</script>";
        die();
    }
    // echo explode(" ",$line)[0]."\n" ;//输出获取到的一行文本
 }
 fclose($fp);//关闭文件
 echo "<script language='javascript'>\n";
 echo "alert('账户不存在！请注册账户');\n";
 echo "history.go(-1);\n";
 echo "</script>";

?>
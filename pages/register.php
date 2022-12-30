<?php
if($_COOKIE["djs"]){
    header('location:../index.php');  //如果存在cookie就跳转回主页
}
$name=$_POST["name"];
$passwd=$_POST["passwd"];
$passwd_2=$_POST["passwd_2"];
$rp =file_get_contents("passwd.txt");
// 判断账户是否存在
if(strpos($rp,$name)!==FALSE){
    echo "<script language='javascript'>\n";
    echo "alert('账户已存在！');\n";
    echo "history.go(-1);\n";
    echo "</script>";
    die();
}
$fp = fopen("passwd.txt",'a');
//判断信息提交是否完整
if(empty($name) or empty($passwd) or empty($passwd_2)){
    echo "<script language='javascript'>\n";
    echo "alert('信息未填写完整！');\n";
    echo "history.go(-1);\n";
    echo "</script>";
    die();
}
if($passwd !=$passwd_2){
    echo "<script language='javascript'>\n";
    echo "alert('两次密码不一致!');\n";
    echo "history.go(-1);\n";
    echo "</script>";
    die();
}else{
    //注册
    fwrite($fp,$name." ".$passwd."\n");
    echo "<script language='javascript'>\n";
    echo "alert('注册成功,请登入!');\n";
    echo "history.go(-2);\n";
    echo "</script>";
}
?>
<?php
session_start();
$default_acc='admin';
$default_pw='admin';

$acc=$_POST['acc'];
$pw=$_POST['pw'];

$_SESSION['admin']=$acc;

if ($acc==$default_acc && $pw==$default_pw) {    
    header("location:./back.php");
}else{
    header("location:./index.php");    
}


 
?>
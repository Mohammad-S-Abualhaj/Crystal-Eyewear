<?php require_once "db.php";?>
<?php require_once "functions.php"?>
<?php
$dataArr=getPostData($_POST,['username','email','password','password_confirmation']);
$username=$dataArr[0];
$email=$dataArr[1];
$password=$dataArr[2];
$password_confirmation=$dataArr[3];
validate_password($password);
validate_email($email);
confirm_password($password,$password_confirmation);
$validate=validate_all_paramters(...$validation_array);
if(!$validate){
    $query="";
    foreach ($errors as $error_type=>$error) {
        $query.="{$error_type}={$error} ";
    }
    //send all of the errors at the same time
    header("Location:../account-register.php?{$query}");
    exit;
}
checkRepetition_and_showUsers($connection,true,"users",["username",'email','password'],[$username,$email,$password],"../account-register.php");
crud($connection,"INSERT","user",['username','email','password'],[$username,$email,$password]);


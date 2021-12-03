<?php require_once "db.php";?>
<?php require_once "functions.php"?>
<?php
//here the red line is not actually a red line it's just from the require
if(isset($_POST["register_submit"])){
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
    //encrypt the password
    $password=md5($password);
    checkRepetition_and_showUsers($connection,true,"user",['email','password'],[$email,$password],"../account-register.php");
    crud($connection,"INSERT","user",['username','email','password'],[$username,$email,$password]);
    header("Location:../account-login.php?register=success");
    exit();
}
//login logic
if(isset($_POST['login_submit'])){
    $returned_array=getPostData($_POST,["username",'password']);
    $password=$returned_array[1];
//check if the user inputs username or email
    if(validate_email($returned_array[0])){
        $email=$returned_array[0];
        $validate= validate_password($password);
        if(!$validate){
            //send all of the errors at the same time
            header("Location:../account-login.php?password=password not valid");
            exit;
        }
        $statement=$connection->prepare("SELECT * FROM user WHERE email=:email");
    $statement->bindValue(':email',$email);
    $statement->execute();
    $user_data=$statement->fetch(PDO::FETCH_ASSOC);
    //return error that the email doesn't exist
    if(!$user_data){
        header("Location:../account-login.php?email=email doesn't exist");
        exit();
    }
    $password=md5($password);
    //return error if the password don't match
    if($user_data['password']!==$password){
        header("Location:../account-login.php?password=password is wrong");
        exit();
    }
    session_start();
    $_SESSION['user_loggedin']=true;
    header("Location:../index.php");
    exit();
}
    elseif(validate_username($returned_array[0])){
        $username=$returned_array[0];
        $validate= validate_password($password);
        if(!$validate){
            //send all of the errors at the same time
            header("Location:../account-login.php?password=password not valid");
            exit;
        }
        $statement=$connection->prepare("SELECT * FROM user WHERE username=:username");
       $statement->bindValue(':username',$username);
       $statement->execute();
       $user_data=$statement->fetch(PDO::FETCH_ASSOC);
    //return error that the email doesn't exist
    if(!$user_data){
        header("Location:../account-login.php?username=username doesn't exist");
        exit();
    }
    $password=md5($password);
    echo $user_data["password"];
    //return error if the password don't match
   if($user_data['password']!==$password){
        header("Location:../account-login.php?password=password is wrong");
        exit();
    }
    session_start();
    $_SESSION['user_loggedin']=true;
    header("Location:../index.php");
    exit();

}
    else{
        header("Location:index.php?username=please enter valid username or email");
    }
}
//---------------------------------
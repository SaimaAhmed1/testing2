<?php
session_start();
// GET DATA
$title=$_POST["title"];
$details=$_POST["details"];
$author=$_POST["author"];

// DATA VALIDATION
// title validation 
$_POST=[];
$errors=[];
if(empty($title)){
    $errors["title_error"]="title koi??";
}else if(strlen($title)>5){
   $errors["title_error"]= "ar koto likhba?";

}
// details validation 
if(empty($details)){
    $errors["details_error"]="details koi?";
}
if(count($errors)>0){
    $_SESSION['old']= $_POST;
    $_SESSION['error']=$errors;
    // redirection
    header("Location:../index.php");
}



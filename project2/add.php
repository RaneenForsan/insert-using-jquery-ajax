<?php
 
//DB Connection 
$con = new mysqli('localhost','root','', 'ci_learn');
 
$name = $_POST['name'];
$uname = $_POST['uname'];
$pass = $_POST['password'];
$email = $_POST['email'];
 
//image uploading
if($_FILES['img']['name']){
 
    move_uploaded_file($_FILES['img']['tmp_name'], "image/".$_FILES['img']['name']);
 
    $img = "image/".$_FILES['img']['name'];
 
    }
 
$sql="INSERT INTO `user`(`name`, `uname`, `email`, `password`, `img`) VALUES ('$name', '$uname', '$email', '$pass', '$img')";
 
mysqli_query($con, $sql);
?>
<?php
include "connection.php";

$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['mobile'];

$sql="update signup set name='{$name}' , email='{$email}' , mobile='{$contact}' where id='{$id}'";


$res=mysqli_query($conn,$sql);

if($res){
    header("location:site.php");
}else{
    echo "failed";
}

// echo $id;






?>
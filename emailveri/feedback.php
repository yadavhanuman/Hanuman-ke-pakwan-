<?php

$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'register'; 

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['onclick'])) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

   
    $sql = "INSERT INTO feedback(name, email, message) VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully.";
        header('location:../site.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
  body {
    display: block;
    margin: 8px;
    background-color: #dddddd;
}
.feedback-form {
  max-width: 400px;
  margin: 0 auto;
}

.feedback-form label,
.feedback-form input,
.feedback-form textarea,
.feedback-form button {
  display: block;
  width: 100%;
  margin-bottom: 10px;
  border-radius: 5px;
}

.feedback-form label {
  font-weight: bold;
}

.feedback-form input,
.feedback-form textarea {
  padding: 5px;
  border: 1px solid #ccc;
  /* background:pink; */
  outline:2px solid black;
  font-size:15px;
}

.feedback-form button {
  padding: 10px;
  background-color: #4286f4;
  color: #fff;
  border: none;
  cursor: pointer;
  border-radius:10px;
  margin-top:20px;
}
h2{
text-align:center;
text-transform:uppercase;
font-family:sans-serif;
position: relative;right:60px;

}
.div{
border:3px solid black;
height:300px;
padding-top:35px;
border-radius:10px;
background-color: #c2d1de;
width:500px;
position: absolute;
left: 440px;
box-shadow: 5px 10px #888888;

}

</style>




</head>
<body>
 <h2>your feedback is very important for us &#x1F60A;</h2>



<div class="div">

<form class="feedback-form" action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        
        <button type="submit" name="onclick">Submit</button>
      </form>
      </div>










</body>
</html>
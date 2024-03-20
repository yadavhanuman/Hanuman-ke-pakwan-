<?php

session_start();

$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$db ='register';

$conn = mysqli_connect($host, $dbUsername, $dbPassword, $db);

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $mobile = $_POST['Mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $token = bin2hex(random_bytes(15));

    $emailquery = "SELECT * FROM signup WHERE email='$email'";
    $query = mysqli_query($conn, $emailquery);
    $emailcount = mysqli_num_rows($query);

    if ($emailcount > 0) {
        ?>
        <script>
            alert('Email already exists');
        </script>
        <?php
    } else{
        if($password === $cpassword){
         
    $insert = "INSERT INTO signup(name, mobile, email, password, cpassword, token, status) VALUES ('$name', '$mobile', '$email', '$pass', '$cpass', '$token', 'inactive')";

    $data = mysqli_query($conn, $insert);

    if ($data) {

      
//     alert('Data is inserted');
// $to ='yadav.ahul510@gmail.com';
$subject='Hanuman Ke Pakwan';
$body="Hello, $name WELCOME To Our Web Hanuman Ke Pakwan !
http://localhost/website/emailveri/activate.php?token=$token";
$sender='From: hanumankepakavan@gmail.com';
if(mail($email,$subject,$body,$sender)){
//  echo 'email sent successfully to $to';
$_SESSION['msg'] ="Taste healthy and delicious with Hanuman Ke Pakwan $email";
header('location:login.php');

}else{
 echo 'email not send';
}


    } else {
      ?>
      <script>
      alert('Data is not inserted');
      </script>
      <?php
    }
}
        }
      }
        else {
          ?>
          <script>
          // alert('password is not matching');
          </script>
          <?php
        }
    


?>


<!-- 

// $insert ="INSERT INTO signup(name,mobile,email,password,cpassword,token,status) VALUES ('$name',' $mobile','$email','$password','$cpassword','$token','inactive')";

// $data =mysqli_query($conn,$insert);

// if ($data) {
//   echo "data is inserted";
// }
// else {
//   echo "data is not inserted";
// }
// }

?> -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sign.css">
    <link rel="stylesheet" href="sign1.css">
</head>
<body>
    <div class="container">
        <div class="card">
          <div class="card_title">
            <h1>Create Account</h1>
            <span>Already have an account? <a href="login.php" target="_blank">Sign In</a></span>
          </div>
          <div class="form">
          <form action="" method="post">
            <input type="text" name="name" id="name" placeholder="Full name" />
            <!-- <input type="text" name="Last_name" id="Last_name" placeholder="Last name" /> -->
            <input type="text" name="Mobile" id="Mobile" placeholder="Mobile" />
            <input type="email" name="email" placeholder="Email" id="email" />
            <input type="password" name="password" placeholder="Create Password" id="password" />
            <input type="password" name="cpassword" placeholder="Confirm Password" id="password" />
            <button type="submit" name="save">Sign Up</button>
            </form>
          </div>
          <div class="card_terms">
              <input type="checkbox" name="" id="terms"> <span>I have read and agree to the <a href="terms.php">Terms of Service</a></span>
          </div>
        </div>
      </div>
    
</body>
</html>



<?php
session_start();
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$db ='register';

$conn =mysqli_connect($host, $dbUsername, $dbPassword,$db);

// if ($conn) {
//     echo "yes";
// }
// else {
//     echo "no";
// }

// $s= "login";

// $sql='create database'.$s;

// $db=mysqli_query($conn,$sql);

// if ($db) {
//    echo "create";
// }else{
//    echo "not";
// }

if (isset($_POST['save'])) {
    // $username = $_POST['username'];
    $email = $_POST['useremail'];
    $password = $_POST['password'];
    
$email_search = "select * from signup where email='$email' ";
$query = mysqli_query($conn,$email_search);


$count= mysqli_num_rows($query);
if($count){
    $email_pass = mysqli_fetch_assoc($query);
$db_pass = $email_pass['password'];
// $_SESSION['username'] = $email_pass['username'];
$pass_decode = password_verify($password,$db_pass);
if($pass_decode){
    ?>
    <script>
        alert('login successful');
    </script>
   
    <?php
    $_SESSION['profile']="$email";

    
    ?><script>
//  let profile=document.getElementById('profile');
//     if(profile.trim()===''){
//         $_SESSION['profile']="$email";
//     }else{
//         // $_SESSION['profile']='Add Account';
//     }


        location.replace('../site.php');
       
    </script>
    <?php
}else{
    ?>

  <script>
    alert('password incorrect');
  </script>
    <!-- <script>
        let profile=document.getElementById('profile');
        profile.style.display='none';
    </script> -->
    <?php
}
}
else{
    ?>
   <script>
    alert('invalid email');
   </script>
    <?php
}
}

// $query ="INSERT INTO login(username,useremail,password) VALUES ('$username','$useremail','$password')";

// $data =mysqli_query($conn,$query);

// if ($data) {
//   echo "data is inserted";
// }
// else {
//   echo "data is not inserted";
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Login Form </title>
    <style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

.container {
  height: 100vh;
  width: 100%;
  align-items: center;
  display: flex;
  justify-content: center;
  background-image: radial-gradient(
    circle farthest-corner at 10% 20%,
    rgb(22, 22, 20) 0%,
    rgb(146, 115, 84) 90%
  );
}

.card {
  border-radius: 10px;
  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3);
  width: 400px;
  height: 360px;
  background-color: #ffffff;
  padding: 10px 30px;
}

.card_title {
  text-align: center;
  padding: 10px;
}

.card_title h1 {
  font-size: 26px;
  font-weight: bold;
}

.form input {
  margin: 10px 0;
  width: 100%;
  background-color: #e2e2e2;
  border: none;
  outline: none;
  padding: 12px 20px;
  border-radius: 4px;
}

.form button {
  background-color: #4796ff;
  color: white;
  font-size: 16px;
  outline: none;
  border-radius: 5px;
  border: none;
  padding: 8px 15px;
  width: 100%;
  margin-top: 10px;
}

.card_terms {
  display: flex;
  align-items: center;
  padding: 10px;
}

.card_terms input[type="checkbox"] {
  background-color: #e2e2e2;
}

.card_terms span {
  margin: 5px;
  font-size: 13px;
}

.card a {
  color: #4796ff;
  text-decoration: none;
}
#forget{
  color:white;
  text-decoration:none;
  background-color:aliceblue;
}


    </style>
</head>

<body>  <div><p class=message> <?php
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg']; 
}else{
    echo $_SESSION['msg'] = "you are logged out .login again";
}
 ?></p></div>
       <div class="container">
        <div class="card">
          <div class="card_title">
            <h1>Log In Your Account</h1>
            <!-- <span>Already have an account? <a href="login.php" target="_blank">Sign In</a></span> -->
          </div>
          <div class="form">
          <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
            <input type="email" name="useremail" placeholder="Email" id="email" />
            <input type="password" name="password" placeholder="Password" id="password" />
            <button name="save" type="submit" style="background-color: rgb(102, 102, 123);curser:pointer">Log In</button>
            <button id="forget"><a href="forget.php">Forget Password</a></button>
            <button  style="background-color: red;"><a href="logout.php">Log Out</a></button>
            </form>
          </div>


          <!-- <div class="card_terms">
              <input type="checkbox" name="" id="terms"> <span>I have read and agree to the <a href="terms.php">Terms of Service</a></span>
          </div> -->

          
        </div>
      </div>
    
</body>
</html>  








<!--  -->
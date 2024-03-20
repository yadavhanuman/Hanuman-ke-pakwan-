


<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>


<?php
// session_start();

include 'connection.php';
if(isset($_POST['submit'])){
    $name=$_POST('name');
    $email=$_POST('email');
    $phone=$_POST('phone');
    $pass=$_POST('pass');
    $cpass=$_POST('cpass');

    $hack=password_hash($pass, PASSWORD_BCRYPT);
    $chack=password_hash($Cpass, PASSWORD_BCRYPT);

    $emailquery = "select * from signup where email='$email'";
    $query= mysqli_query($conn,$emailquery);

    $emailcount= mysqli_num_rows($query);

    if($emailcount>0){
        echo "email already exist";
    }else{
        if($pass === $cpass){
            $insertquery = "insert into signup(username,email,mobile,password,cpassword)values('$name','$email','$phone','$pass','$cpass')";

            $iquery=mysqli_query($conn,$insertquery);

            if($iquery){
                ?>
                <script>
                    alert("inserted successfully");
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert('not inserted');
                </script>
                <?php
            }
        }}
}

?>




  <header>
    <!-- place navbar here -->
  </header>
  <main>

  <div class="container ">
<form action="" <?php echo htmlentities($_SERVER['PHP_SELF']) ?> method="post">
<h2>Create your account</h2>
<a href="#">
<button type="button" class="btn btn-danger"> Login via Gmail</button>
</a>
<br>
<a href="#">
<button type="button" class="btn btn-primary"> Login via facebook</button>
</a>
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control" placeholder="enter your name">
  </div>

  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" name="email" class="form-control" placeholder="enter your email" >
  </div>

  <div class="mb-3">
    <label  class="form-label">Phone Number</label>
    <input type="number" name="phone" class="form-control" placeholder="enter phone number">
  </div>

  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" placeholder="enter your password">
  </div>

  <div class="mb-3">
    <label  class="form-label">Confirm Password</label>
    <input type="password" name="cpass" class="form-control" placeholder="confirm-password">
  </div>


  <button type="submit" name="submit" class="btn btn-primary">Create Account</button>

</form>



</div>





  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
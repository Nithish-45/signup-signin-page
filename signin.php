
<?php

include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>




<form action="signin.php" method="GET" class="border m-3 p-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
  </div>
  <!-- <div class="mb-3 form-check">
     <input type="checkbox" class="form-check-input" id="exampleCheck1"> 
     <label class="form-check-label" for="exampleCheck1">Check me out</label> 
  </div> -->
  <button type="submit" class="btn btn-primary mb-2" name="submit" >Submit</button>
  <p>New User Register here <a href="signup.php"> click here</a></p>
</form>


    <!-- <div class="form1">
        <form action="signin.php" method="GET">
            <label for="name"> email</label>
            <input type="email" placeholder="email" name="email">

            <label for="name">password</label>
            <input type="password" placeholder="password" name="password">

            <input type="submit" placeholder="submit" name="submit">

        </form> -->

        <?php
        if(isset($_GET['submit'])){
            $email=$_GET['email'];
            $password=$_GET['password'];

            $sql="select * from user where email='$email' and password='$password'";
            $result=mysqli_query($conn,$sql);
          
            $count=mysqli_num_rows($result);
                // echo "$count";
                
            if($count==1){
                echo "<script>
                window.location.href='signin.php'
                alert('successfully signed in')
                </script>";
            }
            else{
                echo "<script>
                window.location.href='signin.php'
                alert('sign-in failed')
                </script>";
            }
            }
            
        

        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>
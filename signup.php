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

    <style>
        .form1{
            text-align:center;
            display:flex;
            flex-direction:column;
        }
        .form1 label{
            display:flex;
            flex-direction:column;
            /* text-align:left; */
        }

    </style>
</head>
<body>


<form action="signup.php" method="POST" name="form" class="border m-3 p-5">
<div class="mb-3">
<label for="exampleInputText" class="form-label">Username</label>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="name" required>
</div>
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"  required>
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Password" id="exampleInputPassword1" name="password" required>
  </div>
  <div class="mb-3 ">
    <label class="form-label" for="exampleCheck1">Address</label>
    <input type="text" class="form-control" placeholder="Address" aria-label="Address" aria-describedby="basic-addon1" name="address" required>
  </div>
  <div class="mb-3">
    <label class="form-label" for="exampleCheck1">phone</label>
    <input type="number" class="form-control" placeholder="phone" aria-label="Address" aria-describedby="basic-addon1" name="phone" required>
  </div>


  <button type="submit" class="btn btn-primary" name="submit">Submit</button>

  <p>Already Registered <a href="signin.php">click here</a></p>

</form>


    <!-- <div class="form1">
        <form action="signup.php" method="POST" name="form">
            <label for="name" >name</label>
            <input type="text" placeholder="name" name="name" >

            <label for="name" >password</label>
            <input type="password" placeholder="password" name="password" >

            <label for="name" >email</label>
            <input type="email" placeholder="email" name="email" >

            <label for="name" >phone</label>
            <input type="number" placeholder="phone" name="phone" >

            <label for="name" >address</label>
            <input type="text" placeholder="address" name="address" >


            <input type="submit" placeholder="submit" name="submit" >


        </form> -->

        <?php
        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $password=$_POST['password'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $address=$_POST['address'];
            
            $check="select * from user where email='$email'";
            $resultcheck=mysqli_query($conn,$check);
            $countemail=mysqli_num_rows($resultcheck);
            if($countemail==0){

                $sql="insert into user(name,password,email,address,phone) values ('$name','$password','$email','$address','$phone')";
                
                $result=mysqli_query($conn,$sql);

                if($result){
                    echo "
                    <script>window.location.href='signin.php'
                    window.alert('succfully signup')</script>";

                }
                else{
                    echo "failed to connect";
                }
            }
            else{
                echo "
                <script>window.location.href='signup.php'
                window.alert('email exists')</script>";
            }
        }
        
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>
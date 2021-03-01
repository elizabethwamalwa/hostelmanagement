<?php

// button functionality
if(isset($_POST['signup'])){

    include('./db_connection.php');

    $username=$_POST['username'];
    $email=$_POST['email'];
    $password= $_POST['password'];
    $role = $_POST['role'];

    $query="INSERT INTO `sign up`(`firstname`,'lastname',`email`,'phonenumber','school','parentname','pareentphonenumber','parentemail','homeaddress',`password`,`role`);
             VALUES('$username','$email', '$phonenumber','$school','$parentname',$parentphonenumber','$parentemail','$homeaddress','$password','$role')";
    $Result= mysqli_query($conn,$query);
    if
    ($Result){
        
        echo"<script>alert('You have succesfully signed up')</script>";
    }
    else{
        echo"<script>alert(Failed! Try Again!)</script>";
    }
}

?>
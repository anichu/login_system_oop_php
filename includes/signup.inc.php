<?php  

if(isset($_POST['submit'])){
  
  // TODO:: GRABBING THE DATA
  $username = $_POST['username'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  $email = $_POST['email'];
  // echo $email,$username,$confirm_password,$password;

  // TODO:: INSTANTIATE SIGNUP CONSTRUCTOR CLASS
  include "../classes/dbh.classes.php";
  include "../classes/signup.classes.php";
  include "../classes/signup-controllers.classes.php";
  $signup = new SignupController($username,$password,$confirm_password,$email);
  $signup->signupUser();

  // TODO:: RUNTIME ERROR HANDLERS AND USER SIGNUP
  
  // TODO:: GOING BACK TO HOME PAGE
}



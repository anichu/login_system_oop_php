<?php  

if(isset($_POST['submit'])){
  
  // TODO:: GRABBING THE DATA
  $username = $_POST['username'];
  $password = $_POST['password'];
  // echo $email,$username,$confirm_password,$password;

  // TODO:: INSTANTIATE SIGNUP CONSTRUCTOR CLASS
  include "../classes/dbh.classes.php";
  include "../classes/signin.classes.php";
  include "../classes/signin-controllers.classes.php";
  $signin = new SigninController($username,$password);
  $signin->loginUser();

  // TODO:: RUNTIME ERROR HANDLERS AND USER SIGNUP
  
  // TODO:: GOING BACK TO HOME PAGE
}



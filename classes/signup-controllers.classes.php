<?php  

class SignupController extends Signup{
  private $username;
  private $password;
  private $confirm_password;
  private $email;
  public function __construct($username,$password,$confirm_password,$email)
  {
    $this->username=$username;  
    $this->password=$password;  
    $this->confirm_password=$confirm_password;  
    $this->email=$email;  
  }

  public function signupUser(){
    if($this->emptyInput()==false){
      header("location:../index.php?error=emptyInputii");
      exit();
    }

    if($this->inValidUserName()==false){
      header("location:../index.php?error=invalidUsername");
      exit();
    }

    if($this->invalidEmail()==false){
      header("location:../index.php?error=invalidEmail");
      exit();
    }

    if($this->passwordMatch() ==false){
      header("location:../index.php?error=passwordDon'tMatch");
      exit();
    }

    if($this->existUser()==false){
      header("location:../index.php?error=existUser");
      exit();
    }

    $this->setUser($this->username,$this->email,$this->password);

  }

  private function emptyInput(){
    $result=true;
    if(empty($this->username)||empty($this->password)||empty($this->confirm_password)||empty($this->email)){
      $result = false;
    }
    
    return $result;
  }

  private function inValidUserName(){

    $result = true;
    if(!preg_match("/^[a-zA-Z0-9_-]*$/",$this->username)){
      $result = false;
    }

    return $result;
  }

  private function invalidEmail(){
    $result = true;
    if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
      $result = false;
    }

    return $result;
  }

  private function passwordMatch(){
    
    $result= true;
    
    if($this->password != $this->confirm_password){
      $result = false;
    }

    return $result;
  }

  private function existUser(){

    $result = true;
    if(!$this->checkUser($this->username,$this->email)){
      $result = false;
    }

    return $result;
  }

}


?>
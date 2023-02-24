<?php  

class SigninController extends Login{
  private $username;
  private $password;
  public function __construct($username,$password)
  {
    $this->username=$username;  
    $this->password=$password;    
  }

  public function loginUser(){
    if($this->emptyInput()==false){
      header("location:../index.php?error=emptyInputii");
      exit();
    }

    if($this->inValidUserName()==false){
      header("location:../index.php?error=invalidUsername");
      exit();
    }

    $this->getUser($this->username,$this->password);

  }

  private function emptyInput(){
    $result=true;
    if(empty($this->username)||empty($this->password)){
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

}



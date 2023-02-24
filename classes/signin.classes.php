<?php  

class Login extends Dbh{


  protected function getUser($username,$password){

    $stmt = $this->connect()->prepare('select password from users where username=?');
    
    if(!$stmt->execute(array($username))){
      $stmt = null;
      header("location:../index.php?error=stmtfailed");
      exit();
    }
    
    
    if(!$stmt->rowCount()>0){
      $stmt = null;
      header("location:../index.php?error=usernotfound");
      exit();
    }
  
    $result = $stmt->fetch();
    $checkPassword = password_verify($password,$result['password']);
 
    if(!$checkPassword){
      $stmt = null;
      header("location:../index.php?error=loginerror$checkPassword");
      exit();
    }

    header("location:../index.php?success=loginsuccess");

  }

}


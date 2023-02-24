<?php  

class Signup extends Dbh{


  protected function setUser($username,$email,$password){

    $stmt = $this->connect()->prepare('INSERT INTO users(username, email, password) VALUES(?,?,?);');
    $hashPassword = password_hash($password, PASSWORD_BCRYPT);
    
    if(!$stmt->execute(array($username,$email,$hashPassword))){
      $stmt = null;
      header("location:../index.php?error=stmtfailed");
      exit();
    }else{
      header("location:../index.php?success=dataisadded");
      exit();
    }
  }


  protected function checkUser($username,$email){
    $stmt = $this->connect()->prepare('select username from users where username=? or email=?;');
    if(!$stmt->execute(array($username,$email))){
      $stmt = null;
      header("location:../index.php?error=stmtfailed");
      exit();
    }

    $resultCheck=true;

    if($stmt->rowCount()>0){
      $resultCheck = false;
    }

    return $resultCheck;
  }

}
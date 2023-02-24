<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<section>

  <div class="signup-box">
    <form action="./includes/signup.inc.php" method="post">
      <input type="text" name="username" placeholder="username..">
      <input type="text" name="password" placeholder="password..">
      <input type="text" name="confirm_password" placeholder="confirm_password..">
      <input type="text" name="email" placeholder="email..">
      <br>
      <button type="submit" name="submit">submit</button>
    </form>
  </div>

  <div class="login-box" style="margin-top:10px;">
  <form action="./includes/login.inc.php" method="post">
    <input type="text" name="username" placeholder="username..">
    <input type="text" name="password" placeholder="password..">
    <br>
    <button name="submit" type="submit">submit</button>
  </form>

  </div>
</section>
  
</body>
</html>
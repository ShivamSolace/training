<?php
include('./public/header.php');
include('./public/meta.php');
if(isset($_POST['submit'])){
  $userName= $_POST['eMail'];
  $userPassword= $_POST['password'];
  $data= $auth->login($userName,$userPassword);
  echo "".$data;
}
?>
  
<!-- body start -->
<div class="login-form">
  <form action="index.php" method="POST">
    <h1>Login to Your Soceity</h1>
    <div class="content">
      <div class="input-field">
        <input type="email" placeholder="Email" autocomplete="nope" name="eMail"/>
      </div>
      <div class="input-field">
        <input type="password" placeholder="Password" autocomplete="new-password" name="password"/>
      </div>
      <a href="html/forgetPassword.html" class="link">Forgot Your Password?</a>
    </div>
    <div class="action">
    <!-- <button><a href="html/register.html">Register</a></button> -->
    <!-- <button type="submit" name="submit" >Sign in</button> -->
    <button><input type="submit" name="submit"  value="Login"></button>
    </div>
  </form>
</div>
<!-- body end -->

<?php
//  $userName = $_POST["eMail"];
//  $userPassword = $_POST["password"];
//  $auth->login($userName,$userPassword);
include('./public/footer.php');
?>
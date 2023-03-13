<?php
include('./public/header.php');
include('./public/meta.php');
$displayError = "";

if (isset($_POST['submit'])) {
  $userMail = $_POST['eMail'];
  $userPassword = $_POST['password'];
  $userFirstName = $_POST[`'firstName`];
  $displayError = $auth->login($userMail, $userPassword);

  session_start();

  if ($displayError) {
    $_SESSION['userMail'] = $userMail;
    header("Location: ./user/admin/dashboard.php");
  } else {
    $displayError = "Incorrect Input";
  }
}
?>

<!-- body start -->
<div class="login-form">
  <form action="index.php" method="POST">
    <h1>Login to Your Soceity</h1>
    <div class="content">
      <div class="input-field">
        <input type="email" placeholder="Email" autocomplete="nope" name="eMail" required />
      </div>
      <div class="input-field">
        <input type="password" placeholder="Password" autocomplete="new-password" name="password" required />
      </div>
      <a href="forgotpassword.php" class="link">Forgot Your Password?</a>
    </div>
    <div class="action">
      <!-- <button><a href="html/register.html">Register</a></button> -->
      <!-- <button type="submit" name="submit" >Sign in</button> -->
      <button><input type="submit" name="submit" value="Login"></button>
      <?php echo $displayError ? ($displayError) : (""); ?>
    </div>
  </form>
</div>
<!-- body end -->

<?php
include('./public/footer.php');
?>

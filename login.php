<?php
  $email=$_POST['email'];
  $passe=$_POST['passe'];
  $valider=$_POST['valider']
  $erreur="";
if(isset($valider)){
  if ($email=='admin' && $passe=='123') {
    $_SESSION['USERS']="User1";
    header("location:index.php");
  }
  else{
    echo"Mauvaise passe et login";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/style.css">
  <title>Login</title>
</head>
<body>
  <section class="forms-section">
    <h1 class="section-title">Form animé</h1>
    <div class="forms">
      <div class="form-wrapper is-active">
        <button type="button" class="switcher switcher-login">
          CONNEXION
          <span class="underline"></span>
        </button>
        <form class="form form-login" methode="post" action="">
          <fieldset>
            <legend>S'il vous plais, entrer votre adresse e-mail</legend>
            <div class="input-block">
              <label for="login-email">E-mail</label>
              <input id="login-email" name="email" type="email" required>
            </div>
            <div class="input-block">
              <label for="login-password">Mot de passe</label>
              <input id="login-password" name="passe" type="password" required>
            </div>
          </fieldset>
          <button type="submit" name="valider" class="btn-login">connexion</button>
        </form>
      </div>
      <div class="form-wrapper">
        <button type="button" class="switcher switcher-signup">
          Sign Up
          <span class="underline"></span>
        </button>
        <form class="form form-signup">
          <fieldset>
            <legend>Please, enter your email, password and password confirmation for sign up.</legend>
            <div class="input-block">
              <label for="signup-email">E-mail</label>
              <input id="signup-email" type="email" required>
            </div>
            <div class="input-block">
              <label for="signup-password">Password</label>
              <input id="signup-password" type="password" required>
            </div>
            <div class="input-block">
              <label for="signup-password-confirm">Confirm password</label>
              <input id="signup-password-confirm" type="password" required>
            </div>
          </fieldset>
          <button type="submit" class="btn-signup">Continue</button>
        </form>
      </div>
    </div>
  </section>
<script src="./js/anime.js"></script>
</body>
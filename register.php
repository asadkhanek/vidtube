
<?php
if (isset($_POST[loginButton])) {
  echo"login page";
  // code...
}


 ?>



<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>welcome to spotify</title>
  </head>
  <body>
    <div class="inputContainer">
      <form class="loginForm" action="register.php" method="post">
      <h2>login to your account</h2>
      <p><label for="loginUsername">Username</label>
      <input type="loginUsername" name="loginUsername" value="text"placeholder="e.g.asadkhan"></p>
    <p>  <label for="loginpassword">password</label>
      <input type="password" name="password" value="password"placeholder="Your Password"></p>
    <button type="submit" name="loginButton">LOG IN</button>
      </form>




      <form class="redisterForm" action="register.php" method="post">
      <h2>Create your account</h2>


      <p><label for="firstName">First Name</label>
        <input type="firstName" name="firstName" value="text"placeholder="e.g.asadkhan"></p>

        <p><label for="lastname">last Name</label>
          <input type="lastname" name="lastname" value="text"placeholder="e.g.asadkhan"></p>

          <p><label for="email">Email</label>
          <input type="email" name="email" value="text"placeholder="e.g.asadkhan"></p>

            <p><label for="email2">Conform Email</label>
            <input type="email2" name="email2" value="text"placeholder="e.g.asadkhan"></p>

              <p><label for="loginPassword">login Password</label>
              <input type="Password" name="Password" value="Password"placeholder="Your Password"></p>



      <p><label for="password">conform password</label>
      <input type="password" name="password" value="Password"placeholder="Your Password"></p>
      <button type="submit" name="registerButton">SIGN UP</button>
      </form>
    </div>


  </body>
</html>

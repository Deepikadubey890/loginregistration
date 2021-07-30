<?php
require 'api/connect.php';
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style1.css">
    <title>Login & Registration</title>
  </head>
  <body>
    <div class="hero">
      <div class="form-box">
        <div class="button-box">
          <div id="btn"></div>
          <button type="button" class="toggle-button" onclick="login()">Login</button>
          <button type="button" class="toggle-button" onclick="register()">Register</button>
        </div>
        <div class="social-icons">
          <img src="../login&registration/img/fb.png" alt="" />
          <img src="../login&registration/img/tw.png" alt="" />
          <img src="../login&registration/img/gp.png" alt="" />
        </div>
        <form id="login" action="api/connect.php" method="POST" class="input-group">
            <input type="number" name="mobile" class="input-field" placeholder="Enter mobile" required>
            <input type="password" name ="password" class="input-field" placeholder="Enter Password" required>
            <input type="checkbox" class="Chek-box"><span>Remember Password</span>
            <button type="submit" name ="loginbtn"class="submit-btn"> Log in </button>
        </form>
        <form id="register" action ="api/connect.php" method="POST" class="input-group">
            <input type="text" name="username" class="input-field" placeholder="User name" required>
            <input type="number" name="mobile" class="input-field" placeholder="Enter mobile" required>
            <input type="password" name=" password" class="input-field" placeholder="Enter Password" required>
            <input type="checkbox" class="Chek-box"><span>I agree to the terms and condition </span>
            <button type="submit" name="registration" class="submit-btn"> Register </button>
        </form>
      </div>
    </div>
    <script>
        var x = document.getElementById("login")
        var y = document.getElementById("register")
        var z = document.getElementById("btn")
        function register(){
            x.style.left = "-400px"
            y.style.left = "50px"
            z.style.left = "110px"
        }
        function login(){
            x.style.left = "50px"
            y.style.left = "450px"
            z.style.left = "0"
        }
    </script>
  </body>
</html>

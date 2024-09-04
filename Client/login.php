<?php
session_start();

include("conn.php");

if (isset($_POST['signup'])) {
  $nm = $_POST["name"];
  $email = $_POST["mail"];
  $pwd = md5($_POST["pass"]);
  $mobile= $_post["mobile"];
  $path = "../" . basename($_FILES["image"]["name"]);

  if (move_uploaded_file($_FILES["image"]["tmp_name"], $path)) {
    mysqli_query($con, "INSERT INTO user_details (user_name, email_id, password, mobile_no, image) VALUES ('$nm','$email','$pwd', '$mobile','$path')");
  } else {
    echo "Failed to upload file.";
  }
}
?>

<?php


include("conn.php");
if (isset($_POST["login"])) {
  $pas = md5($_POST["password"]);
  $getuser = mysqli_query($con, "select * from user_details where email='" . $_POST["mail"] . "' AND password='" . $pas . "'");
  $res = mysqli_fetch_row($getuser);
  $nores = mysqli_num_rows($getuser);
  if ($nores >= 1) {
    $_SESSION["ad_session"] = $res[1];
    $_SESSION["usersession"] = 1;

    echo "<script>window.location='index.php';</script>";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="form.css">
  <title>Document</title>
</head>

<body>
  <div class="wrapper">
    <div class="title-text">
      <div class="title login">Login Form</div>
      <div class="title signup">Signup Form</div>
    </div>
    <div class="form-container">
      <div class="slide-controls">
        <input type="radio" name="slide" id="login" checked>
        <input type="radio" name="slide" id="signup">
        <label for="login" class="slide login">Login</label>
        <label for="signup" class="slide signup">Signup</label>
        <div class="slider-tab"></div>
      </div>
      <div class="form-inner">
        <!-- login form -->
        <form action="#" class="login">
          <div class="field">
            <input type="text" placeholder="Email Address / Mobile Number" required>
          </div>
          <div class="field">
            <input type="password" placeholder="Password" required>
          </div>
          <div class="pass-link"><a href="#">Forgot password?</a></div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Login">
          </div>
          <div class="signup-link">Not a member? <a href="">Signup now</a></div>
        </form>
        <!-- singup form -->
        <form action="#" class="signup">
          <div class="field">
            <input type="text" placeholder="User Name" name="name" required>
          </div>
          <div class="field">
            <input type="text" placeholder="Email Address" name="email" required>
          </div>
          <div class="field">
            <input type="text" placeholder="Mobile Number" name="mobile" required>
          </div>
          <div class="field">
            <input type="password" placeholder="Password" name="password" required>
          </div>
          <div class="field">
            <label for="signup-image">Profile Image</label>
            <input id="signup-image" type="file" name="image" required>
          </div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Signup">
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="form.js"></script>
</body>

</html>
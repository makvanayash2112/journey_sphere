<?php
session_start();

include("conn.php");

if (isset($_POST['signup'])) {
  // Corrected POST variable access
  $nm = $_POST["name"];
  $email = $_POST["email"];
  $mobile = $_POST["mobile"]; // Corrected $_post to $_POST
  $pwd = md5($_POST["password"]);

  // Check if the 'image' file was uploaded
  if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
    $path = "../" . basename($_FILES["image"]["name"]);

    // Check if the file was successfully moved
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $path)) {
      $query = "INSERT INTO user_details (user_name, email_id, password, mobile_no, image) 
                VALUES ('$nm','$email','$pwd', '$mobile','$path')";
      if (mysqli_query($con, $query)) {
        echo "Signup successful!";
      } else {
        echo "Database error: " . mysqli_error($con);
      }
    } else {
      echo "Failed to upload file.";
    }
  } else {
    echo "No file uploaded or there was an upload error.";
  }
}
?>

<?php
include("conn.php");

if (isset($_POST["login"])) {
  $pas = md5($_POST["password"]);
  $getuser = mysqli_query($con, "SELECT * FROM user_details WHERE email_id='" . $_POST["email"] . "' AND password='" . $pas . "'");
  $res = mysqli_fetch_row($getuser);
  $nores = mysqli_num_rows($getuser);
  if ($nores >= 1) {
    $_SESSION["ad_session"] = $res[1];
    $_SESSION["usersession"] = 1;

    echo "<script>window.location='Client/index.php';</script>";
    // header("Location: http://localhost/journeysphere/client/index.php");

  } else {
    echo "Invalid login credentials.";
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
        <form  class="login" method="post" enctype="multipart/form-data">
          <div class="field">
            <input type="text" placeholder="Email Address / Mobile Number" name="email" required>
          </div>
          <div class="field">
            <input type="password" placeholder="Password" name="password" required>
          </div>
          <div class="pass-link"><a href="#">Forgot password?</a></div>
          <div align="right">
          <a href="index.php">Get back to home</a>
          </div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Login" name="login">
          </div>
          <div class="signup-link">Not a member? <a href="">Signup now</a></div>
        </form>
        <!-- singup form -->
        <form class="signup" method="post" enctype="multipart/form-data">
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
          <br>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Signup" name="signup">
            <!-- <button  type="submit" name="signup"><a class="acolor">Sign up</a></button> -->
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="form.js"></script>
</body>

</html>
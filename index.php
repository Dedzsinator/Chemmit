<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Chemmit</title>
  <link rel="stylesheet" href="chat-style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Chemmit</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Vezetéknév</label>
            <input type="text" name="fname" placeholder="Vezetéknév" required>
          </div>
          <div class="field input">
            <label>Keresztnév</label>
            <input type="text" name="lname" placeholder="Keresztnév" required>
          </div>
        </div>
        <div class="field input">
          <label>Email cím</label>
          <input type="text" name="email" placeholder="Email cím" required>
        </div>
        <div class="field input">
          <label>Felhasználónév</label>
          <input type="text" name="username" placeholder="Felhasználónév" required>
        </div>
        <div class="field input">
          <label>Jelszó</label>
          <input type="password" name="password" placeholder="Add meg a jelszavad" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Profilkép kiválasztása</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Regisztráció">
        </div>
      </form>
      <div class="link">Van már fiókod? <a href="login.php">Jelentkezz be</a></div>
    </section>
  </div>

  <script src="./js/pass-show-hide.js"></script>
  <script src="./js/signup.js"></script>

</body>
</html>

<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: ./forum/index.php");
  }
?>

<!DOCTYPE html>
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
    <section class="form login">
      <header>Chemmit</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email cím</label>
          <input type="text" name="email" placeholder="Email cím" required>
        </div>
        <div class="field input">
          <label>Jelszó</label>
          <input type="password" name="password" placeholder="Jelszó megadása" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Bejelentkezés">
        </div>
      </form>
      <div class="link">Nincs még fiókod? <a href="index.php">Regisztrálj</a></div>
    </section>
  </div>
  
  <script src="./js/pass-show-hide.js"></script>
  <script src="./js/login.js"></script>

</body>
</html>

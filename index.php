<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chemmit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <br>
    <br>
    <div class="container text-center">
        <h1>Chemmit</h1>
    </div>
    <?php
        if (array_key_exists("success", $_GET)){
            $success = $_GET["success"];
        } else {
            $success = "";
        }
        if ($success === "Register_success"){
            echo "<script>alert('Sikeres regisztráció.')</script>";
        } else if ($success === "register_fail"){
            echo "<script>alert('Sikertelen regisztráció.')</script>";
        } else if ($success === "login_fail"){
            echo "<script>alert('Helytelen felhasználónév vagy jelszó.')</script>";
        }
    ?>
    <div class="container">
        <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
            <div class="card-body">
                <h5 class="card-title text-center">Bejelentkezés</h5>
                <form class="form-signin" action="login.php" method="post">
                <div class="form-label-group">
                    <label for="username">Felhasználónév</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
                </div>

                <div class="form-label-group">
                    <label for="pasword">Jelszó</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <br>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Bejelentkezés</button>
                </form>
                <br>
                <div class="text-center">
                    <p>Új vagy?  <a href="register/index.php">Regisztrálj.</a></p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</body>
<script src="./js/app.js"></script>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chemmit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <br>
    <br>
    <div class="container text-center">
        <h1>Chemmit</h1>
    </div>
    <div class="container">
        <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
            <div class="card-body">
                <h5 class="card-title text-center">Regisztráció</h5>
                <form class="form-signin" action="register.php" method="post" onsubmit="return passwordValidation()">
                <div class="form-label-group">
                    <br>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Felhasználónév" required autofocus>
                </div>

                <div class="form-label-group">
                    <br>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Jelszó" required>
                </div>
                <div class="form-label-group">
                    <br>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Jelszó megerősítése" required>
                </div>

                <br>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="add_new_admin">Regisztráció</button>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</body>
<script>
    function passwordValidation(){
        var pass = document.getElementById("password").value;
        var pass2 = document.getElementById("password_confirmation").value;

        if (pass == pass2 ){
            return true;
        } else {
            alert('A jelszavaknak találniuk kell!');
            return false;
        }
    }
</script>
</html>
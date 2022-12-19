<?php
        session_start();
        include_once "../php/config.php";
        if(!isset($_SESSION['unique_id'])){
          header("location: login.php");
        }
        $cat = $_GET['category'];
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chemmit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<header>
    <ul class="list">
        <li><a href="./index.php">Kezdőlap</a></li>
        <li><a href="../users.php">Csevegés</a></li>
        <li class="dropdown">
            <button class="dropbtn">Kategóriák
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">

            <?php
                $query = "select name from categories";
                $posts = mysqli_query($db, $query);
                $num_row = mysqli_num_rows($posts);
                    foreach($posts as $post){
                        $category = $post["name"];

                        echo "
                            <a href=\"./categories.php?category=$category\" class=\"text\">$category</a>
                        ";

                        
                    }
                ?>
            </div>
        </li>
        <h1 class="text-center title">Chemmit</h1>
        <div class="text-center">
            <a href="logout.php" class="btn btn-danger ">Kijelentkezés</a>
        </div>
        
        <div class="toggle-container">
        <input type="checkbox" id="switch" name="theme" />
        <label class="toggle" for="switch"></label>
      </div>

    </ul>
        
        
    </header>

    <div class="">
        <br>
        <h3 class="txt">Poszt hozzáadása :</h3>
        <div class="text-center txtarea">
            <form action="add_post.php" class="form-group" id="post" method="POST" onsubmit="return validasiPost()">
                <input type="text" name="title" class="form-cat" placeholder="Cím">
                <input type="text" name="category" class="form-cat" placeholder="Kategória">
                <textarea name="message" class="form-control" id="message" cols="30" rows="7"></textarea>
                <br>
                <input class="col-md-8 btn btn-lg btn-primary " type="submit" form="post" value="Hozzáadás">
            </form>
        </div>
    </div>

    <div>
        <?php
            $query = "select * from post where id=id_parent and category = '$cat' order by time desc";
            $posts = mysqli_query($db, $query);
            $num_row = mysqli_num_rows($posts);
            if ( $num_row === 0){
                echo"
                <br>
                <div class=\" text-center\">
                    <h3>Nincsenek posztok</h3>
                </div>
                ";
            } else {
                foreach($posts as $post){
                    $id = (int)$post["id"];
                    $username = $post["username"];
                    $message = $post["message"];
                    $category = $post["category"];
                    $title = $post["title"];
                    $time = $post["time"];
                    $sql = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");
                    $row = mysqli_fetch_assoc($sql);

                    $img = $row['img'];
                    echo "
                    <div class=\"\">
                        <div class=\"container-fluid mt-100\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"card mb-4\">
                                        <div class=\"card-header\">
                                            <div class=\"media flex-wrap w-100 align-items-center\"> 
                                                <img style=\"border-radius:50%; margin-right:10px\" src=\"../php/images/$img\">
                                                <div class=\"media-body\"> <a href=\"javascript:void(0)\" data-abc=\"true\">$username</a>
                                                    <div class=\"text-muted small\">$time</div>
                                                </div>
                                                <div class=\"card-title\">
                                                <h1 class=\"text\">
                                                $title
                                                </h1>
                                                <h1 class=\"text\">
                                                $category
                                                </h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"card-body\">
                                            <p> 
                                                $message
                                            </p>
                                        </div>
                                        <div class=\"card-footer actionBox\">
                    ";

                    $reply_query = "select * from post where id_parent<>id and id_parent=$id";
                    $replys = mysqli_query($db, $reply_query);

                    foreach ($replys as $reply) {
                        $username = $reply["username"];
                        $message = $reply["message"];
                        $time = $reply["time"];
                        $sql = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");
                        $row2 = mysqli_fetch_assoc($sql);

                        $img2 = $row2['img'];
                        echo "
                            <!-- <h6>Hozzászólások :</h6> -->
                            <ul class=\"commentList\">
                                <li>
                                    <div class=\"commenterImage\">
                                    <img style=\"border-radius:50%; margin-right:10px\" src=\"../php/images/$img\">
                                    </div>
                                    <div class=\"commentText\">
                                        <p><b>$username</b></p>
                                        <p class=\"\">$message</p> <span class=\"date sub-text\">$time</span>
                    
                                    </div>
                                </li>
                            </ul>
                        ";
                    }

                    echo "
                                            <form action=\"add_reply.php?id=$id\" class=\"form-inline\" role=\"form\" id=\"reply$id\" method=\"POST\">
                                                <div class=\"form-group\">
                                                    <input class=\"form-control\" name=\"reply\" type=\"text\" placeholder=\"Hozzászólás\" required/>
                                                </div>
                                                <div class=\"form-group\">
                                                    <button class=\"btn btn-primary\" for=\"reply$id\">Hozzáadás</button>
                                                </div>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
                }
            }
        ?>
    </div>

    <?php
        if (array_key_exists("success", $_GET)){
            $success = $_GET["success"];
        } else {
            $success = "";
        }
        if ($success === "post_success"){
            echo "<script>alert('A bejegyzés sikeresen elküldve')</script>";
        } else if ($success === "post_fail"){
            echo "<script>alert('A bejegyzés közzététele nem sikerült')</script>";
        } else if ($success === "reply_success"){
            echo "<script>alert('A válasz működött')</script>";
        } else if ($success === "reply_fail"){
            echo "<script>alert('A válasz nem sikerült')</script>";
        }
    ?>
</body>

<script type = "text/javascript">
    function validasiPost(){
        var message = document.getElementById("message").value;
        if (message != "" ){
            return true;
        } else {
            return false;
        }
    }
</script>
<script src="../js/app.js"></script>
</html>
<?php 
    session_start();

    include("config/config.php");

    // Save the current page URL in a session variable
    $_SESSION['last_visited'] = $_SERVER['REQUEST_URI'];

    if (!empty($_SESSION["id"])) {
        $id = $_SESSION["id"];
        $result = mysqli_query($conn, "SELECT * FROM users WHERE id = '$id'");
        $row = mysqli_fetch_assoc($result);
    }else {
        //header("Location: login.php");
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/fa72ae50a1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Gallery</title>
</head>
<body>
<?php include "header.php";?>
    <div class="profile-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                    <div class="img1"><img src="images/a1.jpg" alt=""></div>
                        <div class="img2"><img src="images/d.jpg" alt=""></div>
                        <div class="main-text">
                            <h2>Project 1</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, itaque. Aut aliquam nam deserunt culpa nobis cupiditate enim esse consequuntur animi, excepturi quam autem ipsum vero. Ipsam enim quia fugiat quasi corrupti, fuga hic, animi id, quae provident ut incidunt!</p>
                            <div class="socials">
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-github"></i>
                            <i class="fa-brands fa-instagram"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="img1"><img src="images/a2.jpg" alt=""></div>
                        <div class="img2"><img src="images/e.jpg" alt=""></div>
                        <div class="main-text">
                            <h2>Project 2</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, itaque. Aut aliquam nam deserunt culpa nobis cupiditate enim esse consequuntur animi, excepturi quam autem ipsum vero. Ipsam enim quia fugiat quasi corrupti, fuga hic, animi id, quae provident ut incidunt!</p>
                            <div class="socials">
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-github"></i>
                            <i class="fa-brands fa-instagram"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <div class="img1"><img src="images/a3.jpg" alt=""></div>
                        <div class="img2"><img src="images/f.jpg" alt=""></div>
                        <div class="main-text">
                            <h2>Project 3</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, itaque. Aut aliquam nam deserunt culpa nobis cupiditate enim esse consequuntur animi, excepturi quam autem ipsum vero. Ipsam enim quia fugiat quasi corrupti, fuga hic, animi id, quae provident ut incidunt!</p>
                            <div class="socials">
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-github"></i>
                            <i class="fa-brands fa-instagram"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

<?php include "footer.php";?>
</body>
</html>
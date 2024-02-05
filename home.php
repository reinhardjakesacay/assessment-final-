<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/fa72ae50a1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <?php include "header.php";?>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="hero-content">
                        <h1 class="dispay-1 fw-bold">Welcome</h1>
                        <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum assumenda deleniti optio! Quidem accusamus odio repellat iusto excepturi voluptate officia totam. Qui repellat dolorum deserunt laboriosam sequi, totam nostrum quaerat praesentium rem velit blanditiis nam amet alias quia. Eaque expedita adipisci magnam tenetur accusantium aliquam ducimus quas repellendus voluptate quisquam.</p>
                        <a href="register.php"><button class="btn btn-dark">Register</button></a>
                        <a href="login.php"><button class="btn btn-dark">Log In</button></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img src="images/hero.png" alt="hero" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="page-break">
            <a class="nav-link"href="home.php"><h1 class="dispay-1 fw-bold">Home</h1></a>
            <a class="nav-link"href="profile.php"><h1 class="dispay-1 fw-bold">Profile</h1></a>
            <a class="nav-link"href="gallery.php"><h1 class="dispay-1 fw-bold">Gallery</h1></a>
            <a class="nav-link"href="contact.php"><h1 class="dispay-1 fw-bold">Contact Us</h1></a>
        </div>

        <div class="container">
            <div class="row2">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="hero-content">
                        <h1 class="dispay-1 fw-bold">Assessment</h1>
                        <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum assumenda deleniti optio! Quidem accusamus odio repellat iusto excepturi voluptate officia totam. Qui repellat dolorum deserunt laboriosam sequi, totam nostrum quaerat praesentium rem velit blanditiis nam amet alias quia. Eaque expedita adipisci magnam tenetur accusantium aliquam ducimus quas repellendus voluptate quisquam.</p>
                    </div>
                </div>
                        <p class="lead dsc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum assumenda deleniti optio! Quidem accusamus odio repellat iusto excepturi voluptate officia totam. Qui repellat dolorum deserunt laboriosam sequi, totam nostrum quaerat praesentium rem velit blanditiis nam amet alias quia. Eaque expedita adipisci magnam tenetur accusantium aliquam ducimus quas repellendus voluptate quisquam.</p>
            </div>
        </div>

    <?php include "footer.php";?>
</body>
</html>
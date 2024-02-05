<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/fa72ae50a1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Profile</title>
</head>
<body>
    <?php include "header.php";?>
    <div class="container">
        <div class="main">
            <div class="row">
                <div class="col-md-4 mt-1">
                    <div class="card text-center sidebar">
                        <div class="card-body">
                            <img src="images/hero.png" class="profile-image rounded-circle" alt="Profile picture">
                            <div class="mt-3">
                                <h3>Reinhard Jake Sacay</h3>
                                <a href="home.php">Home</a>
                                <a href="profile.php">Profile</a>
                                <a href="gallery.php">Gallery</a>
                                <a href="contact.php">Contact</a>
                                <a href="#">Log out</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mt-1">
                <div class="card mb-3 content">
                    <h1 class="m-3 pt-3 about">About</h1>
                    <div class="card-body">
                        <div class="row info">
                            <div class="col-md-3">
                                <h5>Full Name</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                                Reinhard Jake Sacay
                            </div>
                        </div>
                        <div class="row info">
                            <div class="col-md-3">
                                <h5>Gender</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                                Male
                            </div>
                        </div>
                        <div class="row info">
                            <div class="col-md-3">
                                <h5>Age</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                                21 years old
                            </div>
                        </div>
                        <div class="row info">
                            <div class="col-md-3">
                                <h5>Email</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                                reinhard@gmail.com
                            </div>
                        </div>
                        <div class="row info">
                            <div class="col-md-3">
                                <h5>Phone</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                                09xxxxxxxxxx
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9 description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam animi excepturi veritatis accusantium eaque alias labore inventore molestias ducimus maiores ea quisquam architecto aspernatur, similique ipsa cupiditate odio quidem perferendis!
                            </div>
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
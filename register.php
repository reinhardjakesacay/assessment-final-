<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/fa72ae50a1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Contact</title>
</head>
<body>
<?php include "header.php";?>

    <div class="container register">
        <form action="" class="form-signup">
            <h2>Register</h2>
            <p>Create your account bench!</p>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="firstname" placeholder="First Name" class="form-control" maxlength="50">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="lastname" placeholder="Last Name" class="form-control" maxlength="50">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="number" name="age" placeholder="Age" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="gender" placeholder="Gender" class="form-control">
            </div>
            <div class="form-group">
                <input type="tel" name="number" placeholder="Phone Number" maxlength="11" pattern="0[0-9]{10}" class="form-control">
            </div>
            <div class="form-group">
                <input type="email" name="email" id="" placeholder="Email Address" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password:" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_]).{6,}" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" name="repeat_password" placeholder="Repeat Password:" pattern=".{6,}" class="form-control">
            </div>
            <div class="form-group">
                <a href="login.php"><button class="btn btn-primary btn1">Log in</button></a>
            </div>
        </form>
    </div>

<?php include "footer.php";?>
</body>
</html>
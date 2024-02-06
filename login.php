<?php 
    session_start();

    include("config/config.php");

    if (!empty($_SESSION['id'])) {
        header("Location: home.php");
    }

    if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);

        $result = mysqli_query($conn,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
        $row = mysqli_fetch_assoc($result);

        if(is_array($row) && !empty($row)){
            $_SESSION['valid'] = $row['Email'];
            $_SESSION['id'] = $row['id'];

            // Check if last_visited is set
            if (isset($_SESSION['last_visited'])) {
                // Redirect to the last visited page
                header("Location: " . $_SESSION['last_visited']);
            } else {
                // Redirect to home.php as default
                header("Location: home.php");
            }
        } else {
            echo "<div class='message'>
                <p>Wrong Email, Username, or Password</p>
                </div> <br>";
            echo "<a href='home.php'><button class='btn'>Go Back</button>";
        }
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
    <title>Contact</title>
</head>
<body>
<?php include "header.php";?>
    <section>
        <div class="container mt-5 pt-5">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div class="card">
                    <div class="card-body profile">
                    <svg xmlns="http://www.w3.org/2000/svg" class="person mx-auto" width="69" height="69" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg>
                        <form action="login.php" method="post">
                            <input type="email" name="email" id="email" class="form-control my-3 py-2" placeholder="Email">
                            <input type="password" name="password" id="password" class="form-control my-3 py-2" placeholder="Password">
                            <div class="text-center mt-3">
                                <button class="btn btn-primary btn1" type="submit" name="submit">Log in
                                </button><br>
                                <p>Don't have an account? <a href="register.php">Click here!</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include "footer.php";?>
</body>
</html>
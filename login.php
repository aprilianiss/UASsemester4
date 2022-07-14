<?php 
include "php/init.php";
conn();

// jika user sudah login redirect ke dashboard
if( isset($_SESSION['username']) ){
    header("Location: dashboard.php");
}

// user login
if( isset($_POST['login']) ){
    login($_POST['username'], $_POST['password']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PERPUSTAKAAN ONLINE</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .card {
            width: 60vw;
        }
    </style>
</head>
<body>
<form method="post">
    <div class="wrp-login">
        <div class="card">
            <div class="card-title text-center">
                <h3>PERPUSTAKAAN ONLINE</h3>
            </div>
            <div class="card-body">
                <div class="align-center">
                    <form action="">
                        <!-- username -->
                        <div class="input-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" placeholder="Username">
                        </div>

                        <!-- password -->
                        <div class="input-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" placeholder="Username">
                        </div>

                        <!-- submit -->
                        <div class="input-group">
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="js/app.js"></script>
</body>
</html>
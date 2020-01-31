<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="css/login.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
<?php
session_start();

if (empty($_SESSION['username']))
{
    header('location: ./dashboard.php');
}

?>
<div class="container-sm bg-white vh-75" style="max-width: 70%;">


    <div class="row h-100 my-auto">

        <div class="col-lg-5 d-none d-lg-block col-md-4" style="padding: 2.25rem 1.25rem 2.25rem 2.5rem;">
            <div id="login-frame">
                <p>Kom langs op onze open dagen!</p>
            </div>
        </div>


        <div class="col-12 col-lg-7" style="padding: 2.25rem 0rem 2.25rem 3rem; transition: all .3s;">

            <div id="sign-in">
                <h2 style="font-size: 5vw">Login_</h2>

                <form method="post" action="php/sign-in.php">

                    <div class="username">
                        <input type="text" name="name" placeholder="USERNAME">
                        <div class="username-text"></div>
                    </div>

                    <div class="username">
                        <input type="password" name="password" placeholder="PASSWORD">
                        <div class="username-text"></div>
                    </div>
                    <input type="submit" name="login" style="margin-top: 5vh; transition: none; width: 120px;" class="btn btn-dark">

                </form>

            </div>
        </div>

    </div>
</div>
</body>
</html>

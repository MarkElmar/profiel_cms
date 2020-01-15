<?php
session_start();
if (isset($_SERVER['HTTP_REFERER']) AND $_SERVER['HTTP_REFERER'] === 'https://project1175.ict-lab.nl/login.php') {
    $token_p = $_POST['token'];
    $token_s = $_SESSION['token'];
    if ($token_p === $token_s) {
        unset($_SESSION['token']);

        $name = $_POST['name'];
        $password = $_POST['password'];

        if (isset($_POST['name'])
            && isset($_POST['password'])) {

            $query = "SELECT password FROM users WHERE username = '$name'";
            $result = $conn->query($query);

            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                $hash = $row['password'];

                if (password_verify($password, $hash)) {

                    $_SESSION['username'] = $name;

                } else {
                    header("Location: login.php?wrongPassword");
                    exit;
                }
            } else {
                header("Location: login.php?wrongUser");
                exit;
            }
        } else {
            header("Loction: login.php?empty");
            exit;
        }


    }
}
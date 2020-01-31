<?php

$name = $_POST['name'];
$password = $_POST['password'];

if (isset($_POST['name'])
    && isset($_POST['password'])) {

    require_once "../includes/config.inc.php";

    $query = "SELECT password FROM users WHERE username = '$name'";
    $result = $conn->query($query);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hash = $row['password'];

        if (password_verify($password, $hash)) {

            session_start();
            $_SESSION['username'] = $name;
            header("Location: ../dashboard.php");
        } else {
            header("Location: ../login.php?wrongPassword");
            exit;
        }
    } else {
        header("Location: ../login.php?wrongUser");
        exit;
    }
} else {
    header("Location: ../login.php?empty");
    exit;
}
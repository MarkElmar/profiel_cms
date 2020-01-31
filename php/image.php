<?php
if ($_SERVER['HTTP_REFERER'] && $_SERVER['HTTP_REFERER'] == 'https://project1175.ict-lab.nl/add_image.php') {
    session_start();
    if (empty($_SESSION['user'])) {
        header("Location: ./");
        exit;
    }
    if (!empty($_POST['image']) && !empty($_POST['name'])) {


    }
}
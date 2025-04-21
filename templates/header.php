<?php
    include_once 'config/url.php';
    include_once 'config/process.php';

    if(isset($_SESSION['msg'])){
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = '';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
                <img src="<?= $BASE_URL ?>img/agenda.png" alt="agenda">
            </a>
            <div>
                <div class="navbar-nav">
                    <a class="nav-link" id="home-link" href="<?= $BASE_URL ?>index.php">Agenda</a>
                    <a class="nav-link" href="<?= $BASE_URL ?>create.php">Adicionar contato</a>
                    
                </div>
            </div>
        </nav>
    </header>
<?php
    require_once("classes/init.php");
?>

<!doctype html>
<html>
<head>
    <title>Reservation Manager</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <meta name="description" content="This site is a sample for Reservation Management System and its built with HTML, CSS, Javascript and PHP.">
    
    <!-- <base href="./reservation_manager/" > -->
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsible.css">
<?php
    if($session->is_signed_in()) {
        // echo '<link rel="stylesheet" href="css/index_style.css">';
        // echo '<link rel="stylesheet" href="css/index_style_responsible.css">';
        // echo '<link rel="stylesheet" href="css/color_style.css">';
    } else {
        echo '<link rel="stylesheet" href="css/login_style.css">';
        echo '<link rel="stylesheet" href="css/login_style_responsible.css">';
    }
?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#f73d93">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;400&display=swap');
   </style>
</head>
<body>

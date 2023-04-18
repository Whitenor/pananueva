<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body class="bg-pananuevaOrange">

<?php
    if (has_nav_menu('header-menu')) : 
        wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'container'      => 'nav',
            'menu_class'     => 'no-bullets no-margin flex flex-row w-full justify-center gap-5',
        )); 
        endif;
    ?>
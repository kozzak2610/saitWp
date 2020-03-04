<?php
global $redux_demo;
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="fitness, html">
    <meta test="111">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!-- Favicon -->
    <link href="<?php echo get_template_directory_uri() ?>/img/favicon.ico" rel="shortcut icon"/>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">
    <style>

    </style>
    <?php wp_head(); ?>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php

        if( ! is_admin()){
            ?>
            <style>
                .lang-item{
                    position: absolute;
                    top:35px;
                    left: 190px;
                    list-style-type: none;

                }
                .lang-item a img {
                    width: 25px !important;
                    height: 13px !important;
                }
            </style>
            <?
        } else{ ?>

            <style>
                .lang-item{
                    position: absolute;
                    top:60px;
                    left: 190px;
                    list-style-type: none;

                }
            </style>
    <?php }

    ?>
</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section -->
<header class="header-section">

    <a href="<?php echo home_url(); ?>" class="site-logo">
        <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="">
    </a>


    <?php
    wp_nav_menu( array(
        'menu'            => '',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
        // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
        'container'       => 'div',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
        'container_class' => '',              // (string) class контейнера (div тега)
        'container_id'    => '',              // (string) id контейнера (div тега)
        'menu_class'      => 'main-menu',          // (string) class самого меню (ul тега)
        'menu_id'         => '',              // (string) id самого меню (ul тега)
        'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
        'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
        'before'          => '',              // (string) Текст перед <a> каждой ссылки
        'after'           => '',              // (string) Текст после </a> каждой ссылки
        'link_before'     => '',              // (string) Текст перед анкором (текстом) ссылки
        'link_after'      => '',              // (string) Текст после анкора (текста) ссылки
        'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
        'walker'          => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
        'theme_location'  => ''               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
    ) );
    ?>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header-default') ) : ?>
    <?php endif; ?>
   
</header>
<div class="clearfix"></div>
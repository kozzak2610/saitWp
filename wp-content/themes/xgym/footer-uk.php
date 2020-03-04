<!-- Footer section -->
<?php
/*
 
 */
global $redux_demo;

?>
<footer class="footer-section set-bg" data-setbg="<?php echo get_template_directory_uri() ?>/img/footer-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget">
                    <h4>Адреса</h4>
                    <div class="fw-info-box">
                        <img src="img/icons/1.png" alt="">
                        <div class="fw-info-text">
                            <p><?php echo $redux_demo["Location"];?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget">
                    <h4>Телефон</h4>
                    <div class="fw-info-box">
                        <img src="img/icons/2.png" alt="">
                        <div class="fw-info-text">
                            <p><?php echo $redux_demo["Phone1"];?></p>
                            <p><?php echo $redux_demo["Phone2"];?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget">
                    <h4>E-mail</h4>
                    <div class="fw-info-box">
                        <img src="img/icons/3.png" alt="">
                        <div class="fw-info-text">
                            <p><?php echo $redux_demo["email"];?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget">
                    <h4>Ми в соц.мережах</h4>
                    <div class="fw-info-box">
                        <div class="social-links">
                            <a href="https://www.instagram.com/<?php echo $redux_demo["facebook"];?>"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.twitter.com/<?php echo $redux_demo["twitter"];?>"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.facebook.com/<?php echo $redux_demo["instagram"];?>"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 order-2 order-md-1">
                <div class="copyright"></div>
            </div>
            <div class="col-md-6 order-1 order-md-2">
                <?php
                wp_nav_menu( array(
                    'menu'            => 'bottom menu',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
                    // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
                    'container'       => 'div',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
                    'container_class' => 'col-md-6 order-1 order-md-2',              // (string) class контейнера (div тега)
                    'container_id'    => '',              // (string) id контейнера (div тега)
                    'menu_class'      => 'footer-menu',          // (string) class самого меню (ul тега)
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

            </div></div>
</footer>
<!-- Footer section end -->

<!--====== Javascripts & Jquery ======-->
<?php wp_footer(); ?>
</body>
</html>

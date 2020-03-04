<?php
require_once('sample/sample-config.php');
/**
 * Enqueue custom styles.
 */

function sydney_custom_styles()
{
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array());
    wp_enqueue_style('flaticon_style', get_template_directory_uri() . '/css/flaticon.css', array());
    wp_enqueue_style('slicknav_style', get_template_directory_uri() . '/css/slicknav.min.css', array());
    wp_enqueue_style('awesome_style', get_template_directory_uri() . '/css/font-awesome.min.css', array());
    wp_enqueue_style('owl_style', get_template_directory_uri() . '/css/owl.carousel.min.css', array());
    wp_enqueue_style('custom_style', get_template_directory_uri() . '/css/style.css', array());


}

add_action('wp_enqueue_scripts', 'sydney_custom_styles');

/**
 * Enqueue custom scripts
 */

function own_scripts()
{
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array());
    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array());
    wp_enqueue_script('jquery.slicknav-js', get_template_directory_uri() . '/js/jquery.slicknav.js', array());
    wp_enqueue_script('circle-js', get_template_directory_uri() . '/js/circle-progress.min.js', array());
    wp_enqueue_script('owl-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array());
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array());


}

add_action('wp_footer', 'own_scripts', 5);

register_nav_menus(array(
    'top' => ' top menu',    //Название месторасположения меню в шаблоне
    'bottom' => 'bottom menu'      //Название другого месторасположения меню в шаблоне
));
add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);


function add_this_script_footer()
{ ?>
    <script>
        var list = document.getElementsByTagName('section')

        for (var i = 0; i < list.length; i++) {
            var src = list[i].getAttribute('data-setbg');
            list[i].style.backgroundImage = "url('" + src + "')";
        }
        var list = document.getElementsByTagName('footer')

        for (var i = 0; i < list.length; i++) {
            var src = list[i].getAttribute('data-setbg');
            list[i].style.backgroundImage = "url('" + src + "')";
        }
        var list = document.getElementsByTagName('div')

        for (var i = 0; i < list.length; i++) {
            var src = list[i].getAttribute('data-setbg');
            list[i].style.backgroundImage = "url('" + src + "')";
        }
    </script>

<?php }

add_action('wp_footer', 'add_this_script_footer');


Redux::setSection($opt_name, array(
    'title' => __('Theme options', 'redux-framework-demo'),
    'id' => 'basic-xgym',
    'desc' => __('These are really basic fields!', 'redux-framework-demo'),
    'customizer_width' => '400px',
    'icon' => 'el el-home'
));
Redux::setSection($opt_name, array(
    'title' => __('Theme options', 'redux-framework-demo'),
    'id' => 'basic-xgym',
    'desc' => __('These are really basic fields!', 'redux-framework-demo'),
    'customizer_width' => '400px',
    'icon' => 'el el-home'
));

Redux::setSection($opt_name, array(
    'title' => __('Social info', 'redux-framework-demo'),
    'id' => 'basic-xgym-socialIcons',
    'subsection' => true,
    'customizer_width' => '450px',
    'fields' => array(
        array(
            'id' => 'instagram',
            'type' => 'text',
            'title' => __('instagram', 'redux-framework-demo'),
            'default' => 'Default Text',
        ),
        array(
            'id' => 'facebook',
            'type' => 'text',
            'title' => __('facebook', 'redux-framework-demo'),
            'default' => 'Default Text',
        ),
        array(
            'id' => 'twitter',
            'type' => 'text',
            'title' => __('twitter', 'redux-framework-demo'),
            'default' => 'Default Text',
        ),
        array(
            'id' => 'Location',
            'type' => 'text',
            'title' => __('Location', 'redux-framework-demo'),
            'default' => 'Default Text',
        ),
        array(
            'id' => 'Phone1',
            'type' => 'text',
            'title' => __('Phone 1', 'redux-framework-demo'),
            'default' => 'Default Text',
        ),
        array(
            'id' => 'Phone2',
            'type' => 'text',
            'title' => __('Phone 2', 'redux-framework-demo'),
            'default' => 'Default Text',
        ),
        array(
            'id' => 'email',
            'type' => 'text',
            'title' => __('email', 'redux-framework-demo'),
            'default' => 'Default Text',
        )
    )
));
Redux::setSection($opt_name, array(
    'title' => __('Homepage', 'redux-framework-demo'),
    'id' => 'basic-xgym-homePage',
    'subsection' => true,
    'customizer_width' => '450px',
    'fields' => array(
        array(
            'id'       => 'First-Workouts-textarea',
            'type'     => 'textarea',
            'title'    => __( 'First Workouts', 'redux-framework-demo' ),
            'default'  => '',
        ),
        array(
            'id'       => 'Second-Workouts-textarea',
            'type'     => 'textarea',
            'title'    => __( 'Second Workouts', 'redux-framework-demo' ),
            'default'  => '',
        ),
        array(
            'id'       => 'Three-Workouts-textarea',
            'type'     => 'textarea',
            'title'    => __( 'Three Workouts', 'redux-framework-demo' ),
            'default'  => '',
        ),
    )
));

function prefix_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'  => 'Meta Box',
        'fields' => array(
            array(
                'id'   => 'first-Workouts-textarea',
                'name' => 'first-Workouts-textarea',
                'type' => 'textarea',
            ),
            array(
                'id' => 'second-Workouts-textarea',
                'name' => 'second-Workouts-textarea',
                'type' => 'textarea',
            ),
            array(
                'id' => 'three-Workouts-textarea',
                'name' => 'three-Workouts-textarea',
                'type' => 'textarea',
            ),
        ),
    );
    return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'prefix_meta_boxes' );
add_filter('the_content', 'do_shortcode', 11);
add_theme_support('post-thumbnails');

function register_my_widgets(){
    register_sidebar( array(
        'name' => "Правая боковая панель сайта",
        'id' => 'right-sidebar',
        'description' => 'Эти виджеты будут показаны в правой колонке сайта',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ) );
}
add_action( 'widgets_init', 'register_my_widgets' );
register_sidebar(array(
    'name' => 'Іidebar Widget 1',
    'id' => 'sidebar-1',
    'description' => 'Первая область',
    'before_widget' => '<div class="widget-area">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>',
));
register_sidebar(array(
    'name' => 'default Widget',
    'id' => 'sidebar-default',
    'description' => 'Первая область',
    'before_widget' => '<div class="widget-area">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>',
));
register_sidebar(array(
    'name' => 'header Widget',
    'id' => 'header-default',
    'description' => 'Первая область',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '',
    'after_title' => '',
));


add_action( 'init', 'register_post_types' );
function register_post_types(){
    register_post_type('train', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'train', // основное название для типа записи
            'singular_name'      => 'тренера', // название для одной записи этого типа
            'add_new'            => 'Добавить тренера', // для добавления новой записи
            'add_new_item'       => 'Добавление тренера', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование тренера', // для редактирования типа записи
            'new_item'           => 'Новое тренера', // текст новой записи
            'view_item'          => 'Смотреть тренера', // для просмотра записи этого типа.
            'search_items'       => 'Искать тренера', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Тренера', // название меню
        ),
        'description'         => '',
        'public'              => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'excerpt' ,'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ) );
}





?>
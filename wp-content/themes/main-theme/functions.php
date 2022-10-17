<?php
//add_filter( 'show_admin_bar', '__return_true' ); // выключить сайт бар

define('ALFA_THEME_ROOT', get_template_directory_uri());
const ALFA_CSS_DIR = ALFA_THEME_ROOT . '/assets/style/';
const ALFA_JS_DIR = ALFA_THEME_ROOT . '/assets/js/';
const ALFA_IMG_DIR = ALFA_THEME_ROOT . '/assets/images/';
const ALFA_IMG_DEFAULT = ALFA_THEME_ROOT . '/assets/images/default-img.svg';
const ALFA_404_IMG_DEFAULT = ALFA_THEME_ROOT . '/assets/images/404.svg';



require_once( dirname(__FILE__)  . '/shortcodes/list-shordcode.php');


add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('main', ALFA_CSS_DIR . 'main.css?' . time());
    wp_enqueue_style('root', ALFA_CSS_DIR . 'root.css?' . time());
    wp_enqueue_style('search-form', ALFA_CSS_DIR . 'search-form.css?' . time());
    wp_enqueue_style('simple-header', ALFA_CSS_DIR . 'simple-header.css?' . time());
    wp_enqueue_style('list-casinos', ALFA_CSS_DIR . 'list-casinos.css?' . time());
    wp_enqueue_style('faq', ALFA_CSS_DIR . 'faq.css?' . time());
    wp_enqueue_style('top-list-casinos', ALFA_CSS_DIR . 'top-list-casinos.css?' . time());
    wp_enqueue_style('cards-graphics', ALFA_CSS_DIR . 'cards-graphics.css?' . time());
    wp_enqueue_style('pros-cons', ALFA_CSS_DIR . 'pros-cons.css?' . time());
    wp_enqueue_style('univeral-boxes', ALFA_CSS_DIR . 'univeral-boxes.css?' . time());
    wp_enqueue_style('how-to', ALFA_CSS_DIR . 'how-to.css?' . time());
    wp_enqueue_style('simplebar', ALFA_CSS_DIR . 'simplebar.css?' . time());
    wp_enqueue_style('table-contents', ALFA_CSS_DIR . 'table-contents.css?' . time());
    wp_enqueue_style('title', ALFA_CSS_DIR . 'title.css?' . time());




    if(!is_page()) {
        wp_enqueue_style('contact-form', ALFA_CSS_DIR . 'contact-form.css?' . time());
        wp_enqueue_style('post', ALFA_CSS_DIR . 'post.css?' . time());
    }
    if(is_front_page()) {
        wp_enqueue_style('home-header', ALFA_CSS_DIR . 'home-header.css?' . time());
    }
    if((!is_page_template('templates/casino-template.php') || !is_page_template('templates/slot-template.php')) && is_single()) {
        wp_enqueue_style('news', ALFA_CSS_DIR . 'news.css?' . time());
    }
    if(is_page_template('templates/slot-template.php')){
        wp_enqueue_style('slot', ALFA_CSS_DIR . 'slot.css?' . time());
        wp_enqueue_script('slot', ALFA_JS_DIR . '/slot.js?' . time(), '', '', true);

    }
    if(is_page_template('templates/news-template.php')){
        wp_enqueue_style('list-news', ALFA_CSS_DIR . 'list-news.css?' . time());
    }
    if(is_page_template('templates/casino-template.php')){
        wp_enqueue_script('list-casinos', ALFA_JS_DIR . '/list-casinos.js?' . time(), '', '', true);
    }

    wp_enqueue_script('main', ALFA_JS_DIR . '/main.js?' . time(), '', '', true);
    wp_enqueue_script('custom', ALFA_JS_DIR . '/custom.js?' . time(), '', '', true);
    wp_enqueue_script('module-settings', ALFA_JS_DIR . '/module-settings.js?' . time(), '', '', true);
    wp_enqueue_script('main-menu', ALFA_JS_DIR . '/main-menu.js?' . time(), '', '', true);
    wp_enqueue_script('faq', ALFA_JS_DIR . '/faq.js?' . time(), '', '', true);
    wp_enqueue_script('simplebar', ALFA_JS_DIR . '/simplebar.js?' . time(), '', '', true);
    wp_enqueue_script('search', ALFA_JS_DIR . '/search.js?' . time(), '', '', true);
    wp_enqueue_script('list-slots', ALFA_JS_DIR . '/list-slots.js?' . time(), '', '', true);
    wp_enqueue_script('list-news', ALFA_JS_DIR . '/list-news.js?' . time(), '', '', true);
    wp_enqueue_script('assets-lazy', ALFA_JS_DIR . '/assets-lazy.js?' . time(), '', '', true);
    wp_enqueue_script('assets-lazy', ALFA_JS_DIR . '/assets-lazy.js?' . time(), '', '', true);
});

// дебаг функция
function custom_debug($obj) {
    echo '<pre>';
    var_dump($obj);
    echo '</pre>';
}


// Создаем страницы настроек в админке
if (function_exists('acf_add_options_page')) {
    // Главный пункт настроек
    $option_page = acf_add_options_page(
        [
            'page_title' => 'Общие настройки сайта',
            'menu_title' => 'Общие настройки',
            'menu_slug' => 'theme-general-settings',
            'capability' => 'edit_posts',
            'redirect' => false
        ]
    );
//     Вложенныя страницы
    $child = acf_add_options_page(
        [
            'page_title' => 'Общие параметры Favicon',
            'menu_title' => 'Favicon',
            'parent_slug' => $option_page['menu_slug'],
        ]
    );
    $child = acf_add_options_page(
        [
            'page_title' => 'Общие параметры 404 страницы',
            'menu_title' => '404-page',
            'parent_slug' => $option_page['menu_slug'],
        ]
    );
    $child = acf_add_options_page(
        [
            'page_title' => 'Общие параметры новостей',
            'menu_title' => 'Параметры новостей',
            'parent_slug' => $option_page['menu_slug'],
        ]
    );
    $child = acf_add_options_page(
        [
            'page_title' => 'Общие параметры Казино',
            'menu_title' => 'Параметры Казино',
            'parent_slug' => $option_page['menu_slug'],
        ]
    );
    $child = acf_add_options_page(
        [
            'page_title' => 'Общие параметры Слотов',
            'menu_title' => 'Параметры Слотов',
            'parent_slug' => $option_page['menu_slug'],
        ]
    );
}


//виджеты
function my_wpb_widgets_init() {
    register_sidebar( array(
        'name'          => '1 колонка виджетов в подвале',
        'id'            => 'first-col-widget',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div data-parent=".col-u-md" class="f-menu-title d-b mb-u-md-25 py-d-sm-20 w-100 fs-16 tc-p fw-m ta-l js-state">',
        'after_title'   => '<span class="f-menu-icon d-u-md-n foc br-c m-a"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd"d="M15.0709 8.77158L8.70692 15.1355C8.31639 15.5261 7.68323 15.5261 7.2927 15.1355L0.928741 8.77158C0.538216 8.38106 0.538216 7.74789 0.928741 7.35737C1.31926 6.96684 1.95243 6.96684 2.34295 7.35737L6.99981 12.0142L6.99981 1.57129C6.99981 1.019 7.44752 0.571289 7.99981 0.571289C8.55209 0.571289 8.99981 1.019 8.99981 1.57129L8.99981 12.0142L13.6567 7.35737C14.0472 6.96684 14.6804 6.96684 15.0709 7.35737C15.4614 7.74789 15.4614 8.38106 15.0709 8.77158Z"fill="var(--primary-variant)"></path></svg></span></div>',
    ) );
    register_sidebar( [
        'name'          => '2 колонка виджетов в подвале',
        'id'            => 'second-col-widget',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div data-parent=".col-u-md" class="f-menu-title d-b mb-u-md-25 py-d-sm-20 w-100 fs-16 tc-p fw-m ta-l js-state">',
        'after_title'   => '<span class="f-menu-icon d-u-md-n foc br-c m-a"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd"d="M15.0709 8.77158L8.70692 15.1355C8.31639 15.5261 7.68323 15.5261 7.2927 15.1355L0.928741 8.77158C0.538216 8.38106 0.538216 7.74789 0.928741 7.35737C1.31926 6.96684 1.95243 6.96684 2.34295 7.35737L6.99981 12.0142L6.99981 1.57129C6.99981 1.019 7.44752 0.571289 7.99981 0.571289C8.55209 0.571289 8.99981 1.019 8.99981 1.57129L8.99981 12.0142L13.6567 7.35737C14.0472 6.96684 14.6804 6.96684 15.0709 7.35737C15.4614 7.74789 15.4614 8.38106 15.0709 8.77158Z"fill="var(--primary-variant)"></path></svg></span></div>',
    ]);
    register_sidebar( [
        'name'          => '3 колонка виджетов в подвале',
        'id'            => 'three-col-widget',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div data-parent=".col-u-md" class="f-menu-title d-b mb-u-md-25 py-d-sm-20 w-100 fs-16 tc-p fw-m ta-l js-state">',
        'after_title'   => '<span class="f-menu-icon d-u-md-n foc br-c m-a"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd"d="M15.0709 8.77158L8.70692 15.1355C8.31639 15.5261 7.68323 15.5261 7.2927 15.1355L0.928741 8.77158C0.538216 8.38106 0.538216 7.74789 0.928741 7.35737C1.31926 6.96684 1.95243 6.96684 2.34295 7.35737L6.99981 12.0142L6.99981 1.57129C6.99981 1.019 7.44752 0.571289 7.99981 0.571289C8.55209 0.571289 8.99981 1.019 8.99981 1.57129L8.99981 12.0142L13.6567 7.35737C14.0472 6.96684 14.6804 6.96684 15.0709 7.35737C15.4614 7.74789 15.4614 8.38106 15.0709 8.77158Z"fill="var(--primary-variant)"></path></svg></span></div>',
    ]);
    register_sidebar( [
        'name'          => '4 колонка виджетов в подвале',
        'id'            => 'four-col-widget',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div data-parent=".col-u-md" class="f-menu-title d-b mb-u-md-25 py-d-sm-20 w-100 fs-16 tc-p fw-m ta-l js-state">',
        'after_title'   => '<span class="f-menu-icon d-u-md-n foc br-c m-a"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd"d="M15.0709 8.77158L8.70692 15.1355C8.31639 15.5261 7.68323 15.5261 7.2927 15.1355L0.928741 8.77158C0.538216 8.38106 0.538216 7.74789 0.928741 7.35737C1.31926 6.96684 1.95243 6.96684 2.34295 7.35737L6.99981 12.0142L6.99981 1.57129C6.99981 1.019 7.44752 0.571289 7.99981 0.571289C8.55209 0.571289 8.99981 1.019 8.99981 1.57129L8.99981 12.0142L13.6567 7.35737C14.0472 6.96684 14.6804 6.96684 15.0709 7.35737C15.4614 7.74789 15.4614 8.38106 15.0709 8.77158Z"fill="var(--primary-variant)"></path></svg></span></div>',
    ]);
}
add_action( 'widgets_init', 'my_wpb_widgets_init' );


// Загрузка файлов
function additional_mime_types($mimes) {
    $mimes['woff'] = 'font/woff';
    $mimes['woff2'] = 'font/woff2';
    $mimes['ico'] = 'image/x-icon';

    return $mimes;
}
add_filter('upload_mimes','additional_mime_types');


// Меню
register_nav_menus([
    'header_menu' => 'Меню в шапке',
    'footer_menu' => 'Меню в подвале',
    'language_menu' => 'Переключатель языка'
]);


/***********************************/
/*     CUSTOM TINYMCE BUTTONS      */
/***********************************/

// Указываем пути конфигурации кнопок
function tinymce_add_buttons( $buttons_array ) {
    $buttons_config_path = ALFA_JS_DIR .'admin/tinymce-buttons.js';

    $buttons_array['arrowList'] = $buttons_config_path;
    return $buttons_array;
}
// Регистрируем добавленные кнопки
function tinymce_register_buttons( $buttons ) {

    array_push( $buttons, 'arrowList' );
    return $buttons;
}

function tinymce_buttons() {
    // Проверяем привилегии пользователя
    if (!current_user_can('edit_posts') &&
        !current_user_can('edit_pages')) {
        return;
    }

    if (get_user_option('rich_editing') !== 'true') {
        return;
    }

    add_filter( 'mce_external_plugins', 'tinymce_add_buttons' );
    add_filter( 'mce_buttons', 'tinymce_register_buttons' );
}

// Инициализация кнопок редактора
function theme_setup(){
    // Добавление кнопок
    add_action( 'init', 'tinymce_buttons' );
}

add_action( 'after_setup_theme', 'theme_setup' );

add_filter( 'acf/fields/wysiwyg/toolbars' , function( $toolbars ){
    return array();
});


// polylang
function polylang_add_xdefault( $hreflangs ) {
    $default = array(
        'x-default' => reset( $hreflangs ) // Fetch the first language URL in the list as x-default
    );

    return $hreflangs = $default + $hreflangs;
}

add_filter( 'pll_rel_hreflang_attributes', 'polylang_add_xdefault', 10, 1 );

function not_empty($element): bool
{
    if(!empty($element) || $element === '0') {
        return true;
    } else {
        return false;
    }
}

// Gutenberg blocks
function gutenberg_register_blocks(): void
{
    if( ! function_exists('acf_register_block') )
        return;
    acf_register_block( array(
        'name'			=> 'flexible',
        'title'			=> __( 'Гибкое содержимое', 'flexible' ),
        'render_template'	=> 'blocks/flexible.php',
        'category'		=> 'formatting',
        'icon'			=> 'admin-users',
        'mode'			=> 'preview',
        'keywords'		=> array( 'profile', 'user', 'author' )
    ));
}
add_action('acf/init', 'gutenberg_register_blocks' );
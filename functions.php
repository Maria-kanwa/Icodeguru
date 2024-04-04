<?php


// frontend styling
function icodeguru_files()

{
    
    wp_enqueue_style('bootstrap-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');
        wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css');
        wp_enqueue_style('fontawsome-cdn', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
        wp_enqueue_style('mariasite_main_styles', get_stylesheet_uri());
   // wp_enqueue_style('mariasite_main_styles', "/wp-content/themes/icodeguru/style.css");
    
    
        wp_enqueue_script('main-js', get_theme_file_uri('/main.js'), NULL, '1.0');
    
    
  
}
add_action('wp_enqueue_scripts', 'icodeguru_files');




//beckend styling

function icodeguru_backend_files()

{
    
    wp_enqueue_style('bootstrap-cdn_backend', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');
        wp_enqueue_style('bootstrap-icons_backend', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css');
        wp_enqueue_style('fontawsome-cdn_backend', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
        wp_enqueue_style('mariasite_backend_styles', get_theme_file_uri('includes/admin-styling.css'));
   // wp_enqueue_style('mariasite_main_styles', "/wp-content/themes/icodeguru/style.css");
    
    
        wp_enqueue_script('backend-js', get_theme_file_uri('/admin-script.js'), NULL, '1.0');
    
    
  
}
add_action('admin_enqueue_scripts', 'icodeguru_backend_files');




















//register menue
// register_nav_menu('primary', 'Main Menu');
// register_nav_menu('secondary', 'footer Menu');
//if we want to register different menues in one function the
function icodeguru_features(){
    register_nav_menus(array(
'primary'=>'Main menu',
'secondary'=>'footer menu',
'useful'=>'useful links',
    ));
    add_theme_support('custom-logo');// logo registration
    add_theme_support('post-thumbnails');// feature image or thumbnail registration
}
add_action('after_setup_theme','icodeguru_features') ;
//register sidebar
function icodeguru_sidebars()   {
    register_sidebar(array(
'name' => ('Sidebar 1'),
'id'=>'sidebar-1',
//giving class to sidebar for styling in css
'before_widget' => ' <section id ="first-sidebar" class ="sidebar-1">',
'after_widget' => '</section>',
    ));
    

}
add_action('widgets_init','icodeguru_sidebars');


//for setting theme properteis from dashboard instead of going in code again and again
function icodeguru_settings_page(){
add_menu_page(
    'Icodeguru Theme',//page title
    'Icodeguru Theme',//menue title
    'manage_options',//ability for those who are allowed by dashboard/capability required
    'Theme-Settings',//Menu slug
    'mytheme_settings_page',//call back function ye o function bna hai us mn jo b functionality hogi wo sho krway ga
    'dashicons-database',
    10,//priority
    

);

}
//admin menue is specified by wordpress
add_action('admin_menu', 'icodeguru_settings_page');
//theme settings call back function,,file linking here
require_once(get_theme_file_path('/includes/theme-settings.php'));


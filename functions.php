<?php
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}
    function carrega_scripts(){
      wp_enqueue_style( 'template', get_template_directory_uri() . '/assets/sass/style.css');
    }
    add_action ( 'wp_enqueue_scripts', 'carrega_scripts' );

    //função para registrar os menus
    register_nav_menus(
        array(
        'menu_principal' => 'Menu Principal',
        )
    );

    //Adicionando thumbnail
	add_theme_support('post-thumbnails');

    //chamando o title
	add_theme_support('title-tag');

    // require get_template_directory() . '/custom-post/openbanking.php';
    // require get_template_directory() . '/custom-post/pagamentodecontas.php';
    // require get_template_directory() . '/custom-post/auto.php';
    // require get_template_directory() . '/custom-post/recargas.php';
    // require get_template_directory() . '/custom-post/saquesedepositos.php';
    // require get_template_directory() . '/custom-post/transferencia.php';
    // require get_template_directory() . '/custom-post/cobranca.php';
    // require get_template_directory() . '/custom-post/corbanasaservice.php';
    // require get_template_directory() . '/custom-post/creditplataform.php';

    //removendo barra de menu no topo
    add_action('get_header', 'remove_admin_login_header');
    function remove_admin_login_header() {
        remove_action('wp_head', '_admin_bar_bump_cb');
}

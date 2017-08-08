<?php

// incluindo arquivo customizer.
require get_template_directory() . '/inc/customizer.php';

remove_action('wp_head', 'wp_generator');

// função de enfileiramento de scripts.
function carrega_scripts() {
    // enfileirando bootstrap.
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all');
    wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(jquery), null, true);

    // enfileirando estilos de script proprio.
    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
    wp_enqueue_script( 'template', get_template_directory_uri(). '/js/template.js', array(), null, true);
}

    add_action( 'wp_enqueue_scripts', 'carrega_scripts');

// função de criação de menus. 
    register_nav_menus(
        array('meu_menu_principal' => 'Menu Principal', 'menu_rodape' => 'Menu Rodapé')
  
     );

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('video', 'image') );
add_theme_support('html5', array('search-form'));
add_theme_support('logo', array(
                                'height'    => 110, 
                                'width'     => 191));

if(function_exists('register_sidebar')) {
    register_sidebar(
        array(
            'name'          => 'Barra lateral 1',
            'id'            => 'sidebar-1',
            'description'   => 'Barra lateral da página Home',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-titulo">',
            'after_title'   => '</h2>'
        )
    );

    register_sidebar(
        array(
            'name'          =>  'Barra lateral 2',
            'id'            =>  'sidebar-2',
            'description'   =>  'Barra lateral da pagina Blog',
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_width'   =>  '</div>',
            'before_title'  =>  '<h2 class="widget-title">',
            'after_title'   =>  '</h2>'
        )

    );

	register_sidebar(
		array(
			'name'		=> 'Redes Sociais',
			'id'		=> 'redes-sociais',
			'description'	=> 'Widgets para redes sociais',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',			
		)
	);

}


// altera a quantidade de post por pagina apenas da pagina blog, já que a página blog esta especificada como página de posts.
function num_itens_blog( $query ) {
    if( ( ! is_admin() || $query->is_main_query() ) & is_home() ) { // não pode ser a tela de admin, tem que ser a query principal e a página home.
        $query->set('posts_per_page', 2);  
    } 

    return;
}

add_action('pre_get_posts', 'num_itens_blog', 1);

function mostra_telefone(){
    if(wp_is_mobile()) {
        $resultado = '<div class="telefone"><p>Ligue Agora: <a href="tel:01499998888">(14)9999-8888</a></p></div>';
    }

    return $resultado;
}

add_shortcode('meutelefone', 'mostra_telefone');
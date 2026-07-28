<?php 

add_filter( 'show_admin_bar', '__return_false' );

if(function_exists('acf_register_block_type')){
    add_action('acf/init', 'register_acf_block_types');
}

function register_acf_block_types(){

    acf_register_block_type( array( 
        'name'              => 'code-block',
        'title'             => __('Code-Abschnitt'),
        'description'       => __('Abschnitt mit Code'),
        'render_template'   => '/template-parts/blocks/code-block/code-block.php',
        'icon'              => 'editor-paste-text',
        'category'          => 'formatting',
        'keywords'          => array("code")
    ));

    acf_register_block_type( array( 
        'name'              => 'page-suggest-block',
        'title'             => __('Seiten-Vorschlag-Block'),
        'description'       => __('Block mit Seiten-Vorschlägen'),
        'render_template'   => '/template-parts/blocks/page-suggest-block/page-suggest-block.php',
        'icon'              => 'editor-paste-text',
        'category'          => 'formatting',
        'keywords'          => array("suggest", "vorschlag", "link", "page", "seite")
    ));

    acf_register_block_type( array( 
        'name'              => 'parallax-window',
        'title'             => __('Parallax-Fenster'),
        'description'       => __('Fenster mit Hintergrund und Parallax-Effekt'),
        'render_template'   => '/template-parts/blocks/parallax-window/parallax-window.php',
        'icon'              => 'editor-paste-text',
        'category'          => 'formatting',
        'keywords'          => array("parallax", "bild", "fenster")
    ));

    acf_register_block_type( array( 
        'name'              => 'creative-block',
        'title'             => __('Sonderkreativelement'),
        'description'       => __('Sonderkreativelement mit Bild, Teaser-Text, Excerpt-Text, und Link'),
        'render_template'   => '/template-parts/blocks/creative-block/creative-block.php',
        'icon'              => 'editor-paste-text',
        'category'          => 'formatting',
        'keywords'          => array("kreativ", "bild", "teaser-bild", "teaser", "teaser-text", "excerpt", "creative")
    ));

    acf_register_block_type( array( 
        'name'              => 'service-creative-block',
        'title'             => __('Leistungs-Kreativelement'),
        'description'       => __('Leistungs-Kreativelement mit Bild, Teaser-Text, Excerpt-Text, und Link'),
        'render_template'   => '/template-parts/blocks/service-creative-block/service-creative-block.php',
        'icon'              => 'editor-paste-text',
        'category'          => 'formatting',
        'keywords'          => array("service", "leistung", "kreativ", "bild", "teaser-bild", "teaser", "teaser-text", "excerpt", "creative")
    ));

    acf_register_block_type( array( 
        'name'              => 'start-top-block',
        'title'             => __('Top-Block (Startseite)'),
        'description'       => __('Top-Teil für die Startseite'),
        'render_template'   => '/template-parts/blocks/start-top-block/start-top-block.php',
        'icon'              => 'editor-paste-text',
        'category'          => 'formatting',
        'keywords'          => array("top", "head", "start", "kopf")
    ));

    acf_register_block_type( array( 
        'name'              => 'overview-top-block',
        'title'             => __('Top-Block (Deckblatt)'),
        'description'       => __('Top-Teil für die Deckblattseite'),
        'render_template'   => '/template-parts/blocks/overview-top-block/overview-top-block.php',
        'icon'              => 'editor-paste-text',
        'category'          => 'formatting',
        'keywords'          => array("top", "head", "overview", "deckblatt", "kopf")
    ));

    acf_register_block_type( array( 
        'name'              => 'single-top-block',
        'title'             => __('Top-Block (Single)'),
        'description'       => __('Top-Teil für die Single-Seite'),
        'render_template'   => '/template-parts/blocks/single-top-block/single-top-block.php',
        'icon'              => 'editor-paste-text',
        'category'          => 'formatting',
        'keywords'          => array("top", "head", "single", "einzeln", "kopf")
    ));
      
    acf_register_block_type( array(
        'name'              => 'text-block',
        'title'             => __('Text-Abschnitt'),
        'description'       => __('Abschnitt mit Text'),
        'render_template'   => '/template-parts/blocks/text-block/text-block.php',
        'icon'              => 'editor-paste-text',
        'category'          => 'formatting',
        'keywords'          => array("text")
    ));

    acf_register_block_type( array(
        'name'              => 'text-img-straight',
        'title'             => __('Text/Bild gerade'),
        'description'       => __('Abschnitt mit Text (gerade) und Bild'),
        'render_template'   => '/template-parts/blocks/text-img-straight/text-img-straight.php',
        'icon'              => 'editor-paste-text',
        'category'          => 'formatting',
        'keywords'          => array("text", "text mit bild", "bild und text", "bild", "straight", "gerade")
    ));

    acf_register_block_type( array(
        'name'              => 'text-img-zig-zag',
        'title'             => __('Text/Bild Zig-Zag'),
        'description'       => __('Abschnitt mit Text (in zig-zag Form) und Bild'),
        'render_template'   => '/template-parts/blocks/text-img-zig-zag/text-img-zig-zag.php',
        'icon'              => 'editor-paste-text',
        'category'          => 'formatting',
        'keywords'          => array("text", "text mit bild", "zig-zag", "bild und text", "bild")
    ));

    acf_register_block_type( array(
        'name'              => 'text-img-bio',
        'title'             => __('Text/Bild Vita'),
        'description'       => __('Abschnitt mit Text (gerade) und Bild für Vita'),
        'render_template'   => '/template-parts/blocks/text-img-bio/text-img-bio.php',
        'icon'              => 'editor-paste-text',
        'category'          => 'formatting',
        'keywords'          => array("text", "text mit bild", "bild und text", "bild", "straight", "gerade", "bio", "vita")
    ));

    acf_register_block_type( array(
        'name'              => 'text-contact',
        'title'             => __('Text-Kontakt'),
        'description'       => __('Abschnitt mit Text und Kontaktformular'),
        'render_template'   => '/template-parts/blocks/text-contact/text-contact.php',
        'icon'              => 'editor-paste-text',
        'category'          => 'formatting',
        'keywords'          => array("text", "text mit formular", "contact", "form", "kontakt")
    ));

    acf_register_block_type( array(
        'name'              => 'body-slider',
        'title'             => __('Slider für Seite'),
        'description'       => __('Slider für innerhalb der Seite'),
        'render_template'   => '/template-parts/blocks/body-slider/body-slider.php',
        'icon'              => 'editor-paste-text',
        'category'          => 'formatting',
        'keywords'          => array("slider", "body", "innerhalb")
    ));
    acf_register_block_type( array(
        'name'              => 'contact-section',
        'title'             => __('Kontakt-Block'),
        'description'       => __('Abschnitt mit Kontakt-Formular'),
        'render_template'   => '/template-parts/blocks/contact-section/contact-section.php',
        'icon'              => 'editor-paste-text',
        'category'          => 'formatting',
        'keywords'          => array("contact", "kontakt", "form", "formular", "contact form", "kontakt-formular", "kontaktformular")
    ));
    acf_register_block_type( array(
        'name'              => 'map-block',
        'title'             => __('Karten-Block'),
        'description'       => __('Abschnitt mit Karte und Routenplanner'),
        'render_template'   => '/template-parts/blocks/map-block/map-block.php',
        'icon'              => 'editor-paste-text',
        'category'          => 'formatting',
        'keywords'          => array("map", "karte", "routenplanner", "road")
    ));
    acf_register_block_type( array(
        'name'              => 'services-overview-block',
        'title'             => __('Leistungen-Übersicht'),
        'description'       => __('Übersicht der partikulären Leistungen'),
        'render_template'   => '/template-parts/blocks/services-overview-block/services-overview-block.php',
        'icon'              => 'editor-paste-text',
        'category'          => 'formatting',
        'keywords'          => array("part", "particular", "partikulär", "deckblatt", "leistungen", "services")
    ));
}

function scripts_and_styles() {
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/bootstrap/bootstrap.min.css');
    //wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/bootstrap/bootstrap.min.js', array( 'jquery' ), '5.0', true );
    wp_enqueue_style( 'slick-slider-style', get_template_directory_uri() . '/slick/slick.css');
   // wp_enqueue_script( 'slick-slider-script', get_template_directory_uri() . '/slick/slick.min.js', array( 'jquery' ), '4.1', true );
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/main.min.css');
    //wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/scripts.js', array(), '1.0', true );
}
add_action('wp_enqueue_scripts', 'scripts_and_styles');


function register_menus(){
    add_theme_support('menus');
    register_nav_menu('header_menu', 'Header Menu');
    register_nav_menu('footer_menu', 'Footer Menu');
}

add_action('after_setup_theme', 'register_menus');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

function allow_svg_upload( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'allow_svg_upload' );

add_theme_support( 'title-tag' );
?>
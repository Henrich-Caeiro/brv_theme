<?php
/**
 * Villela Barbearia block theme setup.
 */
function villela_barbearia_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'custom-logo', array( 'height' => 80, 'width' => 80, 'flex-height' => true, 'flex-width' => true ) );
    register_nav_menus( array(
        'primary' => __( 'Menu principal', 'villela-barbearia' ),
        'footer'  => __( 'Menu do rodapé', 'villela-barbearia' ),
    ) );
    add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'villela_barbearia_setup' );

function villela_barbearia_enqueue_assets() {
    wp_enqueue_style( 'brv-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_script( 'brv-interactions', get_theme_file_uri( 'brv-animations.js' ), array(), wp_get_theme()->get( 'Version' ), array( 'strategy' => 'defer', 'in_footer' => true ) );
}
add_action( 'wp_enqueue_scripts', 'villela_barbearia_enqueue_assets' );

function villela_barbearia_register_patterns() {
    foreach ( array( 'hero', 'about', 'structure', 'team', 'testimonials', 'products', 'gallery', 'artists', 'cta', 'footer' ) as $pattern ) {
        $file = get_theme_file_path( 'patterns/' . $pattern . '.php' );
        if ( file_exists( $file ) ) { require_once $file; }
    }
}
add_action( 'init', 'villela_barbearia_register_patterns' );

function villela_barbearia_register_block_styles() {
    register_block_style( 'core/button', array( 'name' => 'primary-button', 'label' => __( 'Botão primário', 'villela-barbearia' ) ) );
    register_block_style( 'core/button', array( 'name' => 'secondary-button', 'label' => __( 'Botão secundário', 'villela-barbearia' ) ) );
}
add_action( 'init', 'villela_barbearia_register_block_styles' );

/** Virtual routes keep the theme installable without changing the database. */
function villela_barbearia_virtual_routes() {
    add_rewrite_rule( '^agendar/?$', 'index.php?brv_route=agendar', 'top' );
    add_rewrite_rule( '^admin/?$', 'index.php?brv_route=admin', 'top' );
}
add_action( 'init', 'villela_barbearia_virtual_routes' );
function villela_barbearia_query_vars( $vars ) { $vars[] = 'brv_route'; return $vars; }
add_filter( 'query_vars', 'villela_barbearia_query_vars' );

function villela_barbearia_virtual_page() {
    $route = get_query_var( 'brv_route' );
    if ( ! $route && ! empty( $_SERVER['REQUEST_URI'] ) ) {
        $path = trim( (string) wp_parse_url( esc_url_raw( wp_unslash( $_SERVER['REQUEST_URI'] ) ), PHP_URL_PATH ), '/' );
        if ( in_array( $path, array( 'agendar', 'admin' ), true ) ) { $route = $path; }
    }
    if ( ! in_array( $route, array( 'agendar', 'admin' ), true ) ) { return; }
    status_header( 200 );
    nocache_headers();
    get_header();
    echo '<main class="brv-route-page brv-container" id="' . esc_attr( $route ) . '">';
    if ( 'agendar' === $route ) {
        echo '<div class="brv-route-card"><p class="brv-section-badge">Agendamento</p><h1>Reserve seu horário</h1><p>Escolha o serviço, profissional e horário ideal para você.</p><form class="brv-booking-form" data-brv-booking><fieldset><legend>1. Serviço</legend><label><input type="radio" name="service" value="Corte + Barba" required> Corte + Barba — R$ 80,00</label><label><input type="radio" name="service" value="Corte clássico"> Corte clássico — R$ 50,00</label><label><input type="radio" name="service" value="Barba"> Barba — R$ 35,00</label></fieldset><fieldset><legend>2. Seus dados</legend><label>Nome<input name="name" required autocomplete="name"></label><label>E-mail<input name="email" type="email" required autocomplete="email"></label><label>Data<input name="date" type="date" required></label><label>Horário<select name="time" required><option value="">Selecione</option><option>09:00</option><option>10:30</option><option>14:00</option><option>15:30</option><option>17:00</option></select></label></fieldset><button class="primary-button" type="submit">Confirmar agendamento</button><p class="brv-form-status" role="status" aria-live="polite"></p></form></div>';
    } else {
        echo '<div class="brv-route-card"><p class="brv-section-badge">Área do cliente</p><h1>Olá, cliente</h1><p>Faça login para acompanhar agendamentos e pedidos.</p><form class="brv-login-form" data-brv-login><label>E-mail<input type="email" name="email" required autocomplete="email"></label><button class="primary-button" type="submit">Entrar</button><p class="brv-form-status" role="status" aria-live="polite"></p></form></div>';
    }
    echo '</main>';
    get_footer();
    exit;
}
add_action( 'template_redirect', 'villela_barbearia_virtual_page' );
function villela_barbearia_virtual_title( $title ) {
    $route = get_query_var( 'brv_route' );
    if ( ! $route && ! empty( $_SERVER['REQUEST_URI'] ) ) {
        $path = trim( (string) wp_parse_url( esc_url_raw( wp_unslash( $_SERVER['REQUEST_URI'] ) ), PHP_URL_PATH ), '/' );
        if ( in_array( $path, array( 'agendar', 'admin' ), true ) ) {
            $route = $path;
        }
    }
    if ( 'agendar' === $route ) {
        return 'Agendamento — Villela Barbearia';
    }
    if ( 'admin' === $route ) {
        return 'Área do cliente — Villela Barbearia';
    }
    return $title;
}
add_filter( 'pre_get_document_title', 'villela_barbearia_virtual_title' );
function villela_barbearia_activate() { villela_barbearia_virtual_routes(); flush_rewrite_rules(); }
register_activation_hook( __FILE__, 'villela_barbearia_activate' );

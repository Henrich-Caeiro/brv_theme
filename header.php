<?php
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header" role="banner" data-brv-header>
    <div class="site-header__inner brv-container">
        <a class="site-brand__link" href="<?php echo esc_url( home_url( '/#home' ) ); ?>" aria-label="Barbearia Roger Vilela - início">
            <img src="<?php echo esc_url( get_theme_file_uri( 'assets/logo.png' ) ); ?>" alt="Barbearia Roger Vilela" class="site-brand__logo" width="48" height="48">
            <span class="site-brand__name">Barbearia Roger Vilela</span>
        </a>
        <nav class="site-nav" aria-label="Navegação principal">
            <a href="<?php echo esc_url( home_url( '/#home' ) ); ?>">Início</a>
            <a href="<?php echo esc_url( home_url( '/#about' ) ); ?>">Sobre</a>
            <a href="<?php echo esc_url( home_url( '/#team' ) ); ?>">Profissionais</a>
            <a href="<?php echo esc_url( home_url( '/#testimonials' ) ); ?>">Depoimentos</a>
            <a href="<?php echo esc_url( home_url( '/#products' ) ); ?>">Produtos</a>
            <a href="<?php echo esc_url( home_url( '/#gallery' ) ); ?>">Coleção</a>
        </nav>
        <div class="site-actions">
            <a class="primary-button site-book-button" href="https://sites.appbarber.com.br/barbeariarogerv-ji0g" target="_blank" rel="noopener noreferrer">
                <svg aria-hidden="true" viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M16 3v4M8 3v4M3 11h18"/></svg>
                Agendar
            </a>
        </div>
    </div>
</header>

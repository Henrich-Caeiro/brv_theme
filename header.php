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
        <a class="site-brand__link" href="<?php echo esc_url( home_url( '/#home' ) ); ?>" aria-label="Villela Barbearia - início">
            <img src="<?php echo esc_url( get_theme_file_uri( 'assets/logo.png' ) ); ?>" alt="Villela Barbearia" class="site-brand__logo" width="48" height="48">
            <span class="site-brand__name">Villela Barbearia</span>
        </a>
        <nav class="site-nav" aria-label="Navegação principal">
            <a href="<?php echo esc_url( home_url( '/#home' ) ); ?>">Início</a>
            <a href="<?php echo esc_url( home_url( '/#about' ) ); ?>">Sobre</a>
            <a href="<?php echo esc_url( home_url( '/#team' ) ); ?>">Equipe</a>
            <a href="<?php echo esc_url( home_url( '/#testimonials' ) ); ?>">Depoimentos</a>
            <a href="<?php echo esc_url( home_url( '/#products' ) ); ?>">Produtos</a>
            <a href="<?php echo esc_url( home_url( '/#gallery' ) ); ?>">Galeria</a>
        </nav>
        <div class="site-actions">
            <a class="primary-button site-book-button" href="<?php echo esc_url( home_url( '/agendar/' ) ); ?>">
                <svg aria-hidden="true" viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M16 3v4M8 3v4M3 11h18"/></svg>
                Agendar
            </a>
            <button class="site-action site-action--cart" type="button" data-brv-cart aria-label="Abrir carrinho">
                <svg aria-hidden="true" viewBox="0 0 24 24"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
                <b data-brv-cart-count>0</b>
            </button>
            <a class="site-action site-action--user" href="<?php echo esc_url( home_url( '/admin/' ) ); ?>" aria-label="Área do cliente">
                <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            </a>
            <button class="brv-hamburger" type="button" aria-label="Abrir menu" aria-expanded="false" data-brv-menu-toggle>
                <svg class="brv-menu-open-icon" aria-hidden="true" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
                <svg class="brv-menu-close-icon" aria-hidden="true" viewBox="0 0 24 24"><path d="m18 6-12 12M6 6l12 12"/></svg>
            </button>
        </div>
    </div>
    <nav class="brv-mobile-menu" aria-label="Menu mobile" data-brv-mobile-menu hidden>
        <a href="<?php echo esc_url( home_url( '/#home' ) ); ?>">Início</a>
        <a href="<?php echo esc_url( home_url( '/#about' ) ); ?>">Sobre</a>
        <a href="<?php echo esc_url( home_url( '/#team' ) ); ?>">Equipe</a>
        <a href="<?php echo esc_url( home_url( '/#testimonials' ) ); ?>">Depoimentos</a>
        <a href="<?php echo esc_url( home_url( '/#products' ) ); ?>">Produtos</a>
        <a href="<?php echo esc_url( home_url( '/#gallery' ) ); ?>">Galeria</a>
        <a class="primary-button" href="<?php echo esc_url( home_url( '/agendar/' ) ); ?>">Agendar Horário</a>
    </nav>
</header>
<div class="brv-modal" data-brv-cart-modal hidden role="dialog" aria-modal="true" aria-labelledby="brv-cart-title">
    <div class="brv-modal__dialog">
        <button class="brv-modal__close" type="button" data-brv-close aria-label="Fechar">×</button>
        <h2 id="brv-cart-title">Seu carrinho</h2>
        <div data-brv-cart-items><p>Seu carrinho está vazio.</p></div>
        <button class="primary-button" type="button" data-brv-checkout>Finalizar pedido</button>
    </div>
</div>

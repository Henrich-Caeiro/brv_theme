<?php
register_block_pattern(
	'villela-barbearia/hero',
	array(
		'title'       => __( 'Hero da barbearia', 'villela-barbearia' ),
		'description' => __( 'Hero principal com chamada para agendar e destaque visual.', 'villela-barbearia' ),
		'categories'  => array( 'featured' ),
		'content'     => <<<'HTML'
<!-- wp:group {"align":"full","className":"brv-hero","anchor":"home"} -->
<div class="wp-block-group alignfull brv-hero" id="home">
	<!-- wp:group {"className":"brv-hero__backdrop"} -->
	<div class="wp-block-group brv-hero__backdrop">
		<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="https://images.unsplash.com/photo-1759134198561-e2041049419c?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxsdXh1cnklMjBiYXJiZXIlMjBzaG9wJTIwaW50ZXJpb3J8ZW58MXx8fHwxNzcyODAwOTc2fDA&amp;ixlib=rb-4.1.0&amp;q=80&amp;w=1080" alt="Interior sofisticado da Villela Barbearia" /></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:group -->
	<div class="brv-hero__shade" aria-hidden="true"></div>
	<div class="brv-hero__pattern" aria-hidden="true"></div>
	<div class="brv-hero__glow brv-hero__glow--left" aria-hidden="true"></div>
	<div class="brv-hero__glow brv-hero__glow--right" aria-hidden="true"></div>
	<!-- wp:group {"className":"brv-hero__inner"} -->
	<div class="wp-block-group brv-hero__inner">
		<!-- wp:heading {"level":1} -->
		<h1 class="wp-block-heading"><span>Levamos a sua imagem</span><span>para outro nível</span></h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"className":"brv-hero__description"} -->
		<p class="brv-hero__description">Uma experiência única onde tradição e modernidade se encontram. Cuidados profissionais para o homem moderno que valoriza qualidade.</p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons {"className":"brv-hero__actions"} -->
		<div class="wp-block-buttons brv-hero__actions">
			<!-- wp:button {"className":"primary-button"} -->
			<div class="wp-block-button primary-button"><a class="wp-block-button__link wp-element-button" href="/agendar/">Agendar Horário</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"className":"secondary-button"} -->
			<div class="wp-block-button secondary-button"><a class="wp-block-button__link wp-element-button" href="#services">Conhecer Serviços</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
		<!-- wp:group {"className":"brv-hero__stats"} -->
		<div class="wp-block-group brv-hero__stats">
			<!-- wp:group {"className":"brv-hero__stat"} -->
			<div class="wp-block-group brv-hero__stat"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">8+</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Anos de Tradição</p><!-- /wp:paragraph --></div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"brv-hero__stat"} -->
			<div class="wp-block-group brv-hero__stat"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">5000+</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Clientes Satisfeitos</p><!-- /wp:paragraph --></div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"brv-hero__stat"} -->
			<div class="wp-block-group brv-hero__stat"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">100%</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Qualidade Garantida</p><!-- /wp:paragraph --></div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<div class="brv-hero__scroll" aria-hidden="true"><span></span></div>
</div>
<!-- /wp:group -->
HTML
	)
);

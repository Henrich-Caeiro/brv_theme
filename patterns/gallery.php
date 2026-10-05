<?php
register_block_pattern(
	'villela-barbearia/gallery',
	array(
		'title'       => __( 'Galeria', 'villela-barbearia' ),
		'description' => __( 'Galeria de fotos da barbearia.', 'villela-barbearia' ),
		'categories'  => array( 'featured' ),
		'content'     => <<<'HTML'
<!-- wp:group {"align":"full","className":"brv-section brv-gallery","anchor":"gallery"} -->
<div class="wp-block-group alignfull brv-section brv-gallery" id="gallery">
	<!-- wp:group {"className":"brv-container brv-section__inner"} -->
	<div class="wp-block-group brv-container brv-section__inner">
		<!-- wp:group {"className":"brv-section__header"} -->
		<div class="wp-block-group brv-section__header"><!-- wp:paragraph {"className":"brv-section__badge"} --><p class="brv-section__badge">Galeria</p><!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"brv-section__title"} --><h2 class="wp-block-heading brv-section__title">Nossos Trabalhos</h2><!-- /wp:heading --><!-- wp:paragraph {"className":"brv-section__description"} --><p class="brv-section__description">Confira alguns dos nossos clientes satisfeitos e o resultado do nosso trabalho artesanal.</p><!-- /wp:paragraph --></div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"brv-gallery__grid"} -->
		<div class="wp-block-group brv-gallery__grid">
			<!-- wp:group {"className":"brv-gallery__item"} -->
			<div class="wp-block-group brv-gallery__item"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} --><figure class="wp-block-image size-full"><img src="https://images.unsplash.com/photo-1768363446104-b8a0c1716600?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxiYXJiZXIlMjBjdXR0aW5nJTIwaGFpciUyMHByb2Zlc3Npb25hbHxlbnwxfHx8fDE3NzI3MzYzNzF8MA&amp;ixlib=rb-4.1.0&amp;q=80&amp;w=1080" alt="Trabalho de corte profissional" /></figure><!-- /wp:image --><!-- wp:group {"className":"brv-gallery__overlay"} --><div class="wp-block-group brv-gallery__overlay"><!-- wp:paragraph --><p>Cliente Satisfeito</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Toque para ampliar</p><!-- /wp:paragraph --></div><!-- /wp:group --></div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"brv-gallery__item"} -->
			<div class="wp-block-group brv-gallery__item"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} --><figure class="wp-block-image size-full"><img src="https://images.unsplash.com/photo-1654097803253-d481b6751f29?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxiYXJiZXIlMjBiZWFyZCUyMHRyaW1taW5nfGVufDF8fHx8MTc3MjczNjM3Mnww&amp;ixlib=rb-4.1.0&amp;q=80&amp;w=1080" alt="Acabamento profissional de barba" /></figure><!-- /wp:image --><!-- wp:group {"className":"brv-gallery__overlay"} --><div class="wp-block-group brv-gallery__overlay"><!-- wp:paragraph --><p>Cliente Satisfeito</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Toque para ampliar</p><!-- /wp:paragraph --></div><!-- /wp:group --></div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"brv-gallery__item"} -->
			<div class="wp-block-group brv-gallery__item"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} --><figure class="wp-block-image size-full"><img src="https://images.unsplash.com/photo-1763610452420-71b91bc59160?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxlbGVnYW50JTIwbWFuJTIwaGFpcmN1dHxlbnwxfHx8fDE3NzI3MzYzNzJ8MA&amp;ixlib=rb-4.1.0&amp;q=80&amp;w=1080" alt="Estilo elegante após o corte" /></figure><!-- /wp:image --><!-- wp:group {"className":"brv-gallery__overlay"} --><div class="wp-block-group brv-gallery__overlay"><!-- wp:paragraph --><p>Cliente Satisfeito</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Toque para ampliar</p><!-- /wp:paragraph --></div><!-- /wp:group --></div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"brv-gallery__item"} -->
			<div class="wp-block-group brv-gallery__item"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} --><figure class="wp-block-image size-full"><img src="https://images.unsplash.com/photo-1659355751282-5ca7807af9e9?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtZW4lMjBoYWlyY3V0JTIwdHJhbnNmb3JtYXRpb258ZW58MXx8fHwxNzcyNzM2NjcwfDA&amp;ixlib=rb-4.1.0&amp;q=80&amp;w=1080" alt="Transformação com corte masculino" /></figure><!-- /wp:image --><!-- wp:group {"className":"brv-gallery__overlay"} --><div class="wp-block-group brv-gallery__overlay"><!-- wp:paragraph --><p>Cliente Satisfeito</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Toque para ampliar</p><!-- /wp:paragraph --></div><!-- /wp:group --></div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"brv-gallery__item"} -->
			<div class="wp-block-group brv-gallery__item"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} --><figure class="wp-block-image size-full"><img src="https://images.unsplash.com/photo-1590503347339-ccd768ad83d3?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxiYXJiZXIlMjBjbGllbnQlMjByZXN1bHR8ZW58MXx8fHwxNzcyNzM2NjcxfDA&amp;ixlib=rb-4.1.0&amp;q=80&amp;w=1080" alt="Resultado de corte em cliente" /></figure><!-- /wp:image --><!-- wp:group {"className":"brv-gallery__overlay"} --><div class="wp-block-group brv-gallery__overlay"><!-- wp:paragraph --><p>Cliente Satisfeito</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Toque para ampliar</p><!-- /wp:paragraph --></div><!-- /wp:group --></div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"brv-gallery__item"} -->
			<div class="wp-block-group brv-gallery__item"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} --><figure class="wp-block-image size-full"><img src="https://images.unsplash.com/photo-1604355240616-5e907f42b431?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w3Nzg4Nzd8MHwxfHxzdHlsaXNoJTIwbWFuJTIwaGFpcmN1dCUyMGJhcmJlcnxlbnwxfHx8fDE3NzI3MzY2NzF8MA&amp;ixlib=rb-4.1.0&amp;q=80&amp;w=1080" alt="Corte masculino com acabamento estiloso" /></figure><!-- /wp:image --><!-- wp:group {"className":"brv-gallery__overlay"} --><div class="wp-block-group brv-gallery__overlay"><!-- wp:paragraph --><p>Cliente Satisfeito</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Toque para ampliar</p><!-- /wp:paragraph --></div><!-- /wp:group --></div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"brv-gallery__item"} -->
			<div class="wp-block-group brv-gallery__item"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} --><figure class="wp-block-image size-full"><img src="https://images.unsplash.com/photo-1759134198561-e2041049419c?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxsdXh1cnklMjBiYXJiZXIlMjBzaG9wJTIwaW50ZXJpb3J8ZW58MXx8fHwxNzcyNjIyNzkwfDA&amp;ixlib=rb-4.1.0&amp;q=80&amp;w=1080" alt="Interior da Villela Barbearia" /></figure><!-- /wp:image --><!-- wp:group {"className":"brv-gallery__overlay"} --><div class="wp-block-group brv-gallery__overlay"><!-- wp:paragraph --><p>Cliente Satisfeito</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Toque para ampliar</p><!-- /wp:paragraph --></div><!-- /wp:group --></div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"brv-gallery__item"} -->
			<div class="wp-block-group brv-gallery__item"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} --><figure class="wp-block-image size-full"><img src="https://images.unsplash.com/photo-1747832512459-5566e6d0ee5a?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwcm9mZXNzaW9uYWwlMjBiYXJiZXIlMjBwb3J0cmFpdHxlbnwxfHx8fDE3NzI3MTU1NTd8MA&amp;ixlib=rb-4.1.0&amp;q=80&amp;w=1080" alt="Barbeiro profissional da equipe" /></figure><!-- /wp:image --><!-- wp:group {"className":"brv-gallery__overlay"} --><div class="wp-block-group brv-gallery__overlay"><!-- wp:paragraph --><p>Cliente Satisfeito</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Toque para ampliar</p><!-- /wp:paragraph --></div><!-- /wp:group --></div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"brv-gallery__cta"} -->
		<div class="wp-block-group brv-gallery__cta"><!-- wp:paragraph --><p>Faça parte da nossa galeria de clientes satisfeitos</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"className":"primary-button"} --><div class="wp-block-button primary-button"><a class="wp-block-button__link wp-element-button" href="https://sites.appbarber.com.br/barbeariarogerv-ji0g" target="_blank" rel="noopener noreferrer">Agende Seu Horário Agora</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
HTML
	)
);

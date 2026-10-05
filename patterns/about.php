<?php
register_block_pattern(
	'villela-barbearia/about',
	array(
		'title'       => __( 'Sobre a barbearia', 'villela-barbearia' ),
		'description' => __( 'Seção sobre a barbearia e diferenciais.', 'villela-barbearia' ),
		'categories'  => array( 'featured' ),
		'content'     => <<<'HTML'
<!-- wp:group {"align":"full","className":"brv-section brv-about","anchor":"about"} -->
<div class="wp-block-group alignfull brv-section brv-about" id="about">
	<div class="brv-about__glow brv-about__glow--top" aria-hidden="true"></div>
	<div class="brv-about__glow brv-about__glow--bottom" aria-hidden="true"></div>
	<!-- wp:group {"className":"brv-container brv-section__inner"} -->
	<div class="wp-block-group brv-container brv-section__inner">
		<!-- wp:group {"className":"brv-about__grid"} -->
		<div class="wp-block-group brv-about__grid">
			<!-- wp:group {"className":"brv-about__visual"} -->
			<div class="wp-block-group brv-about__visual">
				<!-- wp:group {"className":"brv-about__image"} -->
				<div class="wp-block-group brv-about__image">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="https://images.unsplash.com/photo-1759134198561-e2041049419c?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxsdXh1cnklMjBiYXJiZXIlMjBzaG9wJTIwaW50ZXJpb3J8ZW58MXx8fHwxNzcyNjIyNzkwfDA&amp;ixlib=rb-4.1.0&amp;q=80&amp;w=1080" alt="Interior da Barbearia" /></figure>
					<!-- /wp:image -->
					<div class="brv-about__image-shade" aria-hidden="true"></div>
					<!-- wp:group {"className":"brv-about__badge"} -->
					<div class="wp-block-group brv-about__badge"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">8+</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Anos de História</p><!-- /wp:paragraph --></div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<div class="brv-about__decoration" aria-hidden="true"></div>
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"brv-about__content"} -->
			<div class="wp-block-group brv-about__content">
				<!-- wp:paragraph {"className":"brv-section__badge"} -->
				<p class="brv-section__badge">Sobre Nós</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"brv-section__title"} -->
				<h2 class="wp-block-heading brv-section__title">Tradição que Se Renova a Cada Dia</h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Desde 2016, a Villela Barbearia tem sido referência em cuidados masculinos na Vila Reimundo e Sapataria. Nossa missão é proporcionar uma experiência única, combinando técnicas tradicionais de barbearia com as tendências mais modernas do mercado.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p>Cada detalhe foi pensado para oferecer conforto, qualidade e resultados impecáveis. Aqui, você não é apenas mais um cliente &#45; você faz parte da nossa história.</p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"className":"brv-features"} -->
				<div class="wp-block-group brv-features">
					<!-- wp:group {"className":"brv-feature-card"} -->
					<div class="wp-block-group brv-feature-card"><div class="brv-feature-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="7"/><path d="m8.21 13.89-1.2 8.11L12 19l4.99 3-1.2-8.12"/></svg></div><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Excelência</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Profissionais altamente qualificados com anos de experiência</p><!-- /wp:paragraph --></div>
					<!-- /wp:group -->
					<!-- wp:group {"className":"brv-feature-card"} -->
					<div class="wp-block-group brv-feature-card"><div class="brv-feature-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg></div><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Atendimento Premium</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Cada cliente recebe atenção personalizada e exclusiva</p><!-- /wp:paragraph --></div>
					<!-- /wp:group -->
					<!-- wp:group {"className":"brv-feature-card"} -->
					<div class="wp-block-group brv-feature-card"><div class="brv-feature-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="6" cy="6" r="3"/><circle cx="6" cy="18" r="3"/><path d="m20 4-12 12m6-1.5 6 6M8 8l4 4"/></svg></div><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Técnicas Modernas</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Equipamentos de última geração e produtos premium</p><!-- /wp:paragraph --></div>
					<!-- /wp:group -->
					<!-- wp:group {"className":"brv-feature-card"} -->
					<div class="wp-block-group brv-feature-card"><div class="brv-feature-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="m12 3-1.91 5.81a2 2 0 0 1-1.28 1.28L3 12l5.81 1.91a2 2 0 0 1 1.28 1.28L12 21l1.91-5.81a2 2 0 0 1 1.28-1.28L21 12l-5.81-1.91a2 2 0 0 1-1.28-1.28L12 3Z"/></svg></div><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Ambiente Único</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Espaço sofisticado pensado para seu conforto</p><!-- /wp:paragraph --></div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
HTML
	)
);

<?php
register_block_pattern(
	'villela-barbearia/team',
	array(
		'title'       => __( 'Equipe', 'villela-barbearia' ),
		'description' => __( 'Seção com os profissionais da barbearia.', 'villela-barbearia' ),
		'categories'  => array( 'featured' ),
		'content'     => <<<'HTML'
<!-- wp:group {"align":"full","className":"brv-section brv-team","anchor":"team"} -->
<div class="wp-block-group alignfull brv-section brv-team" id="team">
	<!-- wp:group {"className":"brv-container brv-section__inner"} -->
	<div class="wp-block-group brv-container brv-section__inner">
		<!-- wp:group {"className":"brv-section__header"} -->
		<div class="wp-block-group brv-section__header">
			<!-- wp:paragraph {"className":"brv-section__badge"} --><p class="brv-section__badge">Nossa Equipe</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"className":"brv-section__title"} --><h2 class="wp-block-heading brv-section__title">Mestres em Sua Arte</h2><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"brv-section__description"} --><p class="brv-section__description">Conheça os profissionais que fazem da Villela Barbearia uma referência em excelência e qualidade.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"brv-team__grid"} -->
		<div class="wp-block-group brv-team__grid">
			<!-- wp:group {"className":"brv-team-card"} -->
			<div class="wp-block-group brv-team-card">
				<!-- wp:group {"className":"brv-team-card__media"} -->
				<div class="wp-block-group brv-team-card__media">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} --><figure class="wp-block-image size-full"><img src="https://trutech.shop/wp-content/uploads/2026/10/IMG_2471-scaled.jpg" alt="Roger Villela, barbeiro profissional" /></figure><!-- /wp:image -->
					<div class="brv-team-card__shade" aria-hidden="true"></div>
					<!-- wp:button {"url":"#","className":"brv-team-card__social","ariaLabel":"Instagram de Carlos Silva"} --><div class="wp-block-button brv-team-card__social"><a class="wp-block-button__link wp-element-button" href="#" aria-label="Instagram de Carlos Silva">Instagram</a></div><!-- /wp:button -->
					<!-- wp:group {"className":"brv-team-card__overlay"} -->
					<div class="wp-block-group brv-team-card__overlay"><!-- wp:paragraph {"className":"brv-team-card__badge"} --><p class="brv-team-card__badge">8 anos</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Roger Villela</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Master Barber</p><!-- /wp:paragraph --><!-- wp:paragraph {"className":"brv-team-card__specialty"} --><p class="brv-team-card__specialty">Cortes Clássicos &amp; Fade</p><!-- /wp:paragraph --></div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"brv-team-card__body"} -->
				<div class="wp-block-group brv-team-card__body"><!-- wp:paragraph --><p>Especialista em cortes clássicos e modernos, Roger Villela é conhecido por sua precisão e atenção aos detalhes.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p><a href="https://www.instagram.com/rogervilelaof/">@rogervilelaof</a></p><!-- /wp:paragraph --></div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"brv-team-card"} -->
			<div class="wp-block-group brv-team-card">
				<!-- wp:group {"className":"brv-team-card__media"} -->
				<div class="wp-block-group brv-team-card__media">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} --><figure class="wp-block-image size-full"><img src="https://trutech.shop/wp-content/uploads/2026/10/IMG_6167-scaled.jpg" alt="João Santos, barbeiro e especialista em barba" /></figure><!-- /wp:image -->
					<div class="brv-team-card__shade" aria-hidden="true"></div>
					<!-- wp:button {"url":"#","className":"brv-team-card__social","ariaLabel":"Instagram de João Santos"} --><div class="wp-block-button brv-team-card__social"><a class="wp-block-button__link wp-element-button" href="#" aria-label="Instagram de João Santos">Instagram</a></div><!-- /wp:button -->
					<!-- wp:group {"className":"brv-team-card__overlay"} -->
					<div class="wp-block-group brv-team-card__overlay"><!-- wp:paragraph {"className":"brv-team-card__badge"} --><p class="brv-team-card__badge">6 anos</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Vitor</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Senior Barber</p><!-- /wp:paragraph --><!-- wp:paragraph {"className":"brv-team-card__specialty"} --><p class="brv-team-card__specialty">Barba &amp; Acabamento</p><!-- /wp:paragraph --></div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"brv-team-card__body"} -->
				<div class="wp-block-group brv-team-card__body"><!-- wp:paragraph --><p>Mestre em design de barbas e contornos perfeitos, Vitor transforma cada serviço em uma experiência única.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p><a href="#">@vitorbarba</a></p><!-- /wp:paragraph --></div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"brv-team-card"} -->
			<div class="wp-block-group brv-team-card">
				<!-- wp:group {"className":"brv-team-card__media"} -->
				<div class="wp-block-group brv-team-card__media">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} --><figure class="wp-block-image size-full"><img src="https://trutech.shop/wp-content/uploads/2026/10/IMG_8254-scaled.jpg" alt="Pedro Oliveira, barbeiro especialista em cortes modernos" /></figure><!-- /wp:image -->
					<div class="brv-team-card__shade" aria-hidden="true"></div>
					<!-- wp:button {"url":"#","className":"brv-team-card__social","ariaLabel":"Instagram de Pedro Oliveira"} --><div class="wp-block-button brv-team-card__social"><a class="wp-block-button__link wp-element-button" href="#" aria-label="Instagram de Pedro Oliveira">Instagram</a></div><!-- /wp:button -->
					<!-- wp:group {"className":"brv-team-card__overlay"} -->
					<div class="wp-block-group brv-team-card__overlay"><!-- wp:paragraph {"className":"brv-team-card__badge"} --><p class="brv-team-card__badge">5 anos</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Matheus</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Barber Specialist</p><!-- /wp:paragraph --><!-- wp:paragraph {"className":"brv-team-card__specialty"} --><p class="brv-team-card__specialty">Cortes Modernos &amp; Styling</p><!-- /wp:paragraph --></div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"brv-team-card__body"} -->
				<div class="wp-block-group brv-team-card__body"><!-- wp:paragraph --><p>Especializado em tendências contemporâneas, Pedro traz inovação e estilo para cada cliente.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p><a href="#">@pedro.cuts</a></p><!-- /wp:paragraph --></div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"brv-team__cta"} -->
		<div class="wp-block-group brv-team__cta"><!-- wp:paragraph --><p>Escolha seu barbeiro preferido e agende seu horário</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"className":"primary-button"} --><div class="wp-block-button primary-button"><a class="wp-block-button__link wp-element-button" href="/agendar/">Agendar com um Profissional</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
HTML
	)
);

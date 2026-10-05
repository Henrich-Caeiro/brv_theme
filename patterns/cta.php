<?php
register_block_pattern(
	'villela-barbearia/cta',
	array(
		'title'       => __( 'CTA final', 'villela-barbearia' ),
		'description' => __( 'Chamada para agendar e entrar em contato.', 'villela-barbearia' ),
		'categories'  => array( 'featured' ),
		'content'     => <<<'HTML'
<!-- wp:cover {"url":"https://images.unsplash.com/photo-1517832606299-7ae9b720a186?auto=format&amp;fit=crop&amp;w=1600&amp;q=80","dimRatio":55,"minHeight":380,"minHeightUnit":"px","className":"brv-cta"} -->
<div class="wp-block-cover brv-cta" style="min-height:380px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-55 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Interior da barbearia" src="https://images.unsplash.com/photo-1517832606299-7ae9b720a186?auto=format&amp;fit=crop&amp;w=1600&amp;q=80" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	<!-- wp:group {"className":"brv-container","layout":{"type":"constrained"}} -->
	<div class="wp-block-group brv-container">
		<!-- wp:columns {"verticalAlignment":"center"} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"width":"60%"} -->
			<div class="wp-block-column" style="flex-basis:60%">
				<!-- wp:heading {"level":2,"style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"clamp(2rem, 3.5vw, 2.75rem)","fontWeight":"700","lineHeight":"1.2"}}} -->
				<h2 class="wp-block-heading has-text-color" style="color:#ffffff;font-size:clamp(2rem, 3.5vw, 2.75rem);font-weight:700;line-height:1.2">Reserve Seu Horário Hoje</h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#e5e5e5"},"typography":{"fontSize":"1.1rem"}}} -->
				<p class="has-text-color" style="color:#e5e5e5;font-size:1.1rem">Experimente o padrão Villela Barbearia de atendimento e excelência.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"width":"40%","className":"has-text-align-right"} -->
			<div class="wp-block-column has-text-align-right" style="flex-basis:40%">
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"url":"https://sites.appbarber.com.br/barbeariarogerv-ji0g","className":"primary-button site-book-button"} -->
					<div class="wp-block-button primary-button site-book-button"><a class="wp-block-button__link wp-element-button" href="https://sites.appbarber.com.br/barbeariarogerv-ji0g" target="_blank" rel="noopener noreferrer">Agendar Agora</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
HTML
	)
);

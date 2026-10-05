<?php
register_block_pattern(
	'villela-barbearia/artists',
	array(
		'title'       => __( 'Artistas e celebridades', 'villela-barbearia' ),
		'description' => __( 'Seção para artistas e celebridades com materiais autorizados.', 'villela-barbearia' ),
		'categories'  => array( 'featured' ),
		'content'     => <<<'HTML'
<!-- wp:group {"align":"full","className":"brv-section brv-artists"} -->
<div class="wp-block-group alignfull brv-section brv-artists">
	<div class="wp-block-group brv-container brv-section__inner">
		<div class="wp-block-group brv-section__header">
			<p class="brv-section__badge">Artistas e celebridades</p>
			<h2 class="wp-block-heading brv-section__title">Conheça alguns artistas e celebridades que já passaram pela Roger Vilela.</h2>
		</div>
		<div class="wp-block-group brv-artists__grid">
			<div class="wp-block-group brv-artist-card">
				<div class="brv-artist-card__media brv-artist-card__media--placeholder" aria-hidden="true"></div>
				<div class="brv-artist-card__body">
					<h3>Material autorizado</h3>
					<p>Conteúdo pendente de validação. A seção fica pronta para receber perfis e imagens autorizadas.</p>
				</div>
			</div>
			<div class="wp-block-group brv-artist-card">
				<div class="brv-artist-card__media brv-artist-card__media--placeholder" aria-hidden="true"></div>
				<div class="brv-artist-card__body">
					<h3>Material autorizado</h3>
					<p>Conteúdo pendente de validação. A seção fica pronta para receber perfis e imagens autorizadas.</p>
				</div>
			</div>
			<div class="wp-block-group brv-artist-card">
				<div class="brv-artist-card__media brv-artist-card__media--placeholder" aria-hidden="true"></div>
				<div class="brv-artist-card__body">
					<h3>Material autorizado</h3>
					<p>Conteúdo pendente de validação. A seção fica pronta para receber perfis e imagens autorizadas.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /wp:group -->
HTML
	)
);

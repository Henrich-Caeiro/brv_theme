<?php
register_block_pattern(
	'villela-barbearia/structure',
	array(
		'title'       => __( 'Estrutura e nova unidade', 'villela-barbearia' ),
		'description' => __( 'Seção com a estrutura atual e a nova unidade da barbearia.', 'villela-barbearia' ),
		'categories'  => array( 'featured' ),
		'content'     => <<<'HTML'
<!-- wp:group {"align":"full","className":"brv-section brv-structure","anchor":"structure"} -->
<div class="wp-block-group alignfull brv-section brv-structure" id="structure">
	<div class="wp-block-group brv-container brv-section__inner">
		<div class="wp-block-group brv-section__header">
			<p class="brv-section__badge">Estrutura</p>
			<h2 class="wp-block-heading brv-section__title">Conheça um pouco da nossa estrutura atual e confira um pequeno spoiler da nova unidade da Barbearia Roger Vilela.</h2>
		</div>
		<div class="wp-block-group brv-structure__grid">
			<div class="wp-block-group brv-structure__card">
				<div class="brv-structure__visual brv-structure__visual--current" aria-hidden="true"></div>
				<div class="brv-structure__content">
					<h3>Estrutura atual</h3>
					<p>Ambiente em funcionamento com padrão premium, atendimento exclusivo e uma experiência pensada para cada cliente.</p>
				</div>
			</div>
			<div class="wp-block-group brv-structure__card">
				<div class="brv-structure__visual brv-structure__visual--future" aria-hidden="true"></div>
				<div class="brv-structure__content">
					<h3>Nova unidade</h3>
					<p>Espaço pensado para levar a experiência Roger Vilela a um novo patamar com sofisticação e conforto.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /wp:group -->
HTML
	)
);

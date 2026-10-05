<?php
register_block_pattern(
	'villela-barbearia/footer',
	array(
		'title'       => __( 'Rodapé da barbearia', 'villela-barbearia' ),
		'description' => __( 'Insere o template part de rodapé editável no Editor do site.', 'villela-barbearia' ),
		'categories'  => array( 'footer' ),
		'content'     => '<!-- wp:template-part {"slug":"footer","area":"footer"} /-->',
	)
);

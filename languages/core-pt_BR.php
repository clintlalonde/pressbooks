<?php
/**
 * Change core WordPress strings using $overrides array.
 *
 * @author  Pressbooks <code@pressbooks.com>
 * @license GPLv2 (or any later version)
 * @see     pressbooks/includes/pb-l10n.php
 */

$overrides = array(

	// 'View all posts filed under %s' => 'See all articles filed under %s',
	// 'Howdy, %1$s' => 'Greetings, %1$s!',
	// Add some more strings here...

	'My Sites' => 'Meus livros',
	'Create a New Site' => 'Criar um novo livro',
);

if ( \PressBooks\Book::isBook() ) {
	$overrides['Settings'] = 'Configurações';
	$overrides['Visit Site'] = 'Visitar Livro';
	$overrides['Edit Site'] = 'Editar Livro';
}

return $overrides;
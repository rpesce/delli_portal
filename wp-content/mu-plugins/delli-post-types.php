<?php
	function delli_post_types() {
		register_post_type('item-cardapio', array(
			'supports' => array('title', 'editor'),
			'rewrite' => array('slug' => 'Enderecos'),
			'public' => true,
			'labels' => array(
				'name' => 'Card&aacute;pio',
				'add_new_item' => 'Adicione itens ao card&aacute;pio',
				'edit_item' => 'Edite seu item',
				'all_items' => 'Todos os itens',
				'singular_name' => 'Item'
			),
			'menu_icon' => 'dashicons-carrot'
		));
	}

	add_action('init', 'delli_post_types');
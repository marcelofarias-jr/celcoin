<?php
	// Register Custom Post Type
	function registra_saquesedepositos() {

		$labels = array(
			'name'                  => _x( 'Saques e Depositos', 'Saques e Depositos', 'text_domain' ),
			'singular_name'         => _x( 'Saques e Depositos', 'Saques e Depositos', 'text_domain' ),
			'menu_name'             => __( 'Saques e Depositos', 'text_domain' ),
			'name_admin_bar'        => __( 'Saques e Depositos', 'text_domain' ),
			'archives'              => __( 'Item Arquivo', 'text_domain' ),
			'attributes'            => __( 'Item Atributos', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
			'all_items'             => __( 'Todos os itens', 'text_domain' ),
			'add_new_item'          => __( 'Adicionar novo item', 'text_domain' ),
			'add_new'               => __( 'Adicionar novo', 'text_domain' ),
			'new_item'              => __( 'Novo Item', 'text_domain' ),
			'edit_item'             => __( 'Editar Item', 'text_domain' ),
			'update_item'           => __( 'Atualizar Item', 'text_domain' ),
			'view_item'             => __( 'Visualizar Item', 'text_domain' ),
			'view_items'            => __( 'Visualizar Items', 'text_domain' ),
			'search_items'          => __( 'Buscar Item', 'text_domain' ),
			'not_found'             => __( 'Nenhum item', 'text_domain' ),
			'not_found_in_trash'    => __( 'Nenhum item na lixeira', 'text_domain' ),
			'featured_image'        => __( 'Imagem em destaque', 'text_domain' ),
			'set_featured_image'    => __( 'Definir imagem em destaque', 'text_domain' ),
			'remove_featured_image' => __( 'Remover imagem em destaque', 'text_domain' ),
			'use_featured_image'    => __( 'Usar como imagem em destaque', 'text_domain' ),
			'insert_into_item'      => __( 'Inserir no item', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
			'items_list'            => __( 'Items list', 'text_domain' ),
			'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Saques e Depositos', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'author', 'thumbnail','excerpt', 'custom-fields',  ),
			'taxonomies'            => array( 'genero' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
			'menu_icon'           => 'dashicons-openbanking-alt3',
		);
		register_post_type( 'Saques e Depositos', $args );

	}

	add_action( 'init', 'registra_saquesedepositos' );

	function cwp_register_taxonomy_saquesedepositos(){
		register_taxonomy(
		'saquesedepositos',
		array('saquesedepositos'),
		array(
		'label' => __('Saques e Depositos'),
		'labels' => array(),
		'rewrite' => array('slug' => 'saquesedepositos'),
		'hierarchical' => true
		));
		}
add_action('init', 'cwp_register_taxonomy_saquesedepositos');
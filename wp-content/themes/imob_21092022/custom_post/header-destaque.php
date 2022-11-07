<?php
// Register Custom Header
function custom_post_type_header() {

	$labels = array(
		'name'                  => _x( 'Header', 'Header General Name', 'text_domain' ),
		'singular_name'         => _x( 'Header', 'Header Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Header', 'text_domain' ),
		'name_admin_bar'        => __( 'Header', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Editar Destaques Header', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Header', 'text_domain' ),
		'description'           => __( 'Header Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail', 'custom-fields', 'post-formats'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-home',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'header', $args );

}
add_action( 'init', 'custom_post_type_header', 0 );

// Register Metabox
add_action("add_meta_boxes", "custom_metabox");

function custom_metabox(){
    add_meta_box("custom_metabox", "Título Button", "custom_metabox_field", "header", "normal", "high");
}

function custom_metabox_field(){
	global $post;
	$data = get_post_custom($post->ID);
	$val = isset($data['custom_input']) ? esc_attr($data['custom_input'][0]) : 'Não tem Valor!';
    echo '<input type="text" name="custom_input" id="custom_input" value="'.$val.'" placeholder="Digite aqui!" style="width: 100%" />';
}

add_action("save_post", "salvando");
function salvando(){
	global $post;

	if( define('DOING_AUTOSAVE', '') && DOING_AUTOSAVE){
		return $post->ID;
	}

	update_post_meta($post->ID, "custom_input", $_POST["custom_input"]);
}
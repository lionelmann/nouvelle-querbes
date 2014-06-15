<?php //Slider CPT

$args = array(
	'has_archive' => true,
	'menu_position' => 5,
	'menu_icon' => 'dashicons-products', //http://melchoyce.github.io/dashicons/
	'supports'	=> array( 'title', 'thumbnail' )
 	);

$slider = register_cuztom_post_type( 'Slider', $args);

$slider->add_meta_box( 
	'slide',
	'Overview',
		array(
			array(
				'name'          => 'link',
				'label'         => 'Link',
				'description'   => '',
				'type'          => 'text'
                ),
			array(
				'name'          => 'slide_description',
				'label'         => 'Description',
				'description'   => '',
				'type'          => 'textarea'
                )
		)
	);
?>
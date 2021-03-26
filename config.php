<?php

// This file contains default configuration values for kpb Theme,
// and will be overwritten by any theme updates. To override any
// of these settings or add fields to $kpb['config']['acf']['extra_fields']
// or $kpb['config']['acf']['advanced_fields'], make those changes in
// the child theme.

global $kpb;

$kpb['config']['name'] = 'KalaPress Page Builder';

$kpb['config']['acf']['location'] = array (
        array (
            array (
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'page',
            ),
        ),
    );

$kpb['config']['acf']['customStyles'] = array(
    'kpb-light-background' => array(
        'name' => 'Light Background',
        'modules' => array(
            'headline',
            'primary-content',
	        'buttons'
        )
    )
);

$kpb['config']['acf']['hide_on_screen'] = array (
        0 => 'the_content',
        1 => 'excerpt',
        2 => 'custom_fields',
        3 => 'discussion',
        4 => 'comments',
        5 => 'slug',
        6 => 'author',
        7 => 'format',
        8 => 'featured_image',
        9 => 'categories',
        10 => 'tags',
        11 => 'send-trackbacks'
    );

// Extra Fields

$kpb['config']['acf']['extra_fields'] = array(
    '1000' => array(
        'key' => '_indented',
        'label' => 'Indented',
        'name' => 'indented',
        'type' => 'true_false',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
            'width' => '22',
            'class' => '',
            'id' => '',
        ),
        'message' => '',
        'default_value' => 0,
        'ui' => 1,
        'ui_on_text' => 'Indented',
        'ui_off_text' => 'Full Width',
    ),
    '3640' => array(
		'key' => '_padding_margin_tab',
		'label' => 'Padding/Margin',
		'name' => '',
		'type' => 'tab',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		),
		'placement' => 'top',
		'endpoint' => 0,
	),

    '3650' => array (
		'key' => '_bottom_margin',
		'label' => 'Bottom Margin',
		'name' => 'bottom_margin',
		'type' => 'select',
		'required' => 1,
		'conditional_logic' => 0,
		'wrapper' => array (
			'width' => '50',
			'class' => '',
			'id' => '',
		),
		'choices' => array (
			'default' => 'Default',
			'double' => 'Double',
			'half' => 'Half',
			'quarter'=> 'Quarter',
			'none'=> 'None'
		),
		'default_value' => 'default',
		'allow_null' => 0,
		'multiple' => 0,
		'ui' => 1,
		'ajax' => 0,
		'layout' => 'horizontal',
		'return_format' => 'value',
		'placeholder' => ''
	),
    '3680' => array(
        'key'               => '_top_negative_margin',
        'label'             => 'Top Negative Margin',
        'name'              => 'top_negative_margin',
        'type'              => 'true_false',
        'instructions'      => '',
        'required'          => 0,
        'conditional_logic' => 0,
        'wrapper'           => array(
            'width' => '50',
            'class' => '',
            'id'    => '',
        ),
        'message'           => '',
        'default_value'     => 0,
        'ui'                => 1,
        'ui_on_text'        => 'On',
        'ui_off_text'       => 'Off',
    ),
    '3655' => array(
        'key'               => '_top_negative_margin',
        'label'             => 'Top Negative Margin',
        'name'              => 'top_negative_margin',
        'type'              => 'true_false',
        'instructions'      => '',
        'required'          => 0,
        'conditional_logic' => 0,
        'wrapper'           => array(
            'width' => '50',
            'class' => '',
            'id'    => '',
        ),
        'message'           => '',
        'default_value'     => 0,
        'ui'                => 1,
        'ui_on_text'        => 'On',
        'ui_off_text'       => 'Off',
    ),
    '3660' => array (
	    'key' => '_bottom_padding',
	    'label' => 'Bottom Padding',
	    'name' => 'bottom_padding',
	    'type' => 'select',
	    'required' => 1,
	    'conditional_logic' => 0,
	    'wrapper' => array (
		    'width' => '50',
		    'class' => '',
		    'id' => '',
	    ),
	    'choices' => array (
		    'default'=> 'Default (No Padding)',
		    'double' => 'Double',
		    'full' => 'Full',
		    'half' => 'Half',
		    'quarter'=> 'Quarter'
	    ),
	    'default_value' => 'default',
	    'allow_null' => 0,
	    'multiple' => 0,
	    'ui' => 1,
	    'ajax' => 0,
	    'layout' => 'horizontal',
	    'return_format' => 'value',
	    'placeholder' => ''
    ),
    '3670' => array (
	    'key' => '_top_padding',
	    'label' => 'Top Padding',
	    'name' => 'top_padding',
	    'type' => 'select',
	    'required' => 1,
	    'conditional_logic' => 0,
	    'wrapper' => array (
		    'width' => '50',
		    'class' => '',
		    'id' => '',
	    ),
	    'choices' => array (
		    'default'=> 'Default (No Padding)',
		    'double' => 'Double',
		    'full' => 'Full',
		    'half' => 'Half',
		    'quarter'=> 'Quarter'
	    ),
	    'default_value' => 'default',
	    'allow_null' => 0,
	    'multiple' => 0,
	    'ui' => 1,
	    'ajax' => 0,
	    'layout' => 'horizontal',
	    'return_format' => 'value',
	    'placeholder' => ''
    ),
    '3685' => array(
	    'key' => '_scheduling_tab',
	    'label' => 'Scheduling',
	    'name' => '',
	    'type' => 'tab',
	    'instructions' => '',
	    'required' => 0,
	    'conditional_logic' => 0,
	    'wrapper' => array(
		    'width' => '',
		    'class' => '',
		    'id' => '',
	    ),
	    'placement' => 'top',
	    'endpoint' => 0,
    ),
    '3690' => array (
	    'key' => '_do_not_display_before',
	    'label' => 'Do Not Display Before',
	    'name' => 'do_not_display_before',
	    'type' => 'date_time_picker',
	    'instructions' => '',
	    'required' => 0,
	    'conditional_logic' => 0,
	    'wrapper' => array (
		    'width' => '',
		    'class' => '',
		    'id' => '',
	    ),
	    'display_format' => 'F j, Y g:i a',
	    'return_format' => 'Y-m-d H:i:s',
	    'first_day' => 1,
    ),
    '3695' => array (
	    'key' => '_do_not_display_after',
	    'label' => 'Do Not Display After',
	    'name' => 'do_not_display_after',
	    'type' => 'date_time_picker',
	    'instructions' => '',
	    'required' => 0,
	    'conditional_logic' => 0,
	    'wrapper' => array (
		    'width' => '',
		    'class' => '',
		    'id' => '',
	    ),
	    'display_format' => 'F j, Y g:i a',
	    'return_format' => 'Y-m-d H:i:s',
	    'first_day' => 1,
    ),

);

// Advanced Fields
// Must use keys between 4000-4999. Keys used to determine order.
// Visible only if username starts with "kalamuna-"

$kpb['config']['acf']['advanced_fields'] = array(
	'4000' => array(
		'key'               => '_advanced_tab',
		'label'             => 'Custom CSS',
		'name'              => '',
		'type'              => 'tab',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'placement'         => 'top',
		'endpoint'          => 0,
	),
	'4200' => array(
		'key'               => '_custom_id',
		'label'             => 'Custom ID',
		'name'              => 'custom_id',
		'type'              => 'text',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'default_value'     => '',
		'placeholder'       => '',
		'maxlength'         => ''
	),
	'4300' => array(
		'key'               => '_custom_classes',
		'label'             => 'Custom Classes',
		'name'              => 'custom_classes',
		'type'              => 'text',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'default_value'     => '',
		'placeholder'       => '',
		'maxlength'         => ''
	),
	'4400' => array(
		'key'               => '_css_overrides',
		'label'             => 'CSS Overrides',
		'name'              => 'css_overrides',
		'type'              => 'textarea',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'default_value'     => '',
		'placeholder'       => '',
		'maxlength'         => '',
		'rows'              => '',
		'new_lines'         => '',
	)
);


?>
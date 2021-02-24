<?php

// Setup ACF Field Array //////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$acfConfig = array (
    
    'key' => 'kpb_content',
    'title' => $kpb['config']['name'],
    'fields' => array (
        array (
            'key' => 'kpb_content_modules',
            'label' => 'Content Modules',
            'name' => 'kpb_content_modules',
            'type' => 'flexible_content',
            'instructions' => 'Design your page by selecting content modules and configuring content modules. Add one or as many as you like, each content module acts like a row within your pages\'s layout.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
                ),
            'layouts' => array(), // To be populated from the /content-modules directory
            'button_label' => 'Add Content Module',
            'min' => '',
            'max' => '',
        ),
    ),
    'location' => $kpb['config']['acf']['location'],
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => $kpb['config']['acf']['hide_on_screen'],
    'active' => 1,
    'description' => 'Allows you to create custom layouts based on pre-configured content modules.',
    
);


?>
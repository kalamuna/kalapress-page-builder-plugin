<?php

    $kpb['config']['acf']['customStyles']['kpb-headline--textAlignLeft'] = array(
        'name' => '[HEADLINE] Text Align Left',
        'modules' => array('headline')
    );

    $kpb['config']['acf']['customStyles']['kpb-headline--textAlignRight'] = array(
        'name' => '[HEADLINE] Text Align Right',
        'modules' => array('headline')
    );
    
    $kpb_content_modules['kpb_content_module_headline'] = array (
					'key' => 'kpb_field5c6313382c397',
					'name' => 'headline',
					'label' => 'Headline',
					'display' => 'row',
					'sub_fields' => array (
						array (
							'key' => 'kpb_field_5c6313382c407',
							'label' => 'Headline',
							'name' => 'headline',
							'type' => 'text',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
                        array (
                            'key' => 'kpb_field5c6313382c4d7',
                            'label' => 'Type',
                            'name' => 'type',
                            'type' => 'radio',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => 0,
                            'wrapper' => array (
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'choices' => array (
                                'h1' => 'H1',
                                'h2' => 'H2',
                                'h3' => 'H3',
                                'h4' => 'H4',
                                'h5' => 'H5',
                            ),
                            'allow_null' => 0,
                            'other_choice' => 0,
                            'save_other_choice' => 0,
                            'default_value' => 'h2',
                            'layout' => 'horizontal',
                            'return_format' => 'value',
                        )
					),
					'min' => '',
					'max' => '',
				);
    
?>
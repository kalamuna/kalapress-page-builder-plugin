<?php

// Configure ACF Repeater Field ///////////////////////////////////////////////////////////////////////////////////////////////////////////

if( function_exists('acf_add_local_field_group') ) {

    include( 'config-acf-flexible-content-field.php' );

    // Include ACF Configurations From All Content Types
    foreach ($kpb['content_types'] as $type => $dir) {
        include($dir . '/config-acf-field.php');
    }

    //Add Advanced & Extra Settings Fields From Config

    foreach ($kpb_content_modules as $key => $vals) {

        unset($kpb_condtional_field);

        // Reset Keys On Subfields To 200*
        $temp_subfields = array();
        $newKey = 2000;
        foreach ($kpb_content_modules[$key]['sub_fields'] as $oldKey=>$vars) {
            $temp_subfields[$newKey] = $vars;
            unset($kpb_content_modules[$key]['sub_fields'][$oldKey]);
            $newKey++;
        }
        foreach ($temp_subfields as $newKey=>$vars) {
            $kpb_content_modules[$key]['sub_fields'][$newKey] = $vars;
        }

        //Add Extra Settings Fields From Config
        if (isset($kpb['config']['acf']['extra_fields'])) {
            $kpb_extra_fields_array = array_replace($kpb['config']['acf']['extra_fields'], $kpb['config']['acf']['advanced_fields']);
        } else {
            $kpb_extra_fields_array = $kpb['config']['acf']['advanced_fields'];
        }

        // Loop through extra setting fields and add field names to key fields to make them unique.
        foreach ( $kpb_extra_fields_array as $af_key => $af_vals) {
            $kpb_extra_fields_array[$af_key]['key'] = $key . $kpb_extra_fields_array[$af_key]['key'];
            if ($af_vals['key'] == '_advanced_options') {
                $kpb_condtional_field = $kpb_extra_fields_array[$af_key]['key'];
            }

            if (is_array($kpb_extra_fields_array[$af_key]['conditional_logic'])) {
                $kpb_extra_fields_array[$af_key]['conditional_logic']['0']['0']['field'] = $kpb_condtional_field;
            }
        }

        // Add Style Field Before Advanced Fields
        // Add to subfields because there is no better place to add it

	    $customStyles = array();

        foreach ($kpb['config']['acf']['customStyles'] as $class=>$variables) {
        	if (in_array($vals['name'], $variables['modules'])) {
        		$customStyles[$class] = $variables['name'];
	        }
        }

	    if (count($customStyles)) {

		    $choices = $customStyles;

		    $kpb_content_modules[$key]['sub_fields']['1500'] = array(
			    'key' => $vals['key'] . '_subfield_style',
			    'label' => 'Style',
			    'name' => 'style',
			    'type' => 'select',
			    'instructions' => '',
			    'required' => 0,
			    'conditional_logic' => 0,
			    'wrapper' => array(
				    'width' => '78',
				    'class' => '',
				    'id' => '',
			    ),
			    'choices' => $choices,
			    'default_value' => array(
				    0 => 'none',
			    ),
			    'allow_null' => 0,
			    'multiple' => 1,
			    'ui' => 1,
			    'ajax' => 0,
			    'return_format' => 'value',
		    );

	    }


        // Add Sub/Advanced Fields
        $kpb_content_modules[$key]['sub_fields'] = array_replace($kpb_extra_fields_array, $kpb_content_modules[$key]['sub_fields']);

        ksort($kpb_content_modules[$key]['sub_fields']);

    }

    $acfConfig['fields'][0]['layouts'] = $kpb_content_modules;

    //print_r($acfConfig['fields'][0]['layouts']);

    acf_add_local_field_group($acfConfig);

}
<?php

global $container_opening, $container_closing;

// Open the container

ob_start();

// Open container for content row if .nocontainer file isn't present
if (!file_exists($kpb['content_types'][get_row_layout()] . '/.nocontainer')) {

    echo '	<section' // Open Container
            .(!empty(get_sub_field('custom_id')) ? ' id="' . get_sub_field('custom_id') .'" ' : '') // Custom ID
            .' class="kpb-module '.get_row_layout() // Set Module Classes
            .(get_sub_field('indented') ? ' col-12 col-lg-10 offset-lg-1' : '' ) // Indentation
            .(get_sub_field('top_negative_margin')? ' kpb-module--top-negative-margin' : '' ) // Top Negative Margin
            .(get_sub_field('bottom_margin') != 'default' ? ' kpb-module--margin-bottom-' . get_sub_field('bottom_margin') : '' ) // Bottom Margin
            .(is_array(get_sub_field('style')) && count(get_sub_field('style')) ? ' ' . implode(' ', get_sub_field('style')) : '' )
            .(!empty(get_sub_field('custom_classes')) ? ' ' . get_sub_field('custom_classes') : '') // Custom Classes
            .'">';

	echo '	<div class='.get_row_layout().'__background';
	echo (get_sub_field('top_padding') != 'default' ? ' kpb-module__background--padding-top-' . get_sub_field('top_padding') : '' ); // Top Padding
	echo (get_sub_field('bottom_padding') != 'default' ? ' kpb-module__background--padding-bottom-' . get_sub_field('bottom_padding') : '' ); // Bottom Padding
	echo '">' . "\n";
    echo (!file_exists($kpb['content_types'][get_row_layout()] . '/.fullwidth') ? '<div class='.get_row_layout().'__container">' . "\n" : '');
	echo '          <div class='.get_row_layout().'__row">' . "\n";
	echo '              <div class='.get_row_layout().'__col">' . "\n";

}

$container['open'] = ob_get_contents();

ob_end_clean();


ob_start();

// Close container for content row

if (!file_exists($kpb['content_types'][get_row_layout()] . '/.nocontainer')) {
    echo '	        </div>'; // End column
	echo '        </div>' . "\n";  // End row
	echo (!file_exists($kpb['content_types'][get_row_layout()] . '/.fullwidth') ? '        </div>' : ''); // End container div
	echo '    </div>' . "\n";  // End background div
	echo '</section>' . "\n";

}

$container['close'] = ob_get_contents();

ob_end_clean();
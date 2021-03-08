<?php

// Function To Display Content On Front End //////////////////////////////////////////////////////////////////////////////////////////////

function get_kpb_content_modules() {

    global $kpb;

	echo '<main class="kpb-content-modules">';

    if( have_rows('kpb_content_modules') ) {

        // Cycle Through Content Types

            while ( have_rows('kpb_content_modules') ) {

                the_row();

                // Content Scheduling
                $beforeTime = trim(strtotime(get_sub_field('do_not_display_before')));
                $afterTime = trim(strtotime(get_sub_field('do_not_display_after')));

                if (
                    ( ($beforeTime > 0 && current_time('timestamp') >= $beforeTime) || $beforeTime == '' ) &&
                    ( ($afterTime > 0 && current_time('timestamp') <= $afterTime) || $afterTime == '' )
                ) {

                    if (isset($kpb['content_types'][get_row_layout()]) && file_exists($kpb['content_types'][get_row_layout()] . '/markup.php')) {

                        if (current_user_can('administrator')) {
                            echo "\n\n\n";
                            echo '<!-- KALAPRESS CONTENT MODULE: ' . get_row_layout() . ' -->' . "\n";
                        }

                        // Modules JS
                        if (file_exists(plugins_url('/scripts.js', $kpb['content_types'][get_row_layout()] . '/markup.php'))) {
                            wp_enqueue_script('tcm-' . get_row_layout(), plugins_url('/scripts.js', $kpb['content_types'][get_row_layout()] . '/markup.php'), false, false, 'all');
                        }

                        // Get Container Markup
                        if ( file_exists( get_stylesheet_directory() . '/kalapress-page-builder/render-front-container.php' ) )  {
                            include( get_stylesheet_directory() . '/kalapress-page-builder/render-front-container.php' );
                        } else {
                            include(plugin_dir_path( __FILE__ ) . '/render-front-container.php');
                        }

                        // Render content module
                        echo $container['open'];
                        include($kpb['content_types'][get_row_layout()] . '/markup.php');
                        echo $container['close'];

                        if (!empty(get_sub_field('css_overrides'))) {
                            if (current_user_can('administrator')) {
                                echo '<!-- CONTENT MODULE CSS OVERRRIDES -->' . "\n";
                            }

                            echo '<style>';
                            echo get_sub_field('css_overrides');
                            echo '</style>';

                            if (current_user_can('administrator')) {
                                echo '<!-- / CONTENT MODULE CSS OVERRRIDES --> ' . "\n";
                            }
                        }

                        if (current_user_can('administrator')) {

                            echo "\n\n" . '<!-- / CUSTOM CONTENT MODULE: ' . get_row_layout() . ' -->' . "\n\n";

                        }

					// Inculude Enqueues File (If Exists)
                    if (!is_admin() && file_exists($kpb['content_types'][get_row_layout()] . '/enqueues.php')) {
	                    include($kpb['content_types'][get_row_layout()] . '/enqueues.php');
                    }


                    } else {

                        if (current_user_can('administrator')) {

                            echo "\n\n" . '<!-- CUSTOM CONTENT MODULE DOES NOT EXIST: ' . get_row_layout() . ' --> ';

                        }

                    }

                }

            }

    }

	echo '</main>';

}
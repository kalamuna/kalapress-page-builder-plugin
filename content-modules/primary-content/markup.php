    <div class="row">
    <?php
        if( have_rows('columns') ) :
            while ( have_rows('columns') ) :
                the_row();
        ?>
            <div class="<?php echo ( get_sub_field('width') != 'auto' ? '-md-'.get_sub_field('width') : 'col' ); ?><?php echo ( get_sub_field('bottom_padding') != 'none' ? ' kpb-columns__content-column--padding-bottom-'.get_sub_field('bottom_padding') : '' ); ?><?php echo ( get_sub_field('bottom_top') != 'none' ? ' kpb-columns__content-column--padding-top-'.get_sub_field('top_padding') : '' ); ?>">
                <?php

                switch (get_sub_field('content_type')):

                    case 'wysiwyg':
                        echo get_sub_field('wysiwyg');
                        break;

                    case 'image':
                        $image = get_sub_field('image');
                        echo '<img src="'.$image['url'].'"'.(!empty($image['alt']) ? ' alt="' . $image['alt'] : '').' />';
                        break;

                    case 'video':
                        echo '<div class="embed-container">'.get_sub_field('video').'</div>';
                        break;

                endswitch;



                ?>
            </div>
        <?php
            endwhile;
        endif;
    ?>
    </div>

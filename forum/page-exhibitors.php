<!-- <?php
/*
Template Name: exhibitors
*/
?> -->


<?php get_header(); ?>
    <div class="sponsors">
        <div class="container">
            <div class="title title_sponsors">OUR Exhibitors</div>
            <div class="sponsors_desk">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </div>
            <div class="title title_input">
                please select a conference
            </div>
            <div class="conference-selection">
                <div class="conference-selection__text">
                    Wealth TOP FORUM Israel 2016
                </div>
                <img src="<?php echo bloginfo('template_url');?>/assets/icons/conference-selection-arrow.png" alt="conference-selection-arrow">
                <ul class="conference-selection__list animate__animated ">
                    <li ><a href="#">Wealth TOP FORUM Israel 2016</a></li>
                    <li ><a href="#">Wealth TOP FORUM Israel 2016</a></li>
                    <li ><a href="#">Wealth TOP FORUM Israel 2016</a></li>
                    <li ><a href="#">Wealth TOP FORUM Israel 2016</a></li>
                    <li ><a href="#">Wealth TOP FORUM Israel 2016</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="sponsors-list">
        <?php
            // параметры по умолчанию
            $posts = get_posts( array(
                'numberposts' => -1,
                'category_name'    => 'sponsors',
                'orderby'     => 'date',
                'order'       => 'DESC',
                'include'     => array(),
                'exclude'     => array(),
                'meta_key'    => '',
                'meta_value'  =>'',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            foreach( $posts as $post ){
                setup_postdata($post);
                ?>
                    <div class="sponsors-list__block">
                        <div class="sponsors-list__title"><?php the_field('sponsors-list_title'); ?></div>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="SPONSORS">
                            <div class="sponsors-list__desk">
                                <span><?php the_title(); ?></span>
                                <p><?php the_field('sponsors-list_desk'); ?></p>
                            </div>
                        <button class="button button_block_for-customers"><a href="<?php echo get_permalink(); ?>">Learn more</a></button>
                    </div>
                <?php
            }

            wp_reset_postdata(); // сброс
        ?>
        </div>
    </div>
    
    
    <?php get_footer(); ?>
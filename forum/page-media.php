<!-- <?php
/*
Template Name: media
*/
?> -->





<?php get_header(); ?>
    <div class="media">
        <div class="container">
            <div class="title title_media">ARTICLES FROM SPONSORS</div>
            <div class="media_desk">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </div>
        </div>
    </div>
    <div class="container">
        <div class="media-list">
        <!-- <?php
            // параметры по умолчанию
            $posts = get_posts( array(
                'numberposts' => 3,
                'category_name'    => 'articles-sponsors',
                'orderby'     => 'date',
                'order'       => 'ASC',
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
                    <div class="media-list__block">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="ARTICLES-SPONSORS">
                        <div class="media-list__desk">
                            <a href="#"><?php the_title(); ?></a>
                            <p><?php the_content();?></p>
                        </div>
                    </div>
                <?php
            }

            wp_reset_postdata(); // сброс
        ?> -->
            <!-- <div class="media-list__block">
                    <img src="<?php echo bloginfo('template_url');?>/assets/img/ARTICLES-FROM-SPONSORS/ARTICLES-SPONSORS-1.jpg" alt="ARTICLES-SPONSORS">
                    <div class="media-list__desk">
                        <a href="#">Visit Humboldt</a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                    </div>
            </div>
            <div class="media-list__block">
                <img src="<?php echo bloginfo('template_url');?>/assets/img/ARTICLES-FROM-SPONSORS/ARTICLES-SPONSORS-2.jpg" alt="ARTICLES-SPONSORS">
                <div class="media-list__desk">
                    <a href="#">Steven Mengin - Portfolio</a>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                </div>
            </div>
            <div class="media-list__block">
                <img src="<?php echo bloginfo('template_url');?>/assets/img/ARTICLES-FROM-SPONSORS/ARTICLES-SPONSORS-3.jpg" alt="ARTICLES-SPONSORS">
                <div class="media-list__desk">
                    <a href="#">Checkland Kindleysides</a>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                </div>
            </div>
            <div class="media-list__block">
                <img src="<?php echo bloginfo('template_url');?>/assets/img/ARTICLES-FROM-SPONSORS/ARTICLES-SPONSORS-4.jpg" alt="ARTICLES-SPONSORS">
                <div class="media-list__desk">
                    <a href="#">Portfolio of Aaron Porter</a>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                </div>
            </div>
            <div class="media-list__block">
                <img src="<?php echo bloginfo('template_url');?>/assets/img/ARTICLES-FROM-SPONSORS/ARTICLES-SPONSORS-5.jpg" alt="ARTICLES-SPONSORS">
                <div class="media-list__desk">
                    <a href="#">In Space We Trust</a>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                </div>
            </div>
            <div class="media-list__block">
                <img src="<?php echo bloginfo('template_url');?>/assets/img/ARTICLES-FROM-SPONSORS/ARTICLES-SPONSORS-6.jpg" alt="ARTICLES-SPONSORS">
                <div class="media-list__desk">
                    <a href="#">Spring/Summer 2016</a>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                </div>
            </div> -->
        </div>
        <!-- <button class="button button_media">More article</button> -->
        <?php echo do_shortcode('[ajax_load_more container_type="div" css_classes="media-list" post_type="post" posts_per_page="3" category="articles-sponsors" order="ASC" pause="true" scroll="false" button_label="More article"]'); ?>
    </div>
    
    
    <?php get_footer(); ?>
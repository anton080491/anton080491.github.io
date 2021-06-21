<!-- <?php
/*
Template Name: activities
*/
?> -->

<?php get_header(); ?>
<div class="sponsors-logo">
    <div class="container">
        <div class="title title_sponsors">our events</div>
        <div class="sponsors_desk">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </div>
    </div>
    <div class="container">
        <div class="activities">
            <?php
            // параметры по умолчанию
            $posts = get_posts( array(
                'numberposts' => -1,
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
                    <div class="activities__block">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="ARTICLES-SPONSORS">
                        <div class="activities__wrapper">
                            <span class="activities__title"><?php the_title(); ?></span><br><br>
                            <span class="activities__date">March 2016 | Online participation</span><br><br>
                            <span class="activities__desk"><?php the_content();?></span>
                            <a class="button button_activities" href="<?php echo get_permalink(); ?>">Learn more</a>
                        </div>
                    </div>
                    <hr>
                <?php
            }

            wp_reset_postdata(); // сброс
        ?>
          

        </div>
    </div>

<?php get_footer(); ?>
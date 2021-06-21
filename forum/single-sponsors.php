<?php
/*
Template Name: Спонсоры
Template Post Type: post, page, product
*/
?>


<?php
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php
    while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content', get_post_type() );

    endwhile; 
    ?>

    </main><!-- #main -->
</div><!-- #primary -->

<h2 class="title title_sponsors_content">other sponsors</h2>

<div class="container">
    <div class="sponsors-list">
        <?php
            // параметры по умолчанию
            $posts = get_posts( array(
                'numberposts' => -1,
                'category_name'    => 'sponsors',
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

<?php
get_footer();
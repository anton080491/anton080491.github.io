<?php
/*
Template Name: мероприятия
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

<h2 class="title title_sponsors_content">other EVENTS</h2>
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
	


<?php
get_footer();
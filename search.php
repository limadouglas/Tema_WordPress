
<?php get_header(); ?>

    <div id="primary">
        <main id="main">
            <div class="container">

            <h2>Resultados de pesquisa para: <?php echo get_search_query(); ?></h2>

            <?php get_search_form(); ?>

                <?php 
                    while(have_posts()): the_post();
                        get_template_part('content', 'search');

                        if(comments_open() || get_comments_number()):
                            comments_template();
                        endif;

                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
        </main>
    </div>

<?php get_footer(); ?>
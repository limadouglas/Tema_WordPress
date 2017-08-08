<?php
    /*
        Template Name: Páginas Gerais
    */
?>

    <?php get_header(); ?>

    <div class="conteudo-wrapper">
        <main>
            <div class="conteudo">
                <div class="container">
                    <div id="post-<?php the_ID();?>" <?php post_class(); ?> >
                        <?php 
                            if(have_posts()): 
                                while(have_posts()): the_post();
                        ?>
                        <h1>
                            <?php the_title(); ?>
                        </h1>
    
                        <p>
                            <?php the_content(); ?>
                        </p>

                        <?php
                            endwhile;
                            else:
                        ?>
                            <p>nada a ser mostrado!!!</p>
                        <?php
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <?php get_footer(); ?>
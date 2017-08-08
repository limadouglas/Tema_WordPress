<?php get_header(); ?>

<img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>"
 alt="" />
  
<div class="conteudo">
    <main>
        <section class="meio">
            <div class="container">
                <div class="row">
                    <div class="blog col-md-9">
                        <?php 
                            if(have_posts()): 
                                while(have_posts()): the_post();
                        ?>

                        <?php 
                            get_template_part( 'content', get_post_format() ); 
                        ?>

                        <?php
                            endwhile;

                            the_posts_pagination(array(
                                'prev_text' =>  'Anterior',
                                'next_text' =>  'Próximo'
                            ));

                            else:
                        ?>
                                <p>nada a ser mostrado!!!</p>
                        <?php
                            endif;
                        ?>
                    </div>
                    <aside class="barra-lateral col-md-3">
                        <?php 
                            get_sidebar('blog');
                        ?>
                    </aside>
                </div>
            </div>
        </section>
    </main>

</div>

<?php get_footer(); ?>
<?php get_header(); ?>


<div class="conteudo">
    <main>
        <section class="meio">
            <div class="container">
                <div class="row">
                    <div class="arquivo" col-md-9">
                        <?php 
                            if(have_posts()): 
                                while(have_posts()): the_post();
                        ?>

                        <?php 
                            get_template_part( 'content', 'archive' ); 
                        ?>

                        <?php
                            endwhile;
                        ?>
                            <div class="row">
                                <div class="paginacao text-right col-md-6">
                                    <?php next_posts_link("Mais Antigo >>") ;?>
                                </div>

                                <div class="paginacao text-left col-md-6">
                                    <?php previous_posts_link("<< Mais Novo")?>
                                </div>
                            </div>
                        <?php
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
<?php get_header(); ?>
<div class="conteudo">
    <main>
        <section class="slider">
            <?php motoPressSlider('home-slider') ; ?>
        </section>
        <section class="servicos">
            <div class="container">
                <h1>Serviços</h1>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="servicos-item">
                                <div class="servicos-img">
                                    <img src="<?php echo wp_get_attachment_url(get_theme_mod('set_servicos1')); ?>" alt="">
                                </div>
                                <div class="servicos-desc">
                                    <h2><?php echo get_theme_mod('set_servicos1_titulo') ?></h2>
                                    <p><?php echo get_theme_mod('set_servicos1_descricao') ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="servicos-item">
                                <div class="servicos-img">
                                    <img src="<?php echo wp_get_attachment_url(get_theme_mod('set_servicos2')); ?>" alt="">
                                </div>
                                <div class="servicos-desc">
                                    <h2><?php echo get_theme_mod('set_servicos2_titulo') ?></h2>
                                    <p><?php echo get_theme_mod('set_servicos2_descricao') ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="servicos-item">
                                <div class="servicos-img">
                                    <img src="<?php echo wp_get_attachment_url(get_theme_mod('set_servicos3')); ?>" alt="">
                                </div>
                                <div class="servicos-desc">
                                    <h2><?php echo get_theme_mod('set_servicos3_titulo') ?></h2>
                                    <p><?php echo get_theme_mod('set_servicos3_descricao') ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="meio">
            <div class="container">
                <div class="row">
                    <aside class="barra-lateral col-md-4">
                        <?php get_sidebar('home'); ?>
                    </aside>
                    <div class="noticias col-md-8">
                        <div class="row">
                            <?php
                                $tamanho = 'col-md-12';
                                $op_content = 'destaque';

                                $itens = get_categories(array('include' => '4,8,12'));



                                foreach($itens as $item):
                                    $args = array(
                                                'category__in'  => $item->cat_ID,
                                                'posts_per_page'=> 1
                                            );

                                    $consulta = new WP_Query($args);

                                    if($consulta->have_posts()):
                                        while($consulta->have_posts()):
                                            $consulta->the_post();
                                    ?>

                                        <div class="<?php echo $tamanho ?>">
                                            <?php get_template_part( 'content', $op_content )?>
                                        </div>
                                    <?php
                                            $tamanho = 'col-md-6';
                                            $op_content = 'secundario';
                                        endwhile;
                                        wp_reset_postdata();
                                    endif;

                                endforeach; 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mapa">
            <div class="ondeestamos">
                <h1>Onde estamos?</h1>
                <?php gmwd_map( 1, 1); ?>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>

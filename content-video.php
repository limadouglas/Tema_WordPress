<article id="post-<?php the_ID();?>" <?php post_class(array("post-format-video")); ?> >
    <h1 class="verde">
        <a title="<?php the_title_attribute(); ?>" href="<?php echo the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h1>
    <p>Publicado em <?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?></p>
    <p>Categorias: <?php the_category(','); ?></p>
    <p><?php the_content(); ?></p>
</article>
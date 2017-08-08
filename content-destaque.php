
<article class="noticia-destaque">
    <div class="miniatura">
        <a href="<?php echo the_permalink(); ?>"> <?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?> </a>
    </div>
    <h1> <a title="<?php the_title_attribute(); ?>" href="<?php echo the_permalink(); ?>"> <?php the_title(); ?> </a> </h1>
    <p>por <span><?php echo the_author_posts_link(); ?></span> em <span><?php the_category(' ');?></span> <span><?php the_tags('Tags: ', ', ', '.');?></span></p>
    <p><?php echo get_the_date(); ?></p>
    <p><?php the_excerpt(); ?></p>
</article>
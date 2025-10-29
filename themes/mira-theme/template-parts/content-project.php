<article id="post-<?php the_ID(); ?>" <?php post_class('project-card'); ?>>
  <?php if ( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
  <?php endif; ?>
  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  <div class="excerpt"><?php the_excerpt(); ?></div>
</article>

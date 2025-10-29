<?php
/* Template Name: Demo Front Page */
get_header();
?>

<section class="hero" role="region" aria-label="Hero section">
  <div class="wrap">
    <?php
      // ACF usage: fall back to site title if ACF not present
      $hero_title = function_exists('get_field') ? get_field('hero_title') : '';
      $hero_image = function_exists('get_field') ? get_field('hero_image') : '';
      $intro_text = function_exists('get_field') ? get_field('intro_text') : '';
    ?>
    <div class="hero-inner">
      <h1><?php echo esc_html( $hero_title ?: get_bloginfo('name') ); ?></h1>
      <?php if ( $intro_text ) : ?>
        <div class="hero-intro"><?php echo wp_kses_post( wpautop( $intro_text ) ); ?></div>
      <?php endif; ?>
      <?php if ( $hero_image ): ?>
        <?php $img_url = is_array($hero_image) ? $hero_image['url'] : $hero_image; ?>
        <img src="<?php echo esc_url( $img_url ); ?>" alt="">
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="projects" role="region" aria-label="Projects">
  <div class="wrap">
    <h2>Featured Projects</h2>
    <?php echo do_shortcode('[project_grid]'); // shortcode provided by our plugin ?>
  </div>
</section>

<?php get_footer(); ?>

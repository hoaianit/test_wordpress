<?php get_header(); ?>
<h1>Projects</h1>
<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
    get_template_part('template-parts/content', 'project');
  }
} else {
  echo '<p>No projects found.</p>';
}
?>
<?php get_footer(); ?>

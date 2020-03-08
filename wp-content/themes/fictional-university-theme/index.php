<?php get_header(); ?>
<h1>This is the header area.</h1>

<?php 

  while(have_posts()) {

    the_post(); ?>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
    <hr>

  <?php }

?>

<p>This is the footer area.</p>
<?php get_footer(); ?>
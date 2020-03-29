<?php get_header(); ?>

<?php 

  while(have_posts()) {

    the_post(); ?>

    <div class="page-banner">
      <!-- Video #14 08:30 /images/ocean.jpg -->
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg'); ?>);"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1><!-- Our History -->
        <div class="page-banner__intro">
          <p>REMEMBER TO REPLACE ME LATER.</p><!-- Video #14 -->
        </div>
      </div>  
    </div>

    <div class="container container--narrow page-section">

      <?php
        // echo wp_get_post_parent_id(get_the_ID()); // get the parent ID
        // echo get_the_ID();                        // get the current-page ID

        $pageHasParent = wp_get_post_parent_id(get_the_ID());

        if ($pageHasParent) {
          echo "I am a child page."; ?>
        
          <div class="metabox metabox--position-up metabox--with-home-link">
            <p>
              <a class="metabox__blog-home-link" href="<?php echo get_permalink($pageHasParent);?>">
                <i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($pageHasParent); ?></a>
              <span class="metabox__main"><?php the_title(); ?></span>
            </p>
          </div>

        <?php
        } else {
          echo "I am a parent page.";
        }

      ?>
      
      <!-- Video #14, Link for the Privacy Policy Page is in the footer. -->
      <!-- <div class="page-links">
        <h2 class="page-links__title"><a href="#">About Us</a></h2>
        <ul class="min-list">
          <li class="current_page_item"><a href="#">Our History</a></li>
          <li><a href="#">Our Goals</a></li>
        </ul>
      </div> -->

      <div class="generic-content"><?php the_content(); ?></div>

    </div>

  <?php }

?>

<?php get_footer(); ?>

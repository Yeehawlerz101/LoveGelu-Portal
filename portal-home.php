<?php 
/* Template Name: Portal Home  */ 
?>

<?php get_header(); ?>
<div id="primary" class="content-area">
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
                <main id="main" class="site-main" role="main">
                                <?php
                                // Start the loop.
                                while ( have_posts() ) : the_post();
                                                // Include the page content template.
                                                get_template_part( 'template-parts/content', 'page' );
                                                // If comments are open or we have at least one comment, load up the comment template.
                                                if ( comments_open() || get_comments_number() ) {
                                                                comments_template();
                                                }
                                                // End of the loop.
                                endwhile;
                                ?>





<div class="py-8 px-6 bg-white">
  <div class="container px-4 mx-auto">
    <h2 class="text-2xl font-bold">Welcome,
        <?php 
  global $current_user;
  wp_get_current_user() ;
  echo $current_user->user_login;
?> 👋</h2>
  </div>
</div>


                </main><!-- .site-main -->
                <?php get_sidebar( 'content-bottom' ); ?>
</div><!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
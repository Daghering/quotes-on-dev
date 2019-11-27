<?php get_header(); ?>

<?php if( have_posts() ) :?>

<section id = "quotes-content">

<!-- The WordPress Loop: loads post content  -->

    <?php while( have_posts() ) :
        the_post(); ?>
      
    <div class = "quote-content">
    <i class="fas fa-quote-left"></i>
    <div class = "main-content">
    <div><?php the_content(); ?></div>
    <div><h2><?php the_title(); ?></h2></div>
    </div>
    <i class="fas fa-quote-right"></i>
    </div>

    
    <?php echo get_field('quote_source');?>
    <?php echo get_field('quote_url');?>

    <!-- Loop ends -->
    <?php endwhile;?>
    </section>

    <div><button id ="quote-button">Show Me Another!</button></div>
   

   

   

    <!-- <?php the_posts_navigation();?> -->

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>
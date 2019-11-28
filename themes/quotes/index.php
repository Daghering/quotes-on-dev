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
   
    <div class ="title-url">
    <h2>- <?php the_title(); ?>,
    <a class = "url-links" href = "<?php echo get_post_meta(get_the_id(), '_qod_quote_source_url', true);?>">
    <?php echo get_post_meta(get_the_id(), '_qod_quote_source', true);?></a>
    </h2>
   </div>
    </div>
    <i class="fas fa-quote-right"></i>
    </div>

    
 

    <!-- Loop ends -->
    <?php endwhile;?>
    </section>

    <div><button id ="quote-button">More Quotes!</button></div>
   

   

   

    <!-- <?php the_posts_navigation();?> -->

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>
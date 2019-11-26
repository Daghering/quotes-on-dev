<?php get_header(); ?>

<?php if( have_posts() ) :?>

<section id = "submit-content">

<!-- The WordPress Loop: loads post content  -->

    <?php while( have_posts() ) :
        the_post(); ?>
    <!-- <div class = "quote-content">
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    </div> -->
    
    <!-- Loop ends -->
    <?php endwhile;?>
    <form>
        <input id="quote-title" type="text">
    </form>
    <div><button id ="submit-button">Submit a Quote</button></div>
    </section>

   

    <!-- <?php the_posts_navigation();?> -->

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>
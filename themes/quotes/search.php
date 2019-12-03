<?php get_header(); ?>


<h1 class ="search-title">Search Results for:</h1>

<hr />

<section id = "search-results"> 

<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

        
   <div>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    </div> 
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<section class="search-page">
<p>1 </p> 
<p>2 </p>
<p>Next  </p><i class="fas fa-long-arrow-alt-right"></i>
</section>

</section>


<?php get_footer();?>
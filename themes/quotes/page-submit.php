<?php get_header(); ?>
<section id = "submit-content">
<!-- <i class="fas fa-quote-left"></i>  -->
<div>

<h1>Submit a Quote</h1>

    <div>
        <h3>Author</h3>
        <form>
        <textarea id="quote-author" type="text"></textarea>
    </form>
    </div>
    <div>
    <h3>Quote</h3>
        <form>
        <textarea id="quote-quote" type="text"></textarea>
    </form></div>
    <div>
        <h3>Where do you find this quote?(e.g. book name)</h3>
        <form>
        <textarea id="quote-source" type="text"></textarea>
    </form>
    </div>
    <div>
        <h3>Provide the url of the quote source, if available.</h3>
        <form>
        <textarea id="quote-url" type="text"></textarea>
    </form>
    </div>
    <div><button id ="submit-quote-button">Submit Quote</button></div>
    </div>
    <!-- <i class="fas fa-quote-right"></i> -->
    </section>
    
<?php get_footer();?>
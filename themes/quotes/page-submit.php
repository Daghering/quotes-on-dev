<?php get_header(); ?>

<?php if (is_user_logged_in()) {?>

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
    
    </section>

<?php }

else {?>
    
<section class="login-section">
<h1>Submit a Quote</h1>
 <h2> Sorry, you must be logged in to submit a quote!</h2>
<a href="http://localhost:3002/quotesOnDev/wp-login.php?redirect_to=http%3A%2F%2Flocalhost%2FquotesOnDev%2Fwp-admin%2F&reauth=1">
<h3>Click here to login.</h3></a>
</section>
<?php 
}
?>

<?php get_footer();?>
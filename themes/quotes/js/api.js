(function($){
    

    // New Quote

    $('#quote-button').on('click', function(e){
        e.preventDefault();
        // console.log('herrrrooo')

        $.ajax({
            method: 'GET',
            url: wpApiSettings.root + 'wp/v2/posts'
        }).done(function(data){
            
            //Your loop goes here
            //get length of data object, create random number between 0 and total
            // length of the array. make sure to round to a whole number.

            const randomNumber = Math.floor(Math.random() * 10); 
            const title = data[randomNumber].title.rendered
            const content = data[randomNumber].content.rendered

            $('#quotes-content').html(`  <div class = "quote-content">
            <i class="fas fa-quote-left"></i>
            <div class = "main-content">
            <div>${content}</div>
            <div><h2>${title}</h2></div>
            </div>
            <i class="fas fa-quote-right"></i>
            </div>`)

        })

    })
    
    $("#submit-button").on("click", function(e) {
        const $title = $("#quote-title").val()
        

        const data = {
            title: $title
        }

        $.ajax({
            method:'POST',
            url:wpApiSettings.root + 'wp/v2/posts',
            data, 
            beforeSend: function(xhr) {
            xhr.setRequestHeader('X-WP-Nonce', wpApiSettings.nonce)
            }
        })
    })

})(jQuery);


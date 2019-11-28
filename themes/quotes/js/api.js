(function($) {
  // New Quote

  $('#quote-button').on('click', function(e) {
    e.preventDefault();

    $.ajax({
      method: 'GET',
      url: qod_data.root_url + '/wp-json/quotes/v1/post'
    }).done(function(data) {
      //Your loop goes here
      //get length of data object, create random number between 0 and total
      // length of the array. make sure to round to a whole number.

      const randomNumber = Math.floor(Math.random() * data.length);
      const title = data[randomNumber].title;
      const content = data[randomNumber].content;
      const source = data[randomNumber].quotesSource;
      const url = data[randomNumber].quotesURL;

      $('#quotes-content').html(`  <div class = "quote-content">
            <i class="fas fa-quote-left"></i>
            <div class = "main-content">
            <div>${content}</div>
            <h2>- ${title}, <a class = "url-links" href = "${source}";?>${url}</a> </h2>
            </div>
            <i class="fas fa-quote-right"></i>
            </div>`);
    });
  });

  $('#submit-quote-button').on('click', function(e) {
    const $title = $('#quote-author').val();
    const $content = $('#quote-quote').val();
    const $url = $('#quote-url').val();
    const $source = $('#quote-source').val();

    const data = {
      title: $title,
      content: $content,
      _qod_quote_source_url: $url,
      _qod_quote_source: $source
    };

    $.ajax({
      method: 'POST',
      url: qod_data.root_url + '/wp-json/wp/v2/posts',
      data,
      beforeSend: function(xhr) {
        xhr.setRequestHeader('X-WP-NONCE', qod_data.nonce);
      }
    });
  });

})(jQuery);

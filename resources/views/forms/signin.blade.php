<form action="{{ route('login') }}" method="POST" class="cd-signin-modal__form" id="login-form">@csrf
  <div class="newsletter-card__feedback newsletter-card__feedback--success margin-top-sm" role="alert"> <!-- /.newsletter-card__feedback--is-visible -->
    Success!
  </div><!-- /.newsletter-card__feedback -->
  <p class="cd-signin-modal__fieldset">
    <label
      class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace"
      for="signin-email"
      >E-mail</label
    >
    <input
      class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
      id="signin-email"
      name="email"
      type="email"
      placeholder="E-mail"
    />
    <span class="cd-signin-modal__error">Error message here!</span>
  </p>

  <p class="cd-signin-modal__fieldset">
    <label
      class="cd-signin-modal__label cd-signin-modal__label--password cd-signin-modal__label--image-replace"
      for="signin-password"
      >Password</label
    >
    <input
      class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
      id="signin-password"
      name="password"
      type="text"
      placeholder="Password"
    />
    <span class="cd-signin-modal__error">Error message here!</span>
    <a
      href="#0"
      class="cd-signin-modal__hide-password js-hide-password"
      >Hide</a
    >
    <span class="cd-signin-modal__error">Error message here!</span>
  </p>

  <p class="cd-signin-modal__fieldset">
    <input
      type="checkbox"
      id="remember-me"
      name="remember"
      checked
      class="cd-signin-modal__input"
    />
    <label for="remember-me">Remember me</label>
  </p>

  <p class="cd-signin-modal__fieldset">
    <input
      class="cd-signin-modal__input cd-signin-modal__input--full-width"
      type="submit"
      value="Login"
    />
  </p>
</form>

<script>
  (function () {
    // login form
    $(document).on('submit', '#login-form', function(e){
      e.preventDefault();
      var $this = $(this);
      var url = $this.attr('action');
      var method = $this.attr('method');

      var email = $('#signin-email').val();
      var password = $('#signin-password').val();
      var remember = $('#remember-me').val();

      var $feedback = $this.find('.newsletter-card__feedback');

      $.ajax({
        url: url,
        type: method,
        dataType: 'JSON',
        data: $this.serialize(),
        success:function(response){
          // console.log(response);

          if (response.status === 'success') {
            $feedback.removeClass('newsletter-card__feedback--error').addClass('newsletter-card__feedback--success newsletter-card__feedback--is-visible').html('<strong>Success!</strong> ' + response.message);

            // reset
            $this[0].reset();
            $('.cd-signin-modal__error').removeClass('cd-signin-modal__error--is-visible');
            $('input').removeClass('cd-signin-modal__input--has-error');

            // redirect
            window.location.replace(response.data.redirect_url);
          }else{
            $feedback.removeClass('newsletter-card__feedback--success').addClass('newsletter-card__feedback--error newsletter-card__feedback--is-visible').html(response.message);

            $('.cd-signin-modal__error').removeClass('cd-signin-modal__error--is-visible');
            $('input').removeClass('cd-signin-modal__input--has-error');
          }
        },
        error: function(response){
          console.log(response.responseText);
          var jsonResponse = response.responseJSON;
          var errors = jsonResponse.errors;
          var errorsHTML = '';

          console.log('ERROR', response.responseText);

          $('.cd-signin-modal__error').removeClass('cd-signin-modal__error--is-visible');
          $('input').removeClass('cd-signin-modal__input--has-error');

          $.each( errors, function( key, value ) {
            errorsHTML += value[0] + '</br>';

            $('#signin-'+key).addClass('cd-signin-modal__input--has-error');

            $('#signin-'+key+' + .cd-signin-modal__error').addClass('cd-signin-modal__error--is-visible').html(value[0]);

          });

        }
        });
    });
  })();
</script>
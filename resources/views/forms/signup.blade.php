<form action="{{ route('register') }}" method="POST" class="cd-signin-modal__form" id="sign-up-form">@csrf
  <div class="newsletter-card__feedback newsletter-card__feedback--success margin-top-sm" role="alert"> <!-- /.newsletter-card__feedback--is-visible -->
    Success!
  </div><!-- /.newsletter-card__feedback -->
  <p class="cd-signin-modal__fieldset">
    <label
      class="cd-signin-modal__label cd-signin-modal__label--username cd-signin-modal__label--image-replace"
      for="username"
      >Username</label
    >
    <input
      class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
      id="username"
      name="username"
      type="text"
      placeholder="Username"
    />
    <span class="cd-signin-modal__error">Error message here!</span>
  </p>

  <p class="cd-signin-modal__fieldset">
    <label
      class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace"
      for="email"
      >E-mail</label
    >
    <input
      class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
      id="email"
      name="email"
      type="email"
      placeholder="E-mail"
    />
    <span class="cd-signin-modal__error">Error message here!</span>
  </p>

  <p class="cd-signin-modal__fieldset">
    <label
      class="cd-signin-modal__label cd-signin-modal__label--password cd-signin-modal__label--image-replace"
      for="password"
      >Password</label
    >
    <input
      class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
      id="password"
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
      id="terms"
      name="terms"
      class="cd-signin-modal__input"
    />
    <label for="terms"
      >I agree to the <a href="#0">Terms</a></label
    >
  </p>

  <p class="cd-signin-modal__fieldset">
    <input
      class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding"
      type="submit"
      value="Create account"
    />
  </p>
</form>

<script>
  (function(){
    // registration form
    $(document).on('submit', '#sign-up-form', function(e){
      e.preventDefault();
      var $this = $(this);
      var url = $this.attr('action');
      var method = $this.attr('method');

      var username = $('#username').val();
      var email = $('#email').val();
      var password = $('#password').val();
      var terms = $('#terms').val();

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
          }
        },
        error: function(response){
          var jsonResponse = response.responseJSON;
          var errors = jsonResponse.errors;
          var errorsHTML = '';

          // console.log(errors);

          $('.cd-signin-modal__error').removeClass('cd-signin-modal__error--is-visible');
          $('input').removeClass('cd-signin-modal__input--has-error');

          $.each( errors, function( key, value ) {
            errorsHTML += value[0] + '</br>';

            if (key === 'terms') {
              $feedback.removeClass('newsletter-card__feedback--success').addClass('newsletter-card__feedback--error newsletter-card__feedback--is-visible').html('<strong>Error</strong> </br>'+ value[0]);
            }else{
              $('#'+key).addClass('cd-signin-modal__input--has-error');

              $('#'+key+' + .cd-signin-modal__error').addClass('cd-signin-modal__error--is-visible').html(value[0]);
            }

          });

        }
        });
    });
  })();
</script>
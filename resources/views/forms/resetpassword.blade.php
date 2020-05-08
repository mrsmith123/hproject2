<p class="cd-signin-modal__message">
  Lost your password? Please enter your email address. You will
  receive a link to create a new password.
</p>

<form action="{{ route('password.email') }}" method="POST" class="cd-signin-modal__form" id="reset-password-form">@csrf
  <div class="newsletter-card__feedback newsletter-card__feedback--success margin-top-sm" role="alert"> <!-- /.newsletter-card__feedback--is-visible -->
    Success!
  </div><!-- /.newsletter-card__feedback -->
  <p class="cd-signin-modal__fieldset">
    <label
      class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace"
      for="reset-email"
      >E-mail</label
    >
    <input
      class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
      id="reset-email"
      name="email"
      type="email"
      placeholder="E-mail"
    />
    <span class="cd-signin-modal__error">Error message here!</span>
  </p>

  <p class="cd-signin-modal__fieldset">
    <input
      class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding"
      type="submit"
      value="Reset password"
    />
  </p>
</form>
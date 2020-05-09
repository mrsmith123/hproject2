<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <script>
    if('CSS' in window && CSS.supports('color', 'var(--color-var)')) {
      document.write('<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">');
    } else {
      document.write('<link rel="stylesheet" href="{{ asset('assets/css/style-fallback.css') }}">');
    }
  </script>
  <noscript>
    <link rel="stylesheet" href="{{ asset('assets/css/style-fallback.css') }}">
  </noscript>
  <title>Title</title>
</head><link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">

  <header class="mega-nav mega-nav--mobile mega-nav--desktop@md position-relative js-mega-nav hide-nav js-hide-nav js-hide-nav--main">
    <div class="mega-nav__container">
      <!-- 👇 logo -->
      <a href="#0" class="mega-nav__logo">
        <svg width="104" height="30" viewBox="0 0 104 30">
          <title>Go to homepage</title>
          <path d="M37.54 24.08V3.72h4.92v16.37h8.47v4zM60.47 24.37a7.82 7.82 0 01-5.73-2.25 8.36 8.36 0 01-2-5.62 8.32 8.32 0 012.08-5.71 8 8 0 015.64-2.18 8.07 8.07 0 015.68 2.2 8.49 8.49 0 012 5.69 8.63 8.63 0 01-1.78 5.38 7.6 7.6 0 01-5.89 2.49zm0-3.67c2.42 0 2.73-3 2.73-4.23s-.31-4.26-2.73-4.26-2.79 3-2.79 4.26.32 4.23 2.82 4.23zM95.49 24.37a7.82 7.82 0 01-5.73-2.25 8.36 8.36 0 01-2-5.62 8.32 8.32 0 012.08-5.71 8.4 8.4 0 0111.31 0 8.43 8.43 0 012 5.69 8.6 8.6 0 01-1.77 5.38 7.6 7.6 0 01-5.89 2.51zm0-3.67c2.42 0 2.73-3 2.73-4.23s-.31-4.26-2.73-4.26-2.8 3-2.8 4.26.31 4.23 2.83 4.23zM77.66 30c-5.74 0-7-3.25-7.23-4.52l4.6-.26c.41.91 1.17 1.41 2.76 1.41a2.45 2.45 0 002.82-2.53v-2.68a7 7 0 01-1.7 1.75 6.12 6.12 0 01-5.85-.08c-2.41-1.37-3-4.25-3-6.66 0-.89.12-3.67 1.45-5.42a5.67 5.67 0 014.64-2.4c1.2 0 3 .25 4.46 2.82V8.81h4.85v15.33a5.2 5.2 0 01-2.12 4.32A9.92 9.92 0 0177.66 30zm.15-9.66c2.53 0 2.81-2.69 2.81-3.91s-.31-4-2.81-4-2.81 2.8-2.81 4 .27 3.91 2.81 3.91zM55.56 3.72h9.81v2.41h-9.81z" fill="var(--color-contrast-higher)" />
          <circle cx="15" cy="15" r="15" fill="var(--color-primary)" />
        </svg>
      </a>

      <!-- 👇 icon buttons --mobile -->
      <div class="mega-nav__icon-btns mega-nav__icon-btns--mobile">
        @guest
        <a href="#0" class="mega-nav__icon-btn js-signin-modal-trigger" data-signin="login">
          <svg class="icon" viewBox="0 0 24 24" class="js-signin-modal-trigger" data-signin="login">
            <title>Login</title>
            <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
              <circle cx="12" cy="6" r="4" />
              <path d="M12 13a8 8 0 00-8 8h16a8 8 0 00-8-8z" />
            </g>
          </svg>
        </a>
        @endguest
        @auth
        <a href="#0" class="mega-nav__icon-btn">
          <svg class="icon" viewBox="0 0 24 24">
            <title>Go to account settings</title>
            <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
              <circle cx="12" cy="6" r="4" />
              <path d="M12 13a8 8 0 00-8 8h16a8 8 0 00-8-8z" />
            </g>
          </svg>
        </a>
        @endauth

        <button class="reset mega-nav__icon-btn mega-nav__icon-btn--search js-tab-focus" aria-label="Toggle search" aria-controls="mega-nav-search">
          <svg class="icon" viewBox="0 0 24 24">
            <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
              <path d="M4.222 4.222l15.556 15.556" />
              <path d="M19.778 4.222L4.222 19.778" />
              <circle cx="9.5" cy="9.5" r="6.5" />
            </g>
          </svg>
        </button>

        <button class="reset mega-nav__icon-btn mega-nav__icon-btn--menu js-tab-focus" aria-label="Toggle menu" aria-controls="mega-nav-navigation">
          <svg class="icon" viewBox="0 0 24 24">
            <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
              <path d="M1 6h22" />
              <path d="M1 12h22" />
              <path d="M1 18h22" />
            </g>
          </svg>
        </button>
      </div>

      <div class="mega-nav__nav js-mega-nav__nav" id="mega-nav-navigation" role="navigation" aria-label="Main">
        <div class="mega-nav__nav-inner">
          <ul class="mega-nav__items">
            <!-- 👇 layout 2 -> multiple lists -->
            <li class="mega-nav__item js-mega-nav__item">
              <button class="reset mega-nav__control js-mega-nav__control js-tab-focus">
                Tags
                <i class="mega-nav__arrow-icon" aria-hidden="true">
                  <svg class="icon" viewBox="0 0 16 16">
                    <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
                      <path d="M2 2l12 12" />
                      <path d="M14 2L2 14" />
                    </g>
                  </svg>
                </i>
              </button>

              <div class="mega-nav__sub-nav-wrapper">
                <div class="mega-nav__sub-nav mega-nav__sub-nav--layout-2">
                  <ul class="mega-nav__sub-items">
                    <li class="mega-nav__label">Clothing</li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">All Clothing</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Coats</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Dresses</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Jackets</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Jeans</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Jackets</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Jeans</a></li>
                  </ul>

                  <ul class="mega-nav__sub-items">
                    <li class="mega-nav__label">Shoes</li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">All Shoes</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Trainers</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Heels</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Boots</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Ankle Boots</a></li>
                  </ul>

                  <ul class="mega-nav__sub-items">
                    <li class="mega-nav__label">Jackets</li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">All Shoes</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Trainers</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Heels</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Boots</a></li>
                    <li class="mega-nav__sub-item"><a href="#0" class="mega-nav__sub-link">Ankle Boots</a></li>
                  </ul>

                  <div class="mega-nav__card width-100% max-width-xs margin-x-auto">
                    <a href="#0" class="block radius-lg overflow-hidden">
                      <figure class="media-wrapper media-wrapper--4:3">
                        <img class="block width-100%" src="{{ asset('assets/img/mega-site-nav-img-1.jpg') }}" alt="Image description">
                      </figure>
                    </a>

                    <div class="margin-top-sm">
                      <h3 class="text-base"><a href="#0" class="mega-nav__card-title">Browse all →</a></h3>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <!-- 👇 link -->
            <li class="mega-nav__item">
              <a href="http://127.0.0.1:8000/" class="mega-nav__control">Home</a>
            </li>
            <li class="mega-nav__item">
              <a href="http://127.0.0.1:8000/mangas" class="mega-nav__control">Mangas</a>
            </li>
          </ul>

          <ul class="mega-nav__items js-main-nav custom-mega-nav__items-mobile">
            <!-- 👇 icon buttons --desktop -->
            <li class="mega-nav__icon-btns mega-nav__icon-btns--desktop">
              @guest
              <div class="mega-nav__icon-btn dropdown__wrapper inline-block js-signin-modal-trigger">
                <a href="#0" class="color-inherit flex height-100% width-100% flex-center" data-signin="login">
                  <svg class="icon" viewBox="0 0 24 24" data-signin="login">
                    <title>Login</title>
                    <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
                      <circle cx="12" cy="6" r="4" />
                      <path d="M12 13a8 8 0 00-8 8h16a8 8 0 00-8-8z" />
                    </g>
                  </svg>
                </a>
              </div>
              @endguest

              @auth
              <div class="dropdown js-dropdown">
                <div class="mega-nav__icon-btn dropdown__wrapper inline-block">
                  <a href="#0" class="color-inherit flex height-100% width-100% flex-center dropdown__trigger">
                    <svg class="icon" viewBox="0 0 24 24">
                      <title>Go to account settings</title>
                      <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
                        <circle cx="12" cy="6" r="4" />
                        <path d="M12 13a8 8 0 00-8 8h16a8 8 0 00-8-8z" />
                      </g>
                    </svg>
                  </a>

                  <ul class="dropdown__menu" aria-label="submenu">
                    <li><a href="{{ route('profile') }}" class="dropdown__item">Profile</a></li>
                    <li><a href="upload.html" class="dropdown__item">Upload</a></li>
                    <li><a href="#0" class="dropdown__item">Scrape</a></li>
                    <li class="dropdown__separator" role="separator"></li>
                    <li><a href="#0" class="dropdown__item">Account Settings</a></li>
                    <li><a href="#0" class="dropdown__item">Log out</a></li>
                  </ul>
                </div>
              </div>
              @endauth

              <button class="reset mega-nav__icon-btn mega-nav__icon-btn--search js-tab-focus" aria-label="Toggle search" aria-controls="mega-nav-search">
                <svg class="icon" viewBox="0 0 24 24">
                  <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
                    <path d="M4.222 4.222l15.556 15.556" />
                    <path d="M19.778 4.222L4.222 19.778" />
                    <circle cx="9.5" cy="9.5" r="6.5" />
                  </g>
                </svg>
              </button>
            </li>

            @guest
            <!-- 👇 button -->
            <li class="mega-nav__item js-signin-modal-trigger custom-mega-nav__item-column">
              <a href="#0" class="btn btn--primary mega-nav__btn" data-signin="signup">Register</a>
            </li>
            <li class="mega-nav__item js-signin-modal-trigger custom-mega-nav__item-column">
              <a href="#0" class="btn btn--subtle mega-nav__btn" data-signin="login">Login</a>
            </li>
            @endguest

            @auth
            <li class="mega-nav__item">
              <a href="{{ url('/logout') }}" class="btn btn--subtle mega-nav__btn">Log out</a>
            </li>
            @endauth
          </ul>
        </div>
      </div>

      <!-- 👇 search -->
      <div class="mega-nav__search js-mega-nav__search" id="mega-nav-search">
        <div class="mega-nav__search-inner">
          <input class="form-control width-100%" type="reset search" name="megasite-search" id="megasite-search" placeholder="Search..." aria-label="Search">
          <div class="margin-top-lg">
            <p class="mega-nav__label">Quick Links</p>
            <ul>
              <li><a href="#0" class="mega-nav__quick-link">Find a Store</a></li>
              <li><a href="#0" class="mega-nav__quick-link">Your Orders</a></li>
              <li><a href="#0" class="mega-nav__quick-link">Documentation</a></li>
              <li><a href="#0" class="mega-nav__quick-link">Questions &amp; Answers</a></li>
              <li><a href="#0" class="mega-nav__quick-link">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

<body>
  @yield('content')

  @guest
  <!-- SIGN IN MODAL START -->
    <div class="cd-signin-modal js-signin-modal">
      <!-- this is the entire modal form, including the background -->
      <div class="cd-signin-modal__container">
        <!-- this is the container wrapper -->
        <ul
          class="cd-signin-modal__switcher js-signin-modal-switcher js-signin-modal-trigger"
        >
          <li>
            <a href="#0" data-signin="login" data-type="login">Sign in</a>
          </li>
          <li>
            <a href="#0" data-signin="signup" data-type="signup">New account</a>
          </li>
        </ul>

        <div
          class="cd-signin-modal__block js-signin-modal-block"
          data-type="login"
        >
          <!-- log in form -->
          <div id="ajax-signin-form" class="custom-ajax-frame-loader" data-custom="ajax" data-loaded="false" data-url="{{ route('login.ajax') }}">Loading...</div><!-- /#ajax-signin-form -->

          <p class="cd-signin-modal__bottom-message js-signin-modal-trigger">
            <a href="#0" data-signin="reset">Forgot your password?</a>
          </p>
        </div>
        <!-- cd-signin-modal__block -->

        <div
          class="cd-signin-modal__block js-signin-modal-block"
          data-type="signup"
        >
          <!-- sign up form -->
          <div id="ajax-signup-form" class="custom-ajax-frame-loader" data-custom="ajax" data-loaded="false" data-url="{{ route('register.ajax') }}">Loading...</div><!-- /#ajax-signup-form -->
        </div>
        <!-- cd-signin-modal__block -->

        <div
          class="cd-signin-modal__block js-signin-modal-block"
          data-type="reset"
        >
          <!-- reset password form -->
          <div id="ajax-resetpassword-form" class="custom-ajax-frame-loader" data-custom="ajax" data-loaded="false" data-url="{{ route('password.reset.ajax') }}">Loading...</div><!-- /#ajax-resetpassword-form -->

          <p class="cd-signin-modal__bottom-message js-signin-modal-trigger">
            <a href="#0" data-signin="login">Back to log-in</a>
          </p>
        </div>
        <!-- cd-signin-modal__block -->
        <a href="#0" class="cd-signin-modal__close js-close">Close</a>
      </div>
      <!-- cd-signin-modal__container -->
    </div>
    <!-- cd-signin-modal -->
  <!-- SIGN IN MODAL START -->
  @endguest

</body>

<footer class="footer-v4 padding-y-lg">
  <div class="container max-width-lg">
    <nav class="footer-v4__nav">
      <ul class="footer-v4__nav-list">
        <li class="footer-v4__nav-item"><a href="http://127.0.0.1:8000/about">About</a></li>
      </ul>
    </nav>

    <div class="footer-v4__logo">
      <a href="#0">
        <svg width="104" height="30" viewBox="0 0 104 30"><title>Go to homepage</title><path d="M37.54 24.08V3.72h4.92v16.37h8.47v4zM60.47 24.37a7.82 7.82 0 01-5.73-2.25 8.36 8.36 0 01-2-5.62 8.32 8.32 0 012.08-5.71 8 8 0 015.64-2.18 8.07 8.07 0 015.68 2.2 8.49 8.49 0 012 5.69 8.63 8.63 0 01-1.78 5.38 7.6 7.6 0 01-5.89 2.49zm0-3.67c2.42 0 2.73-3 2.73-4.23s-.31-4.26-2.73-4.26-2.79 3-2.79 4.26.32 4.23 2.82 4.23zM95.49 24.37a7.82 7.82 0 01-5.73-2.25 8.36 8.36 0 01-2-5.62 8.32 8.32 0 012.08-5.71 8.4 8.4 0 0111.31 0 8.43 8.43 0 012 5.69 8.6 8.6 0 01-1.77 5.38 7.6 7.6 0 01-5.89 2.51zm0-3.67c2.42 0 2.73-3 2.73-4.23s-.31-4.26-2.73-4.26-2.8 3-2.8 4.26.31 4.23 2.83 4.23zM77.66 30c-5.74 0-7-3.25-7.23-4.52l4.6-.26c.41.91 1.17 1.41 2.76 1.41a2.45 2.45 0 002.82-2.53v-2.68a7 7 0 01-1.7 1.75 6.12 6.12 0 01-5.85-.08c-2.41-1.37-3-4.25-3-6.66 0-.89.12-3.67 1.45-5.42a5.67 5.67 0 014.64-2.4c1.2 0 3 .25 4.46 2.82V8.81h4.85v15.33a5.2 5.2 0 01-2.12 4.32A9.92 9.92 0 0177.66 30zm.15-9.66c2.53 0 2.81-2.69 2.81-3.91s-.31-4-2.81-4-2.81 2.8-2.81 4 .27 3.91 2.81 3.91zM55.56 3.72h9.81v2.41h-9.81z" fill="var(--color-contrast-higher)"/><circle cx="15" cy="15" r="15" fill="var(--color-primary)"/></svg>
      </a>
    </div>

    <p class="footer-v4__print">&copy; Copyright. All rights reserved.</p>

    <div class="footer-v4__socials">
      <a href="#0">
        <svg class="icon" viewBox="0 0 16 16"><title>Follow us on Twitter</title><g><path d="M16,3c-0.6,0.3-1.2,0.4-1.9,0.5c0.7-0.4,1.2-1,1.4-1.8c-0.6,0.4-1.3,0.6-2.1,0.8c-0.6-0.6-1.5-1-2.4-1 C9.3,1.5,7.8,3,7.8,4.8c0,0.3,0,0.5,0.1,0.7C5.2,5.4,2.7,4.1,1.1,2.1c-0.3,0.5-0.4,1-0.4,1.7c0,1.1,0.6,2.1,1.5,2.7 c-0.5,0-1-0.2-1.5-0.4c0,0,0,0,0,0c0,1.6,1.1,2.9,2.6,3.2C3,9.4,2.7,9.4,2.4,9.4c-0.2,0-0.4,0-0.6-0.1c0.4,1.3,1.6,2.3,3.1,2.3 c-1.1,0.9-2.5,1.4-4.1,1.4c-0.3,0-0.5,0-0.8,0c1.5,0.9,3.2,1.5,5,1.5c6,0,9.3-5,9.3-9.3c0-0.1,0-0.3,0-0.4C15,4.3,15.6,3.7,16,3z"></path></g></svg>
      </a>

      <a href="#0">
        <svg class="icon" viewBox="0 0 16 16"><title>Follow us on Youtube</title><g><path d="M15.8,4.8c-0.2-1.3-0.8-2.2-2.2-2.4C11.4,2,8,2,8,2S4.6,2,2.4,2.4C1,2.6,0.3,3.5,0.2,4.8C0,6.1,0,8,0,8 s0,1.9,0.2,3.2c0.2,1.3,0.8,2.2,2.2,2.4C4.6,14,8,14,8,14s3.4,0,5.6-0.4c1.4-0.3,2-1.1,2.2-2.4C16,9.9,16,8,16,8S16,6.1,15.8,4.8z M6,11V5l5,3L6,11z"></path></g></svg>
      </a>

      <a href="#0">
        <svg class="icon" viewBox="0 0 16 16"><title>Follow us on Github</title><g><path  d="M8,0.2c-4.4,0-8,3.6-8,8c0,3.5,2.3,6.5,5.5,7.6 C5.9,15.9,6,15.6,6,15.4c0-0.2,0-0.7,0-1.4C3.8,14.5,3.3,13,3.3,13c-0.4-0.9-0.9-1.2-0.9-1.2c-0.7-0.5,0.1-0.5,0.1-0.5 c0.8,0.1,1.2,0.8,1.2,0.8C4.4,13.4,5.6,13,6,12.8c0.1-0.5,0.3-0.9,0.5-1.1c-1.8-0.2-3.6-0.9-3.6-4c0-0.9,0.3-1.6,0.8-2.1 c-0.1-0.2-0.4-1,0.1-2.1c0,0,0.7-0.2,2.2,0.8c0.6-0.2,1.3-0.3,2-0.3c0.7,0,1.4,0.1,2,0.3c1.5-1,2.2-0.8,2.2-0.8 c0.4,1.1,0.2,1.9,0.1,2.1c0.5,0.6,0.8,1.3,0.8,2.1c0,3.1-1.9,3.7-3.7,3.9C9.7,12,10,12.5,10,13.2c0,1.1,0,1.9,0,2.2 c0,0.2,0.1,0.5,0.6,0.4c3.2-1.1,5.5-4.1,5.5-7.6C16,3.8,12.4,0.2,8,0.2z"></path></g></svg>
      </a>
    </div>
  </div>
  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  @guest
  <script>
    (function(){

      // event handler for clicking any trigger for modal forms
      $(document).on('click', '[data-signin]', function () {
        var $selector = null;
        var $this = $(this);
        var type = $this.data('signin');

        switch (type) {
          case 'login':
            $selector = $('#ajax-signin-form');
            break;
          case 'signup':
            $selector = $('#ajax-signup-form');
            break;
          case 'reset':
            $selector = $('#ajax-resetpassword-form');
            break;
          default:
            return;
            break;
        }
        showDynamicView($selector);
      });

      // watch for keydown
      $(document).on('keydown', function(event){
        // check if pressed on ESC key
        if (event.which === 27) {
          resetForms();
        }
      });

      // reset form when modal is clicked
      $(document).on('click', '.js-signin-modal', function(event){
        // if not the modal, then just do nothing
        if (event.target !== this){
          return;
        }
        // else reset forms
        resetForms();
      });

      // resets form inputs, feedbacks, input errors
      function resetForms(){
        $('form').trigger('reset');
        $('.newsletter-card__feedback').removeClass('newsletter-card__feedback--is-visible');
        $('.cd-signin-modal__error').removeClass('cd-signin-modal__error--is-visible');
        $('input').removeClass('cd-signin-modal__input--has-error');
      }

      // show dynamic view like forms
      function showDynamicView($element) {
        var loaded = $element.data('loaded');
        var url = $element.data('url');

        // if true, don't reload
        if (loaded == 'true') {
          return;
        }

        $element.load( url, function(response, status, xhr) {
          var $this = $(this);
          $this.removeClass('custom-ajax-frame-loader');
        });
        $element.data('loaded', 'true');

      }

    })();
  </script>
  @endguest
</footer>

</html>
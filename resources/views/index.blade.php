@extends('layouts.app')
@section('content')

<div class="pre-header padding-y-xs js-pre-header">
  <div class="container max-width-lg position-relative">
    <div class="text-component text-sm padding-right-lg">
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo vero necessitatibus dolores quidem fugiat! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo vero necessitatibus dolores quidem fugiat! <a href="#0" class="color-inherit text-underline">Learn more</a></p>
    </div>

    <button class="reset pre-header__close-btn js-pre-header__close-btn">
      <svg class="icon" viewBox="0 0 16 16"><title>Close header banner</title><g stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"><line x1="13.5" y1="2.5" x2="2.5" y2="13.5"></line><line x1="2.5" y1="2.5" x2="13.5" y2="13.5"></line></g></svg>
    </button>
  </div>
</div>

<section class="margin-top-md">
<div class="drag-gallery js-drag-gallery container max-width-adaptive-lg">
  <ul class="drag-gallery__list gap-md">
    <li class="drag-gallery__item">
      <div class="card">
        <figure class="card__img">
          <img src="{{ asset('assets/img/team-img-5.jpg') }}" alt="Card preview img">
        </figure>
      
        <div class="card__content">
          <div class="text-component">
            <h4>Title of the Card</h4>
            <p class="text-sm color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit.</p>
          </div>

          <div class="author author--meta margin-top-md">
            <a href="#0" class="author__img-wrapper">
              <img src="{{ asset('assets/img/author-img-1.jpg') }}" alt="Author picture">
            </a>
          
            <div class="author__content text-component v-space-xxs">
              <h4 class="text-base"><a href="#0" rel="author">Olivia Gribben</a></h4>
              <p class="text-sm color-contrast-medium"><time>May 15</time> &mdash; 5 min read</p>
            </div>
          </div>
          
        </div>
      </div>
    </li>

    <li class="drag-gallery__item">
      <div class="card">
        <figure class="card__img">
          <img src="{{ asset('assets/img/team-img-5.jpg') }}" alt="Card preview img">
        </figure>
      
        <div class="card__content">
          <div class="text-component">
            <h4>Title of the Card</h4>
            <p class="text-sm color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit.</p>
          </div>

          <div class="author author--meta margin-top-md">
            <a href="#0" class="author__img-wrapper">
              <img src="{{ asset('assets/img/author-img-1.jpg') }}" alt="Author picture">
            </a>
          
            <div class="author__content text-component v-space-xxs">
              <h4 class="text-base"><a href="#0" rel="author">Olivia Gribben</a></h4>
              <p class="text-sm color-contrast-medium"><time>May 15</time> &mdash; 5 min read</p>
            </div>
          </div>
          
        </div>
      </div>
    </li>

    <li class="drag-gallery__item">
      <div class="card">
        <figure class="card__img">
          <img src="{{ asset('assets/img/team-img-5.jpg') }}" alt="Card preview img">
        </figure>
      
        <div class="card__content">
          <div class="text-component">
            <h4>Title of the Card</h4>
            <p class="text-sm color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit.</p>
          </div>

          <div class="author author--meta margin-top-md">
            <a href="#0" class="author__img-wrapper">
              <img src="{{ asset('assets/img/author-img-1.jpg') }}" alt="Author picture">
            </a>
          
            <div class="author__content text-component v-space-xxs">
              <h4 class="text-base"><a href="#0" rel="author">Olivia Gribben</a></h4>
              <p class="text-sm color-contrast-medium"><time>May 15</time> &mdash; 5 min read</p>
            </div>
          </div>

        </div>
      </div>
    </li>

    <li class="drag-gallery__item">
      <div class="card">
        <figure class="card__img">
          <img src="{{ asset('assets/img/team-img-5.jpg') }}" alt="Card preview img">
        </figure>
      
        <div class="card__content">
          <div class="text-component">
            <h4>Title of the Card</h4>
            <p class="text-sm color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit.</p>
          </div>

          <div class="author author--meta margin-top-md">
            <a href="#0" class="author__img-wrapper">
              <img src="{{ asset('assets/img/author-img-1.jpg') }}" alt="Author picture">
            </a>
          
            <div class="author__content text-component v-space-xxs">
              <h4 class="text-base"><a href="#0" rel="author">Olivia Gribben</a></h4>
              <p class="text-sm color-contrast-medium"><time>May 15</time> &mdash; 5 min read</p>
            </div>
          </div>

        </div>
      </div>
    </li>

    <li class="drag-gallery__item">
      <div class="card">
        <figure class="card__img">
          <img src="{{ asset('assets/img/team-img-5.jpg') }}" alt="Card preview img">
        </figure>
      
        <div class="card__content">
          <div class="text-component">
            <h4>Title of the Card</h4>
            <p class="text-sm color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit.</p>
          </div>

          <div class="author author--meta margin-top-md">
            <a href="#0" class="author__img-wrapper">
              <img src="{{ asset('assets/img/author-img-1.jpg') }}" alt="Author picture">
            </a>
          
            <div class="author__content text-component v-space-xxs">
              <h4 class="text-base"><a href="#0" rel="author">Olivia Gribben</a></h4>
              <p class="text-sm color-contrast-medium"><time>May 15</time> &mdash; 5 min read</p>
            </div>
          </div>
          
        </div>
      </div>
    </li>
    
  </ul>
  <div aria-hidden="true" class="drag-gallery__gesture-hint"></div>
</div>
</section>

<section class="margin-top-xs">
  <div class="container max-width-adaptive-lg">
<ul class="grid-auto-md gap-md">

  <li><div class="card">
    <figure class="card__img">
      <img src="{{ asset('assets/img/team-img-5.jpg') }}" alt="Card preview img">
    </figure>
    <div class="card__content">
      <div class="text-component">
        <h4>Title of the Card</h4>
        <p class="text-sm color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
    </div>
  </li>

  <li><div class="card">
    <figure class="card__img">
      <img src="{{ asset('assets/img/team-img-5.jpg') }}" alt="Card preview img">
    </figure>
    <div class="card__content">
      <div class="text-component">
        <h4>Title of the Card</h4>
        <p class="text-sm color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
    </div>
  </li>

  <li><div class="card">
    <figure class="card__img">
      <img src="{{ asset('assets/img/team-img-5.jpg') }}" alt="Card preview img">
    </figure>
    <div class="card__content">
      <div class="text-component">
        <h4>Title of the Card</h4>
        <p class="text-sm color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
    </div>
  </li>

  <li><div class="card">
    <figure class="card__img">
      <img src="{{ asset('assets/img/team-img-5.jpg') }}" alt="Card preview img">
    </figure>
    <div class="card__content">
      <div class="text-component">
        <h4>Title of the Card</h4>
        <p class="text-sm color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
    </div>
  </li>

  <li><div class="card">
    <figure class="card__img">
      <img src="{{ asset('assets/img/team-img-5.jpg') }}" alt="Card preview img">
    </figure>
    <div class="card__content">
      <div class="text-component">
        <h4>Title of the Card</h4>
        <p class="text-sm color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
    </div>
  </li>

  <li><div class="card">
    <figure class="card__img">
      <img src="{{ asset('assets/img/team-img-5.jpg') }}" alt="Card preview img">
    </figure>
    <div class="card__content">
      <div class="text-component">
        <h4>Title of the Card</h4>
        <p class="text-sm color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
    </div>
  </li>

  <li><div class="card">
    <figure class="card__img">
      <img src="{{ asset('assets/img/team-img-5.jpg') }}" alt="Card preview img">
    </figure>
    <div class="card__content">
      <div class="text-component">
        <h4>Title of the Card</h4>
        <p class="text-sm color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
    </div>
  </li>



</ul>
</div>
</section>

@endsection
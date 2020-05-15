@extends('layouts.app')
@section('content')

<section class="articles-v3">
  <div class="container max-width-adaptive-lg margin-top-xl margin-bottom-xxl">
    <ul class="grid gap-lg">
      <li>
        <div class="grid gap-md items-start">
          <a href="#0" class="articles-v3__img col-6@md col-9@xl">
            <figure class="media-wrapper">
              <img src="{{ asset('assets/img/team-img-12.jpg') }}" alt="Image description">
            </figure>
          </a>
    
          <div class="col-6@md col-6@xl">
            <div class="text-component">
              <h2 class="articles-v3__headline"><a href="#0">Lorem ipsum dolor sit dolor sit.</a></h2>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus nihil rem aliquid perferendis delectus in esse praesentium necessitatibus rerum consectetur! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus nihil rem aliquid perferendis delectus in esse praesentium necessitatibus rerum consectetur! Accusamus nihil rem aliquid perferendis delectus in esse praesentium necessitatibus rerum consectetur!</p>
            </div>
    
            <div class="articles-v3__author">
              <a href="#0" class="articles-v3__author-img">
                <img src="{{ asset('assets/img/author-img-1.jpg') }}" alt="Author picture">
              </a>
        
              <div class="text-component text-sm line-height-xs v-space-xs">
                <p><a href="#0" class="articles-v3__author-name" rel="author">Olivia Gribben</a></p>
                <p class="color-contrast-medium"><time>Oct 4, 2020</time>, &mdash; 5 min read</p>
              </div>
            </div>
          </div>
        </div>
      </li>

    </ul>
  </div>
</section>

<section class="margin-top-md">
  <div class="drag-gallery js-drag-gallery container max-width-adaptive-lg">
    <ul class="drag-gallery__list gap-md">
      <li class="drag-gallery__item">
        <div class="card">
          <figure class="card__img">
            <a href="#0" draggable="false" ondragstart="return false;">
              <img src="{{ asset('assets/img/team-img-12.jpg') }}" alt="Card preview img">
            </a>
          </figure>

          <div class="card__content">
            <div class="text-component">
              <h4 class="author__content">
                <a href="#0" draggable="false" ondragstart="return false;">How I Changed My Muscle Structure in 6 Months</a>
              </h4>
              <p class="text-sm color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit.</p>
            </div>

            <div class="author author--meta margin-top-md">
              <a href="#0" class="author__img-wrapper" draggable="false" ondragstart="return false;">
                <img src="{{ asset('assets/img/author-img-1.jpg') }}" alt="Author picture">
              </a>

              <div class="author__content text-component v-space-xxs">
                <h4 class="text-sm"><a href="#0" rel="author" draggable="false" ondragstart="return false;">Olivia Gribben</a></h4>
                <p class="text-sm color-contrast-medium"><time>May 15</time> &mdash; 5 min read</p>
              </div>
            </div>

          </div>
        </div>
      </li>

      <li class="drag-gallery__item">
        <div class="card">
          <figure class="card__img">
            <a href="#0" draggable="false" ondragstart="return false;">
              <img src="{{ asset('assets/img/team-img-13.jpg') }}" alt="Card preview img">
            </a>
          </figure>

          <div class="card__content">
            <div class="text-component">
              <h4 class="author__content">
                <a href="#0" draggable="false" ondragstart="return false;">How I Changed My Muscle Structure in 6 Months</a>
              </h4>
              <p class="text-sm color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit.</p>
            </div>

            <div class="author author--meta margin-top-md">
              <a href="#0" class="author__img-wrapper" draggable="false" ondragstart="return false;">
                <img src="{{ asset('assets/img/author-img-1.jpg') }}" alt="Author picture">
              </a>

              <div class="author__content text-component v-space-xxs">
                <h4 class="text-sm"><a href="#0" rel="author" draggable="false" ondragstart="return false;">Olivia Gribben</a></h4>
                <p class="text-sm color-contrast-medium"><time>May 15</time> &mdash; 5 min read</p>
              </div>
            </div>

          </div>
        </div>
      </li>

      <li class="drag-gallery__item">
        <div class="card">
          <figure class="card__img">
            <a href="#0" draggable="false" ondragstart="return false;">
              <img src="{{ asset('assets/img/team-img-5.jpg') }}" alt="Card preview img">
            </a>
          </figure>

          <div class="card__content">
            <div class="text-component">
              <h4 class="author__content">
                <a href="#0" draggable="false" ondragstart="return false;">How I Changed My Muscle Structure in 6 Months</a>
              </h4>
              <p class="text-sm color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit.</p>
            </div>

            <div class="author author--meta margin-top-md">
              <a href="#0" class="author__img-wrapper" draggable="false" ondragstart="return false;">
                <img src="{{ asset('assets/img/author-img-1.jpg') }}" alt="Author picture">
              </a>

              <div class="author__content text-component v-space-xxs">
                <h4 class="text-sm"><a href="#0" rel="author" draggable="false" ondragstart="return false;">Olivia Gribben</a></h4>
                <p class="text-sm color-contrast-medium"><time>May 15</time> &mdash; 5 min read</p>
              </div>
            </div>

          </div>
        </div>
      </li>

      <li class="drag-gallery__item">
        <div class="card">
          <figure class="card__img">
            <a href="#0" draggable="false" ondragstart="return false;">
              <img src="{{ asset('assets/img/team-img-5.jpg') }}" alt="Card preview img">
            </a>
          </figure>

          <div class="card__content">
            <div class="text-component">
              <h4 class="author__content">
                <a href="#0" draggable="false" ondragstart="return false;">Title of the Card</a>
              </h4>
              <p class="text-sm color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit.</p>
            </div>

            <div class="author author--meta margin-top-md">
              <a href="#0" class="author__img-wrapper" draggable="false" ondragstart="return false;">
                <img src="{{ asset('assets/img/author-img-1.jpg') }}" alt="Author picture">
              </a>

              <div class="author__content text-component v-space-xxs">
                <h4 class="text-sm"><a href="#0" rel="author" draggable="false" ondragstart="return false;">Olivia Gribben</a></h4>
                <p class="text-sm color-contrast-medium"><time>May 15</time> &mdash; 5 min read</p>
              </div>
            </div>

          </div>
        </div>
      </li>

      <li class="drag-gallery__item">
        <div class="card">
          <figure class="card__img">
            <a href="#0" draggable="false" ondragstart="return false;">
              <img src="{{ asset('assets/img/team-img-5.jpg') }}" alt="Card preview img">
            </a>
          </figure>

          <div class="card__content">
            <div class="text-component">
              <h4 class="author__content">
                <a href="#0" draggable="false" ondragstart="return false;">Title of the Card</a>
              </h4>
              <p class="text-sm color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit.</p>
            </div>

            <div class="author author--meta margin-top-md">
              <a href="#0" class="author__img-wrapper" draggable="false" ondragstart="return false;">
                <img src="{{ asset('assets/img/author-img-1.jpg') }}" alt="Author picture">
              </a>

              <div class="author__content text-component v-space-xxs">
                <h4 class="text-sm"><a href="#0" rel="author" draggable="false" ondragstart="return false;">Olivia Gribben</a></h4>
                <p class="text-sm color-contrast-medium"><time>May 15</time> &mdash; 5 min read</p>
              </div>
            </div>

          </div>
        </div>
      </li>

    </ul>
    <div aria-hidden="true" class="drag-gallery__gesture-hint"></div>
    <div class="custom-drag-gallery-end-overlay right"></div><!-- /.custom-gallery-end-overlay -->
  </div><!-- /.drag-gallery js-drag-gallery container max-width-adaptive-lg -->
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
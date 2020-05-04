@extends('layouts.app')
@section('content')

<section class="has-section-divider-bottom bg-contrast-low">
  <div class="padding-y-xxl">
    <div class="container max-width-adaptive-lg">
      <div class="text-component">
        <h1>Section Divider</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eos autem et earum dolorem voluptates rerum eius ab nam architecto. Magnam debitis labore dolorem, adipisci porro soluta ipsam, recusandae obcaecati velit nihil eos rem quo! Optio unde cumque laudantium aut?</p>
      </div>
    </div>
  </div>

  <svg class="section-divider" viewBox="0 0 1920 60" aria-hidden="true"><path fill="var(--color-bg)" d="M-153.5,85.5a4002.033,4002.033,0,0,1,658-71c262.854-6.5,431.675,15.372,600,27,257.356,17.779,624.828,19.31,1089-58v102Z"/></svg>
</section>

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

<section class="margin-top-md">
  <div class="container max-width-adaptive-lg">
<ul class="grid-auto-md gap-md">

  <li><div class="card">
    <figure class="card__img">
      <img src="{{ asset('assets/img/team-img-5.jpg') }}" alt="Card preview img">
    </figure>
  
    <div class="card__content">
      <div class="text-component">
        <h4>Title of the Card</h4>
        <p class="text-sm color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit.</p>
      </div>
      
    </div></li>

  <li><div class="card">
        <figure class="card__img">
          <img src="{{ asset('assets/img/team-img-5.jpg') }}" alt="Card preview img">
        </figure>
      
        <div class="card__content">
          <div class="text-component">
            <h4>Title of the Card</h4>
            <p class="text-sm color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit.</p>
          </div>
          
        </div></li>

        <li><div class="card">
          <figure class="card__img">
            <img src="{{ asset('assets/img/team-img-5.jpg') }}" alt="Card preview img">
          </figure>
        
          <div class="card__content">
            <div class="text-component">
              <h4>Title of the Card</h4>
              <p class="text-sm color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit.</p>
            </div>
            
          </div></li>

          <li><div class="card">
            <figure class="card__img">
              <img src="{{ asset('assets/img/team-img-5.jpg') }}" alt="Card preview img">
            </figure>
          
            <div class="card__content">
              <div class="text-component">
                <h4>Title of the Card</h4>
                <p class="text-sm color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit.</p>
              </div>
              
            </div></li>

</ul>
</div>
</section>

@endsection
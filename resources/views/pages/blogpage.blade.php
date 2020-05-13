@extends('layouts.app')
@section('content')
<article class="padding-bottom-lg">
  <div class="t-article-v2__hero">
    <div class="t-article-v2__cover" aria-hidden="true" style="background-image: url('{{ asset('assets/img/team-img-13.jpg') }}');"></div>

    <div class="t-article-v2__intro container max-width-adaptive-sm margin-bottom-lg">
      <div class="text-component text-center">
        <h1 class="text-xxxl">It was going to be a lonely trip back to the real world</h1>
        <p class="text-sm">By <a href="#0">Olivia Gribben</a></p>
      </div>

      <div class="t-article-v2__divider margin-top-lg" aria-hidden="true"><span></span></div>
    </div>
  </div>

  <section class="">
    <div class="container max-width-md">
      <div class="margin-bottom-md">
        <h4 class="text-center">Share the article</h4>
      </div>
  
      <ul class="sharebar flex flex-wrap gap-xs justify-center">
        <li>
          <a class="sharebar__btn js-social-share" data-social="twitter" data-text="Hi there! https://codyhouse.co via @CodyWebHouse" data-hashtags="#nuggets, #dev" href="https://twitter.com/intent/tweet">
            <svg class="icon" viewBox="0 0 32 32"><title>Share on Twitter</title><g><path d="M32,6.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6C25.7,3.8,24,3,22.2,3 c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5C10.3,10.8,5.5,8.2,2.2,4.2c-0.6,1-0.9,2.1-0.9,3.3c0,2.3,1.2,4.3,2.9,5.5 c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1C2.9,27.9,6.4,29,10.1,29c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C30,8.5,31.1,7.4,32,6.1z"></path></g></svg>
          </a>
        </li>
    
        <li>
          <a class="sharebar__btn js-social-share" data-social="facebook" data-url="https://codyhouse.co" href="http://www.facebook.com/sharer.php">
            <svg class="icon" viewBox="0 0 32 32"><title>Share on Facebook</title><path d="M32,16A16,16,0,1,0,13.5,31.806V20.625H9.438V16H13.5V12.475c0-4.01,2.389-6.225,6.043-6.225a24.644,24.644,0,0,1,3.582.312V10.5H21.107A2.312,2.312,0,0,0,18.5,13v3h4.438l-.71,4.625H18.5V31.806A16,16,0,0,0,32,16Z"></path></svg>
          </a>
        </li>
    
        <li>
          <a class="sharebar__btn js-social-share" data-social="pinterest" data-description="Description for my Pinterest share" data-media="https://codyhouse.co/app/assets/img/social-sharing-img-1.jpg" href="http://pinterest.com/pin/create/button">
            <svg class="icon" viewBox="0 0 32 32"><title>Share on Pinterest</title><g><path d="M16,0C7.2,0,0,7.2,0,16c0,6.8,4.2,12.6,10.2,14.9c-0.1-1.3-0.3-3.2,0.1-4.6c0.3-1.2,1.9-8,1.9-8 s-0.5-1-0.5-2.4c0-2.2,1.3-3.9,2.9-3.9c1.4,0,2,1,2,2.3c0,1.4-0.9,3.4-1.3,5.3c-0.4,1.6,0.8,2.9,2.4,2.9c2.8,0,5-3,5-7.3 c0-3.8-2.8-6.5-6.7-6.5c-4.6,0-7.2,3.4-7.2,6.9c0,1.4,0.5,2.8,1.2,3.7c0.1,0.2,0.1,0.3,0.1,0.5c-0.1,0.5-0.4,1.6-0.4,1.8 C9.5,21.9,9.3,22,9,21.8c-2-0.9-3.2-3.9-3.2-6.2c0-5,3.7-9.7,10.6-9.7c5.6,0,9.9,4,9.9,9.2c0,5.5-3.5,10-8.3,10 c-1.6,0-3.1-0.8-3.7-1.8c0,0-0.8,3.1-1,3.8c-0.4,1.4-1.3,3.1-2,4.2c1.5,0.5,3.1,0.7,4.7,0.7c8.8,0,16-7.2,16-16C32,7.2,24.8,0,16,0z "></path></g></svg>
          </a>
        </li>
    
        <li>
          <a class="sharebar__btn js-social-share" data-social="linkedin" data-url="http://codyhouse.co" href="https://www.linkedin.com/shareArticle">
            <svg class="icon" viewBox="0 0 32 32"><title>Share on Linkedin</title><g><path d="M29,1H3A2,2,0,0,0,1,3V29a2,2,0,0,0,2,2H29a2,2,0,0,0,2-2V3A2,2,0,0,0,29,1ZM9.887,26.594H5.374V12.25H9.887ZM7.63,10.281a2.625,2.625,0,1,1,2.633-2.625A2.624,2.624,0,0,1,7.63,10.281ZM26.621,26.594H22.2V19.656c0-1.687,0-3.75-2.35-3.75s-2.633,1.782-2.633,3.656v7.126H12.8V12.25h4.136v1.969h.094a4.7,4.7,0,0,1,4.231-2.344c4.513,0,5.359,3,5.359,6.844Z"></path></g></svg>
          </a>
        </li>
    
        <li>
          <a class="sharebar__btn js-social-share" data-social="mail" data-subject="Email Subject" data-body="Content of my email." href="mailto:">
            <svg class="icon" viewBox="0 0 32 32"><title>Share by Email</title><g><path d="M28,3H4A3.957,3.957,0,0,0,0,7V25a3.957,3.957,0,0,0,4,4H28a3.957,3.957,0,0,0,4-4V7A3.957,3.957,0,0,0,28,3Zm.6,6.8-12,9a1,1,0,0,1-1.2,0l-12-9A1,1,0,0,1,4.6,8.2L16,16.75,27.4,8.2a1,1,0,1,1,1.2,1.6Z"></path></g></svg>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <div class="container max-width-adaptive-sm margin-bottom-xl">
    <div class="text-component line-height-lg v-space-md">
      <p class="drop-cap">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, temporibus, aut officia minus sequi quae <a href="#0">molestias beatae</a>, qui ipsa mollitia alias accusamus voluptate ratione provident numquam iure quia aliquam tempore possimus consequatur vel. Iure atque enim in? Magnam quis cupiditate quia labore quaerat, eligendi nobis, ab similique harum nostrum nulla aliquam dolore adipisci ut. Eaque doloremque iure veniam nobis asperiores!</p>
    
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis architecto doloribus perspiciatis.</p>
    
      <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
    
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, animi. <mark>Praesentium esse magnam sequi aut, repellat pariatur beatae quis</mark>. Quidem harum dolores ab velit neque suscipit vitae pariatur, perspiciatis voluptatum molestiae facere ad tempora. Non omnis fugiat libero magnam sapiente vel. Optio a, enim explicabo totam amet omnis accusantium! Quod.</p>
    
      <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt soluta similique quia.</blockquote>
    
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat fuga architecto accusamus?</p>
    
      <ul>
        <li>Lorem, ipsum.</li>
        <li>Lorem ipsum dolor sit amet.</li>
        <li>Lorem, ipsum.</li>
      </ul>
    
      <ol>
        <li>Lorem, ipsum.</li>
        <li>Lorem ipsum dolor sit amet.</li>
        <li>Lorem, ipsum.</li>
      </ol>
    
      <hr>
    
      <div class="text-component__block text-component__block--outset">
        <h3 class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae officiis similique enim?</h3>
      </div>
    
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat hic autem consequatur libero, impedit fugiat facere ex! Fugit, cumque minus!</p>
    
      <figure class="text-component__block">
        <img src="../../../app/assets/img/article-example-img-2.svg" alt="Image description here">
        <figcaption>Image caption</figcaption>
      </figure>
    
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto odit incidunt nobis cumque, assumenda quidem ducimus! Architecto, molestias reiciendis tempora pariatur nobis nam quibusdam, nemo repellendus rerum rem quam soluta.</p>
    
      <figure class="text-component__block text-component__block--left">
        <img src="../../../app/assets/img/article-example-img-2.svg" alt="Image description here">
        <figcaption>Image caption</figcaption>
      </figure>
    
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis incidunt minus vero deserunt illum perspiciatis sed sit. Officia, quia at? Nisi dolores quis culpa nulla eveniet? Rem vel numquam ipsa voluptatum voluptate illo minima, temporibus atque officia soluta magnam laborum neque alias consequuntur enim aliquid consequatur non accusamus exercitationem. Perspiciatis dolorem a commodi alias, ad corporis iusto magnam in quae deleniti incidunt facilis voluptatibus. Aliquid reprehenderit, provident, totam necessitatibus cumque vel veniam consequuntur maxime iure accusamus explicabo recusandae neque quas?</p>
    
      <figure class="text-component__block text-component__block--outset text-component__block--right">
        <img src="../../../app/assets/img/article-example-img-2.svg" alt="Image description here">
        <figcaption>Image caption</figcaption>
      </figure>
    
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod incidunt provident aspernatur quibusdam expedita soluta voluptas, sapiente ipsa praesentium eum earum, modi necessitatibus a eveniet quidem doloribus, sequi sed tenetur nesciunt consectetur totam asperiores assumenda inventore porro. Enim beatae iure ullam consequuntur, quibusdam similique quae doloribus delectus ipsa, cumque odit voluptatem? Natus, dolorem quaerat! Magni fugit enim nam quam beatae facilis, consequuntur sunt totam pariatur aperiam sequi laboriosam similique dolores aspernatur alias consectetur maxime voluptas, ut tempore. Ipsam vel, id repellat maiores non fuga unde modi voluptates nam reiciendis blanditiis. At veniam odit illum porro maiores magni quasi deserunt est?</p>
    
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos vitae, sequi officia dignissimos laboriosam atque esse omnis. Perspiciatis, ratione eius.</p>
    
      <div class="text-component__block text-component__block--outset">
        <div class="grid gap-xs">
          <figure class="col">
            <img src="../../../app/assets/img/article-example-img-1.svg" alt="Image description here">
            <figcaption>Image caption</figcaption>
          </figure>
    
          <figure class="col">
            <img src="../../../app/assets/img/article-example-img-1.svg" alt="Image description here">
            <figcaption>Image caption</figcaption>
          </figure>
        </div>
      </div>
    
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam voluptatem dolore fugiat facilis sint quidem obcaecati voluptas ut quae aliquam dolorem omnis, odit nihil! Sint doloremque voluptates laborum illo excepturi eligendi asperiores corporis voluptatem iusto? Voluptatem repellendus consectetur exercitationem, quisquam corrupti rem reiciendis maiores aspernatur quaerat impedit aliquid minus voluptate, incidunt eveniet, et numquam non eligendi! Officiis suscipit ad illo.</p>

      <div class="text-component__block text-component__block--outset">
        <figure class="media-wrapper">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/zAGVQLHvwOY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </figure>
      </div>

      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam voluptatem dolore fugiat facilis sint quidem obcaecati voluptas ut quae aliquam dolorem omnis, odit nihil! Sint doloremque voluptates laborum illo excepturi eligendi asperiores corporis voluptatem iusto? Voluptatem repellendus consectetur exercitationem, quisquam corrupti rem reiciendis maiores aspernatur quaerat impedit aliquid minus voluptate, incidunt eveniet, et numquam non eligendi! Officiis suscipit ad illo.</p>
    </div>
  </div>

</article>

<section>
  <div class="container max-width-adaptive-sm">
    <div class="author author--featured">
      <a href="#0" class="author__img-wrapper">
        <img src="{{ asset('assets/img/author-img-1.jpg') }}" alt="Author picture">
      </a>
    
      <div class="author__content text-component">
        <h2>Hi! I'm Olivia Gribben</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, accusantium consequatur. Perspiciatis!</p>
      </div>

      <ul class="flex gap-xs flex-wrap justify-center">
        <li>
          <a href="#0" class="author__social">
            <svg class="icon" viewBox="0 0 32 32"><title>Follow the author on Twitter</title><g><path d="M32,6.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6C25.7,3.8,24,3,22.2,3 c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5C10.3,10.8,5.5,8.2,2.2,4.2c-0.6,1-0.9,2.1-0.9,3.3c0,2.3,1.2,4.3,2.9,5.5 c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1C2.9,27.9,6.4,29,10.1,29c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C30,8.5,31.1,7.4,32,6.1z"></path></g></svg>
          </a>
        </li>
  
        <li>
          <a href="#0" class="author__social">
            <svg class="icon" viewBox="0 0 32 32"><title>Follow the author on Facebook</title><path d="M32,16A16,16,0,1,0,13.5,31.806V20.625H9.438V16H13.5V12.475c0-4.01,2.389-6.225,6.043-6.225a24.644,24.644,0,0,1,3.582.312V10.5H21.107A2.312,2.312,0,0,0,18.5,13v3h4.438l-.71,4.625H18.5V31.806A16,16,0,0,0,32,16Z"></path></svg>
          </a>
        </li>
  
        <li>
          <a href="#0" class="author__social">
            <svg class="icon" viewBox="0 0 32 32"><title>Follow the author on Instagram</title><path d="M16,3.7c4,0,4.479.015,6.061.087a6.426,6.426,0,0,1,4.51,1.639,6.426,6.426,0,0,1,1.639,4.51C28.282,11.521,28.3,12,28.3,16s-.015,4.479-.087,6.061a6.426,6.426,0,0,1-1.639,4.51,6.425,6.425,0,0,1-4.51,1.639c-1.582.072-2.056.087-6.061.087s-4.479-.015-6.061-.087a6.426,6.426,0,0,1-4.51-1.639,6.425,6.425,0,0,1-1.639-4.51C3.718,20.479,3.7,20.005,3.7,16s.015-4.479.087-6.061a6.426,6.426,0,0,1,1.639-4.51A6.426,6.426,0,0,1,9.939,3.79C11.521,3.718,12,3.7,16,3.7M16,1c-4.073,0-4.584.017-6.185.09a8.974,8.974,0,0,0-6.3,2.427,8.971,8.971,0,0,0-2.427,6.3C1.017,11.416,1,11.927,1,16s.017,4.584.09,6.185a8.974,8.974,0,0,0,2.427,6.3,8.971,8.971,0,0,0,6.3,2.427c1.6.073,2.112.09,6.185.09s4.584-.017,6.185-.09a8.974,8.974,0,0,0,6.3-2.427,8.971,8.971,0,0,0,2.427-6.3c.073-1.6.09-2.112.09-6.185s-.017-4.584-.09-6.185a8.974,8.974,0,0,0-2.427-6.3,8.971,8.971,0,0,0-6.3-2.427C20.584,1.017,20.073,1,16,1Z"></path><path d="M16,8.3A7.7,7.7,0,1,0,23.7,16,7.7,7.7,0,0,0,16,8.3ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z"></path><circle cx="24.007" cy="7.993" r="1.8"></circle></svg>
          </a>
        </li>
      </ul>
    </div>
  </div>
</section>
@endsection
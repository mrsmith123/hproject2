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

          <div class="sticky-banner sticky-banner--bottom bg-contrast-higher bg-opacity-80% backdrop-blur-10 color-bg js-sticky-banner" data-target-in="#stickt-banner-target">
            <!--👇 sticky banner content -->
            <p class="text-center padding-md">Sticky Banner</p>
          </div>
          
          <section class="max-height-100vh bg-contrast-lower" id="stickt-banner-target">
            <div class="container max-width-sm min-height-100vh flex flex-center">
              <div class="text-component text-center">
                <h1>Sticky Banner</h1>
                <p>👇 The banner becomes visible when you scroll past this section.</p>
              </div>
            </div>
          </section>
    
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
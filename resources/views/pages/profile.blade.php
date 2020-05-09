@extends('layouts.app')
@section('content')




  <div class="container max-width-adaptive-lg">
    <div class="grid">
      <div class="col-5@md position-relative z-index-1">
        <div class="profile-card container">
          <figure class="snip1336">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample87.jpg" alt="sample87" />
            <figcaption>
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/profile-sample4.jpg" alt="profile-sample4" class="profile" />
              <h2>Hans Down<span>Engineer</span></h2>
              <p>I'm looking for something that can deliver a 50-pound payload of snow on a small feminine target. Can you suggest something? Hello...? </p>
              <a href="#" class="follow">Follow</a>
              <a href="#" class="info">More Info</a>
            </figcaption>
          </figure>
          </div>
        </div>


      <div class="col-10@md">
        <div class="margin-top-lg">
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
          </ul><!-- /.grid-auto-md gap-md -->
        </div><!-- /.margin-top-lg -->
      </div>
    </div>
  </div>
</section>




@endsection
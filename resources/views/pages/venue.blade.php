@extends('layouts.app')
@section('content')
<section class="features">
    <div class="container max-width-adaptive-lg">
      <div class="grid gap-md">
        <div class="col-10@md">
          <div class="features__item">
            <a href="#">
                <img class="venue-img" alt="img" src="../../assets/img/team-img-6.jpg">
            </a>
            <div class="text-component">
              <h4>Feature One</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium assumenda doloribus eos provident modi.</p>
              <p><a href="#0">Learn more</a></p>
            </div>
          </div>
        </div>
    
        <div class="col-5@md">
          <div class="features__item">
            <img src="../../assets/img/team-img-6.jpg" alt="Image description">
            <div class="text-component">
              <h4>Feature Two</h4>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam distinctio inventore architecto.</p>
              <p><a href="#0">Learn more</a></p>
            </div>
          </div>
        </div>
    
  </section>
@endsection
@extends('layouts.app')
@section('content')

<section class="margin-top-md">
<div class="drag-gallery js-drag-gallery container max-width-adaptive-lg">
  <ul class="drag-gallery__list gap-md">
    <li class="drag-gallery__item card-v2">
      <img src="assets/img/team-img-5.jpg" alt="Image">
    </li>

    <li class="drag-gallery__item card-v2">
      <img src="assets/img/team-img-5.jpg" alt="Image">
    </li>

    <li class="drag-gallery__item card-v2">
      <img src="assets/img/team-img-5.jpg" alt="Image">
    </li>

    <li class="drag-gallery__item card-v2">
      <img src="assets/img/team-img-5.jpg" alt="Image">
    </li>

    <li class="drag-gallery__item card-v2">
      <img src="assets/img/team-img-5.jpg" alt="Image">
    </li>

    <li class="drag-gallery__item card-v2">
      <img src="assets/img/team-img-5.jpg" alt="Image">
    </li>

    <li class="drag-gallery__item card-v2">
      <img src="assets/img/team-img-5.jpg" alt="Image">
    </li>

    <li class="drag-gallery__item card-v2">
      <img src="assets/img/team-img-5.jpg" alt="Image">
    </li>
    
  </ul>
  <div aria-hidden="true" class="drag-gallery__gesture-hint"></div>
</div>
</section>

<div class="text-divider container max-width-adaptive-lg"><span>Text divider</span></div>

<div class="container-justified-gal">
  <div class="flexbin flexbin-margin">
    <a href="http://127.0.0.1:8000/blogpage">
      <img src="{{ asset('assets/img/team-img-1.jpg') }}" class="card-v2"/>
    </a>
    <a href="http://127.0.0.1:8000/venue">
      <img src="{{ asset('assets/img/team-img-2.jpg') }}" class="card-v2"/>
    </a>
    <a href="#">
      <img src="{{ asset('assets/img/team-img-3.jpg') }}" class="card-v2"/>
    </a>
    <a href="#">
      <img src="{{ asset('assets/img/team-img-4.jpg') }}" class="card-v2"/>
    </a>
    <a href="#">
      <img src="{{ asset('assets/img/team-img-5.jpg') }}" class="card-v2"/>
    </a>
    <a href="#">
      <img src="{{ asset('assets/img/team-img-6.jpg') }}" class="card-v2"/>
    </a>
    <a href="#">
      <img src="{{ asset('assets/img/team-img-7.jpg') }}" class="card-v2"/>
    </a>
    <a href="#">
      <img src="{{ asset('assets/img/team-img-8.jpg') }}" class="card-v2"/>
    </a>
    <a href="#">
      <img src="{{ asset('assets/img/team-img-9.jpg') }}" class="card-v2"/>
    </a>
    <a href="#">
      <img src="{{ asset('assets/img/team-img-10.jpg') }}" class="card-v2"/>
    </a>
    <a href="#">
      <img src="{{ asset('assets/img/team-img-11.jpg') }}" class="card-v2"/>
    </a>
  </div>
</div>

@endsection
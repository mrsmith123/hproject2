@extends('layouts.app')
@section('content')

<div class="bg-contrast-lower js-hide-nav js-hide-nav--sub hide-nav z-index-2">
    <div class="container max-width-lg">
      <div class="subnav  js-subnav">
        <button class="reset btn btn--subtle margin-y-sm subnav__control js-subnav__control">
          <span>Show Categories</span>
          <svg class="icon icon--xxs margin-left-xxs" aria-hidden="true" viewBox="0 0 12 12">
            <polyline points="0.5 3.5 6 9.5 11.5 3.5" fill="none" stroke-width="1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></polyline>
          </svg>
        </button>

        <div class="subnav__wrapper js-subnav__wrapper">
          <nav class="subnav__nav justify-left">
            <button class="reset subnav__close-btn js-subnav__close-btn js-tab-focus" aria-label="Close navigation">
              <svg class="icon" viewBox="0 0 16 16">
                <g stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                  <line x1="13.5" y1="2.5" x2="2.5" y2="13.5"></line>
                  <line x1="2.5" y1="2.5" x2="13.5" y2="13.5"></line>
                </g>
              </svg>
            </button>

            <ul class="subnav__list">
              <li class="subnav__item"><a href="{{url('/admin/users')}}" class="subnav__link" aria-current=page>Users</a></li>
              <li class="subnav__item"><a href="#0" class="subnav__link">Blogs</a></li>
              <li class="subnav__item"><a href="#0" class="subnav__link">Scrape</a></li>
              <li class="subnav__item"><a href="#0" class="subnav__link">SEO</a></li>
              <li class="subnav__item"><a href="#0" class="subnav__link">Settings</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>

<div class="container max-width-adaptive-lg margin-top-lg">
  @if (session('responseMessage'))
  <div class="alert alert--is-visible js-alert margin-bottom-lg" role="alert">
    <div class="flex items-center justify-between">
      <div class="flex items-center">
        <svg aria-hidden="true" class="icon margin-right-xxxs" viewBox="0 0 32 32" ><title>info icon</title><g><path d="M16,0C7.178,0,0,7.178,0,16s7.178,16,16,16s16-7.178,16-16S24.822,0,16,0z M18,7c1.105,0,2,0.895,2,2 s-0.895,2-2,2s-2-0.895-2-2S16.895,7,18,7z M19.763,24.046C17.944,24.762,17.413,25,16.245,25c-0.954,0-1.696-0.233-2.225-0.698 c-1.045-0.92-0.869-2.248-0.542-3.608l0.984-3.483c0.19-0.717,0.575-2.182,0.036-2.696c-0.539-0.514-1.794-0.189-2.524,0.083 l0.263-1.073c1.054-0.429,2.386-0.954,3.523-0.954c1.71,0,2.961,0.855,2.961,2.469c0,0.151-0.018,0.417-0.053,0.799 c-0.066,0.701-0.086,0.655-1.178,4.521c-0.122,0.425-0.311,1.328-0.311,1.765c0,1.683,1.957,1.267,2.847,0.847L19.763,24.046z"></path></g></svg>
        <p>
          {!! session()->get('responseMessage')!!}
        </p>
      </div>

      <button class="reset alert__close-btn js-alert__close-btn">
        <svg class="icon" viewBox="0 0 24 24"><title>Close alert</title><g stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" stroke="currentColor" fill="none" stroke-miterlimit="10"><line x1="19" y1="5" x2="5" y2="19"></line><line fill="none" x1="19" y1="19" x2="5" y2="5"></line></g></svg>
      </button>
    </div>
  </div>
  @endif
  <form action="{{ url('/admin/users/update', ['id' => $user->id]) }}" method="POST"> @csrf
    <h2 class="margin-bottom-md">Edit user</h2>
    <div class="grid gap-sm margin-bottom-sm">
      <div class="col-4@md">
        <label class="form-label margin-bottom-xxs" for="name">Full name</label>
        <input class="form-control width-100%" type="text" name="name" id="name" value="{{$user->name}}" @error('name') aria-invalid="true" @enderror>
        @error('name')
        <div role="alert" class="form-error-msg form-error-msg--is-visible">
          <p>{{ $message }}</p>
        </div>
        @enderror
      </div>

      <div class="col-4@md">
        <label class="form-label margin-bottom-xxs" for="email">Email</label>
        <input class="form-control width-100%" type="email" name="email" id="email" value="{{$user->email}}" placeholder="email@myemail.com" @error('email') aria-invalid="true" @enderror>
        @error('email')
        <div role="alert" class="form-error-msg form-error-msg--is-visible">
          <p>{{ $message }}</p>
        </div>
        @enderror
      </div>
    </div><!-- /.grid gap-sm -->
    <div class="grid gap-sm margin-bottom-sm">
      <div class="col-4@md">
        <label class="form-label margin-bottom-xxs" for="username">Username</label>
        <input class="form-control width-100%" type="text" name="username" id="username" value="{{$user->username}}" @error('username') aria-invalid="true" @enderror>
        @error('username')
        <div role="alert" class="form-error-msg form-error-msg--is-visible">
          <p>{{ $message }}</p>
        </div>
        @enderror
      </div>
      <div class="col-4@md">
        <label class="form-label margin-bottom-xxxs" for="role">Select role</label>
        <div class="select">
          <select class="select__input form-control" name="role" id="role" @if(auth()->user()->id == $user->id) disabled @endif>
            @foreach($roles as $role)
              <option value="{{$role->key}}" @if($user->permission === $role->permission) selected @endif>{{$role->name}}</option>
            @endforeach
          </select>

          <svg class="icon select__icon" aria-hidden="true" viewBox="0 0 16 16"><g stroke-width="1" stroke="currentColor"><polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="15.5,4.5 8,12 0.5,4.5 "></polyline></g></svg>
        </div><!-- /.select -->
        @if(auth()->user()->id == $user->id)
          <p class="text-xs color-contrast-medium margin-top-xxs">You cannot change your role while logged in.</p>
        @endif
      </div><!-- /.col-4@md -->
    </div><!-- /.grid gap-sm -->
    <div>
      <button class="btn btn--primary">Save</button>
    </div>
  </form>
</div><!-- /.container max-width-adaptive-lg -->

@endsection
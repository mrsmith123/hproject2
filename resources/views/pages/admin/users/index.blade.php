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
              <li class="subnav__item"><a href="#0" class="subnav__link" aria-current=page>Users</a></li>
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



<div class="int-table int-table--sticky-header text-sm js-int-table container max-width-adaptive-lg margin-top-xxxl">

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

<template id="selected-id-template">
  <input type="hidden" name="selectedIDs[]" value="@{{value}}">
</template><!-- /#selected-id-template -->

    <div class="flex flex-wrap gap-sm margin-bottom-xxl margin-top-xxxs">
        <form action="{{action('UserController@bulkDelete')}}" method="POST"> @csrf
          <div class="bulk-selected-ids"></div><!-- /.bulk-selected-ids -->
          <button class="btn btn--subtle">
            Delete
            <span class="counter counter--dark margin-left-xxs table-counter-badge">
              <span class="table-total-selected">0</span><!-- /.table-total-selected -->
              <i class="sr-only">Notifications</i>
            </span>
          </button>
        </form>
        <form action="{{action('UserController@bulkSuspend')}}" method="POST"> @csrf
          <div class="bulk-selected-ids"></div><!-- /.bulk-selected-ids -->
          <button class="btn btn--subtle">
            Suspend
            <span class="counter counter--dark margin-left-xxs table-counter-badge">
              <span class="table-total-selected">0</span><!-- /.table-total-selected -->
              <i class="sr-only">Notifications</i>
            </span>
          </button>
        </form>
        <div class="flex flex-column items-start">
            <label class="form-label" for="selectThis"></label>

            <div class="select inline-block js-select" data-trigger-class="btn btn--subtle padding-sm">
              <select name="selectThis" id="selectThis">
                <optgroup label="Amount to show">
                  <option value="0" selected>Show 25</option>
                  <option value="1">Show 50</option>
                  <option value="2">Show 100</option>
                  <option value="2">Show 150</option>
                  <option value="2">Show 200</option>
                </optgroup>
              </select>

              <svg class="icon icon--xs margin-left-xxxs" aria-hidden="true" viewBox="0 0 16 16"><polygon points="3,5 8,11 13,5 "></polygon></svg>
            </div>
          </div>

          <div class="search-input search-input--icon-right container max-width-xxxs">
            <input class="form-control width-100%" type="search" name="searchInputX" id="searchInputX" placeholder="Search..." aria-label="Search">
            <button class="search-input__btn">
              <svg class="icon" viewBox="0 0 24 24"><title>Submit</title><g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" stroke="currentColor" fill="none" stroke-miterlimit="10"><line x1="22" y1="22" x2="15.656" y2="15.656"></line><circle cx="10" cy="10" r="8"></circle></g></svg>
            </button>
          </div>

      </div>






    <div class="int-table__inner">
      <table class="int-table__table" aria-label="Interactive table example">
        <thead class="int-table__header js-int-table__header">
          <tr class="int-table__row">
            <td class="int-table__cell">
              <div class="custom-checkbox int-table__checkbox">
                <input class="custom-checkbox__input js-int-table__select-all" type="checkbox" aria-label="Select all rows"/>
                <div class="custom-checkbox__control" aria-hidden="true"></div>
              </div>
            </td>

            <th class="int-table__cell int-table__cell--th int-table__cell--sort  js-int-table__cell--sort">
              <div class="flex items-center">
                <span>ID</span>

                <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12"><polygon class="arrow-up" points="6 0 10 5 2 5 6 0"/><polygon class="arrow-down" points="6 12 2 7 10 7 6 12"/></svg>
              </div>

              <ul class="sr-only js-int-table__sort-list">
                <li>
                  <input type="radio" name="sortingId" id="sortingIdNone" value="none" checked>
                  <label for="sortingIdNone">No sorting</label>
                </li>

                <li>
                  <input type="radio" name="sortingId" id="sortingIdAsc" value="asc">
                  <label for="sortingIdAsc">Sort in ascending order</label>
                </li>

                <li>
                  <input type="radio" name="sortingId" id="sortingIdDes" value="desc">
                  <label for="sortingIdDes">Sort in descending order</label>
                </li>
              </ul>
            </th>

            <th class="int-table__cell int-table__cell--th int-table__cell--sort  js-int-table__cell--sort">
              <div class="flex items-center">
                <span>Name</span>

                <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12"><polygon class="arrow-up" points="6 0 10 5 2 5 6 0"/><polygon class="arrow-down" points="6 12 2 7 10 7 6 12"/></svg>
              </div>

              <ul class="sr-only js-int-table__sort-list">
                <li>
                  <input type="radio" name="sortingName" id="sortingNameNone" value="none" checked>
                  <label for="sortingNameNone">No sorting</label>
                </li>

                <li>
                  <input type="radio" name="sortingName" id="sortingNameAsc" value="asc">
                  <label for="sortingNameAsc">Sort in ascending order</label>
                </li>

                <li>
                  <input type="radio" name="sortingName" id="sortingNameDes" value="desc">
                  <label for="sortingNameDes">Sort in descending order</label>
                </li>
              </ul>
            </th>

            <th class="int-table__cell int-table__cell--th int-table__cell--sort  js-int-table__cell--sort">
              <div class="flex items-center">
                <span>Email</span>

                <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12"><polygon class="arrow-up" points="6 0 10 5 2 5 6 0"/><polygon class="arrow-down" points="6 12 2 7 10 7 6 12"/></svg>
              </div>

              <ul class="sr-only js-int-table__sort-list">
                <li>
                  <input type="radio" name="sortingEmail" id="sortingEmailNone" value="none" checked>
                  <label for="sortingEmailNone">No sorting</label>
                </li>

                <li>
                  <input type="radio" name="sortingEmail" id="sortingEmailAsc" value="asc">
                  <label for="sortingEmailAsc">Sort in ascending order</label>
                </li>

                <li>
                  <input type="radio" name="sortingEmail" id="sortingEmailDes" value="desc">
                  <label for="sortingEmailDes">Sort in descending order</label>
                </li>
              </ul>
            </th>

            <th class="int-table__cell int-table__cell--th text-left">Username</th>
            <th class="int-table__cell int-table__cell--th text-left">Role</th>

            <th class="int-table__cell int-table__cell--th int-table__cell--sort  js-int-table__cell--sort" data-date-format="d/m/Y">
              <div class="flex items-center">
                <span>Date</span>

                <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12"><polygon class="arrow-up" points="6 0 10 5 2 5 6 0"/><polygon class="arrow-down" points="6 12 2 7 10 7 6 12"/></svg>
              </div>

              <ul class="sr-only js-int-table__sort-list">
                <li>
                  <input type="radio" name="sortingDate" id="sortingDateNone" value="none" checked>
                  <label for="sortingDateNone">No sorting</label>
                </li>

                <li>
                  <input type="radio" name="sortingDate" id="sortingDateAsc" value="asc">
                  <label for="sortingDateAsc">Sort in ascending order</label>
                </li>

                <li>
                  <input type="radio" name="sortingDate" id="sortingDateDes" value="desc">
                  <label for="sortingDateDes">Sort in descending order</label>
                </li>
              </ul>
            </th>

            <th class="int-table__cell int-table__cell--th int-table__cell--sort  js-int-table__cell--sort">
              <div class="flex items-center">
                <span>Status</span>

                <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12"><polygon class="arrow-up" points="6 0 10 5 2 5 6 0"/><polygon class="arrow-down" points="6 12 2 7 10 7 6 12"/></svg>
              </div>

              <ul class="sr-only js-int-table__sort-list">
                <li>
                  <input type="radio" name="sortingStatus" id="sortingStatusNone" value="none" checked>
                  <label for="sortingStatusNone">No sorting</label>
                </li>

                <li>
                  <input type="radio" name="sortingStatus" id="sortingStatusAsc" value="asc">
                  <label for="sortingStatusAsc">Sort in ascending order</label>
                </li>

                <li>
                  <input type="radio" name="sortingStatus" id="sortingStatusDes" value="desc">
                  <label for="sortingStatusDes">Sort in descending order</label>
                </li>
              </ul>
            </th>

            <th class="int-table__cell int-table__cell--th text-right">Action</th>
          </tr>
        </thead>

        <tbody class="int-table__body js-int-table__body">

          @php
            foreach($users as $key => $user){
              $user->accountStatus = $user->permission > 0 ? 'Active' : 'Inactive';

              if($user->role === null){
                $user->role = App\Role::where('permission', $user->previous_permission)->first()->name;
              }

          @endphp

          <tr class="int-table__row">
            <th class="int-table__cell" scope="row">
              <div class="custom-checkbox int-table__checkbox">
                <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" value="{{$user->id}}" aria-label="Select this row"/>
                <div class="custom-checkbox__control" aria-hidden="true"></div>
              </div>
            </th>
            <td class="int-table__cell">{{$user->id}}</td>
            <td class="int-table__cell"><a href="#0">{{$user->name}}</a></td>
            <td class="int-table__cell">{{$user->email}}</td>
            <td class="int-table__cell">{{$user->username}}</td>
            <td class="int-table__cell">{{$user->role}}</td>
            <td class="int-table__cell">{{ $user->created_at->format('d/m/Y') }}</td>
            <td class="int-table__cell max-width-xxxxs">{{$user->accountStatus}}</td>
            <td class="int-table__cell">
              <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example">
                <svg class="icon" viewBox="0 0 16 16"><circle cx="8" cy="7.5" r="1.5" /><circle cx="1.5" cy="7.5" r="1.5" /><circle cx="14.5" cy="7.5" r="1.5" /></svg>
              </button>
            </td>
          </tr>

          @php
            }
          @endphp

        </tbody>
      </table>
    </div>
  </div>

  <nav class="pagination " aria-label="Pagination" style="display:none;">
    <ol class="pagination__list flex flex-wrap gap-xxxs justify-center margin-top-xxl margin-bottom-xxl">
      <li>
        <a href="#0" class="pagination__item pagination__item--disabled" aria-label="Go to previous page">
          <svg class="icon margin-right-xxxs" aria-hidden="true" viewBox="0 0 16 16"><title>Previous</title><g stroke-width="1" stroke="currentColor"><polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="9.5,3.5 5,8 9.5,12.5 "></polyline></g></svg>
          <span>Prev</span>
        </a>
      </li>

      <li class="display@sm">
        <a href="#0" class="pagination__item" aria-label="Go to page 1">1</a>
      </li>

      <li class="display@sm">
        <a href="#0" class="pagination__item" aria-label="Go to page 2">2</a>
      </li>

      <li class="display@sm">
        <a href="#0" class="pagination__item pagination__item--selected" aria-label="Current Page, page 3" aria-current="page">3</a>
      </li>

      <li class="display@sm">
        <a href="#0" class="pagination__item" aria-label="Go to page 4">4</a>
      </li>

      <li class="display@sm" aria-hidden="true">
        <span class="pagination__item pagination__item--ellipsis">...</span>
      </li>

      <li class="display@sm">
        <a href="#0" class="pagination__item" aria-label="Go to page 20">20</a>
      </li>

      <li>
        <a href="#0" class="pagination__item" aria-label="Go to next page">
          <span>Next</span>
          <svg class="icon margin-left-xxxs" aria-hidden="true" viewBox="0 0 16 16"><title>Next</title><g stroke-width="1" stroke="currentColor"><polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6.5,3.5 11,8 6.5,12.5 "></polyline></g></svg>
        </a>
      </li>
    </ol>
  </nav>

  <menu id="menu-example" class="menu js-menu">
    <li role="menuitem">
      <span class="menu__content js-menu__content">
        <svg class="icon menu__icon" aria-hidden="true" viewBox="0 0 12 12"><path d="M10.121.293a1,1,0,0,0-1.414,0L1,8,0,12l4-1,7.707-7.707a1,1,0,0,0,0-1.414Z"></path></svg>
        <span>Edit</span>
      </span>
    </li>

    <li role="menuitem">
      <span class="menu__content js-menu__content">
        <svg class="icon menu__icon" aria-hidden="true" viewBox="0 0 16 16"><path d="M15,4H1C0.4,4,0,4.4,0,5v10c0,0.6,0.4,1,1,1h14c0.6,0,1-0.4,1-1V5C16,4.4,15.6,4,15,4z M14,14H2V6h12V14z"></path><rect x="2" width="12" height="2"></rect></svg>
        <span>Suspend</span>
      </span>
    </li>

    <li role="menuitem">
      <span class="menu__content js-menu__content">
        <svg class="icon menu__icon" aria-hidden="true" viewBox="0 0 12 12"><path d="M8.354,3.646a.5.5,0,0,0-.708,0L6,5.293,4.354,3.646a.5.5,0,0,0-.708.708L5.293,6,3.646,7.646a.5.5,0,0,0,.708.708L6,6.707,7.646,8.354a.5.5,0,1,0,.708-.708L6.707,6,8.354,4.354A.5.5,0,0,0,8.354,3.646Z"></path><path d="M6,0a6,6,0,1,0,6,6A6.006,6.006,0,0,0,6,0ZM6,10a4,4,0,1,1,4-4A4,4,0,0,1,6,10Z"></path></svg>
        <span>Delete</span>
      </span>
    </li>
  </menu>


@endsection
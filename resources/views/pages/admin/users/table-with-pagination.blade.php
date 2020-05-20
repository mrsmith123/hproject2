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
      <form action="{{action('UserController@index')}}" method="GET">
        <input type="hidden" name="q" value="{{$q}}">
        <input type="hidden" name="sort" value="{{$sort}}">
        <input type="hidden" name="order" value="{{$order}}">

        <label class="form-label" for="site-table-limit"></label>

        <div class="select inline-block js-select" data-trigger-class="btn btn--subtle padding-sm">
          <select name="limit" id="site-table-limit">
            <optgroup label="Amount to show">
              @foreach($availableLimit as $amount)
                <option value="{{$amount}}" @if($limit == $amount) selected @endif>Show {{$amount}}</option>
              @endforeach
            </optgroup>
          </select>

          <svg class="icon icon--xs margin-left-xxxs" aria-hidden="true" viewBox="0 0 16 16"><polygon points="3,5 8,11 13,5 "></polygon></svg>
        </div><!-- /.js-select -->
      </form>
    </div>

    <div class="search-input search-input--icon-right container max-width-xxxs">
      <form action="{{action('UserController@index')}}" method="GET">
        <input type="hidden" name="limit" value="{{$limit}}">
        <input type="hidden" name="sort" value="{{$sort}}">
        <input type="hidden" name="order" value="{{$order}}">

        <input class="form-control width-100%" type="search" name="q" id="searchInputX" placeholder="Search..." value="{{$q}}" aria-label="Search">
        <button class="search-input__btn">
          <svg class="icon" viewBox="0 0 24 24"><title>Submit</title><g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" stroke="currentColor" fill="none" stroke-miterlimit="10"><line x1="22" y1="22" x2="15.656" y2="15.656"></line><circle cx="10" cy="10" r="8"></circle></g></svg>
        </button>
      </form>
    </div>
  </div><!-- /.flex flex-wrap gap-sm margin-bottom-xxl margin-top-xxxs -->

  <div class="int-table__inner" id="site-table-container">
    <table class="int-table__table" aria-label="Interactive table example">
      <thead class="int-table__header js-int-table__header">
        <tr class="int-table__row">
          <td class="int-table__cell">
            <div class="custom-checkbox int-table__checkbox">
              <input class="custom-checkbox__input js-int-table__select-all" type="checkbox" aria-label="Select all rows"/>
              <div class="custom-checkbox__control" aria-hidden="true"></div>
            </div>
          </td>

          <th class="int-table__cell int-table__cell--th int-table__cell--sort  js-int-table__cell--sort @if($sort == 'id') int-table__cell--{{$order}} @endif" data-sort="id">
            <div class="flex items-center">
              <span>ID</span>

              <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12"><polygon class="arrow-up" points="6 0 10 5 2 5 6 0"/><polygon class="arrow-down" points="6 12 2 7 10 7 6 12"/></svg>
            </div>

            <ul class="sr-only js-int-table__sort-list">
              <li>
                <input type="radio" name="sortingId" id="sortingIdNone" value="none">
                <label for="sortingIdNone">No sorting</label>
              </li>

              <li>
                <input type="radio" name="sortingId" id="sortingIdAsc" value="asc"
                  @if($sort == "id" && $order == 'asc')
                    checked
                  @endif
                >
                <label for="sortingIdAsc">Sort in ascending order</label>
              </li>

              <li>
                <input type="radio" name="sortingId" id="sortingIdDes" value="desc"
                  @if($sort == "id" && $order == 'desc')
                    checked
                  @endif
                >
                <label for="sortingIdDes">Sort in descending order</label>
              </li>
            </ul>
          </th>

          <th class="int-table__cell int-table__cell--th int-table__cell--sort  js-int-table__cell--sort @if($sort == 'name') int-table__cell--{{$order}} @endif" data-sort="name">
            <div class="flex items-center">
              <span>Name</span>

              <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12"><polygon class="arrow-up" points="6 0 10 5 2 5 6 0"/><polygon class="arrow-down" points="6 12 2 7 10 7 6 12"/></svg>
            </div>

            <ul class="sr-only js-int-table__sort-list">
              <li>
                <input type="radio" name="sortingName" id="sortingNameNone" value="none">
                <label for="sortingNameNone">No sorting</label>
              </li>

              <li>
                <input type="radio" name="sortingName" id="sortingNameAsc" value="asc"
                  @if($sort == "name" && $order == 'asc')
                    checked
                  @endif
                >
                <label for="sortingNameAsc">Sort in ascending order</label>
              </li>

              <li>
                <input type="radio" name="sortingName" id="sortingNameDes" value="desc"
                  @if($sort == "name" && $order == 'desc')
                    checked
                  @endif
                >
                <label for="sortingNameDes">Sort in descending order</label>
              </li>
            </ul>
          </th>

          <th class="int-table__cell int-table__cell--th int-table__cell--sort  js-int-table__cell--sort @if($sort == 'email') int-table__cell--{{$order}} @endif" data-sort="email">
            <div class="flex items-center">
              <span>Email</span>

              <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12"><polygon class="arrow-up" points="6 0 10 5 2 5 6 0"/><polygon class="arrow-down" points="6 12 2 7 10 7 6 12"/></svg>
            </div>

            <ul class="sr-only js-int-table__sort-list">
              <li>
                <input type="radio" name="sortingEmail" id="sortingEmailNone" value="none">
                <label for="sortingEmailNone">No sorting</label>
              </li>

              <li>
                <input type="radio" name="sortingEmail" id="sortingEmailAsc" value="asc"
                  @if($sort == "email" && $order == 'asc')
                    checked
                  @endif
                >
                <label for="sortingEmailAsc">Sort in ascending order</label>
              </li>

              <li>
                <input type="radio" name="sortingEmail" id="sortingEmailDes" value="desc"
                  @if($sort == "email" && $order == 'desc')
                    checked
                  @endif
                >
                <label for="sortingEmailDes">Sort in descending order</label>
              </li>
            </ul>
          </th>

          <th class="int-table__cell int-table__cell--th text-left">Username</th>
          <th class="int-table__cell int-table__cell--th text-left">Role</th>

          <th class="int-table__cell int-table__cell--th int-table__cell--sort  js-int-table__cell--sort @if($sort == 'created_at') int-table__cell--{{$order}} @endif" data-sort="created_at" data-date-format="d/m/Y">
            <div class="flex items-center">
              <span>Date</span>

              <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12"><polygon class="arrow-up" points="6 0 10 5 2 5 6 0"/><polygon class="arrow-down" points="6 12 2 7 10 7 6 12"/></svg>
            </div>

            <ul class="sr-only js-int-table__sort-list">
              <li>
                <input type="radio" name="sortingDate" id="sortingDateNone" value="none">
                <label for="sortingDateNone">No sorting</label>
              </li>

              <li>
                <input type="radio" name="sortingDate" id="sortingDateAsc" value="asc"
                  @if($sort == "created_at" && $order == 'asc')
                    checked
                  @endif
                >
                <label for="sortingDateAsc">Sort in ascending order</label>
              </li>

              <li>
                <input type="radio" name="sortingDate" id="sortingDateDes" value="desc"
                  @if($sort == "created_at" && $order == 'desc')
                    checked
                  @endif
                >
                <label for="sortingDateDes">Sort in descending order</label>
              </li>
            </ul>
          </th>

          <th class="int-table__cell int-table__cell--th int-table__cell--sort  js-int-table__cell--sort @if($sort == 'status') int-table__cell--{{$order}} @endif" data-sort="status">
            <div class="flex items-center">
              <span>Status</span>

              <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12"><polygon class="arrow-up" points="6 0 10 5 2 5 6 0"/><polygon class="arrow-down" points="6 12 2 7 10 7 6 12"/></svg>
            </div>

            <ul class="sr-only js-int-table__sort-list">
              <li>
                <input type="radio" name="sortingStatus" id="sortingStatusNone" value="none">
                <label for="sortingStatusNone">No sorting</label>
              </li>

              <li>
                <input type="radio" name="sortingStatus" id="sortingStatusAsc" value="asc"
                  @if($sort == "status" && $order == 'asc')
                    checked
                  @endif
                >
                <label for="sortingStatusAsc">Sort in ascending order</label>
              </li>

              <li>
                <input type="radio" name="sortingStatus" id="sortingStatusDes" value="desc"
                  @if($sort == "status" && $order == 'desc')
                    checked
                  @endif
                >
                <label for="sortingStatusDes">Sort in descending order</label>
              </li>
            </ul>
          </th>

          <th class="int-table__cell int-table__cell--th text-right">Action</th>
        </tr>
      </thead>

      <tbody class="int-table__body js-int-table__body" id="site-table-body">
        @php
          foreach($users as $key => $user){
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
          <td class="int-table__cell max-width-xxxxs">{{$user->status}}</td>
          <td class="int-table__cell">
            <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-table-row-{{$user->id}}">
              <svg class="icon" viewBox="0 0 16 16"><circle cx="8" cy="7.5" r="1.5" /><circle cx="1.5" cy="7.5" r="1.5" /><circle cx="14.5" cy="7.5" r="1.5" /></svg>
            </button>
            <menu id="menu-table-row-{{$user->id}}" class="menu js-menu">
              <li role="menuitem">
                <a href="{{url('admin/users/edit/'.$user->id)}}" class="menu__content js-menu__content">
                  <svg class="icon menu__icon" aria-hidden="true" viewBox="0 0 12 12"><path d="M10.121.293a1,1,0,0,0-1.414,0L1,8,0,12l4-1,7.707-7.707a1,1,0,0,0,0-1.414Z"></path></svg>
                  <span>Edit</span>
                </a>
              </li>

              @php
                $accountStatus = [
                  'slug' => 'suspend',
                  'text' => 'Suspend',
                ];

                if($user->permission <= 0){
                  $accountStatus = [
                    'slug' => 'activate',
                    'text' => 'Activate',
                  ];
                }
              @endphp

              <li role="menuitem">
                <a href="{{url('admin/users/'.$accountStatus['slug'].'/'.$user->id)}}" class="menu__content js-menu__content">
                  <svg class="icon menu__icon" aria-hidden="true" viewBox="0 0 16 16"><path d="M15,4H1C0.4,4,0,4.4,0,5v10c0,0.6,0.4,1,1,1h14c0.6,0,1-0.4,1-1V5C16,4.4,15.6,4,15,4z M14,14H2V6h12V14z"></path><rect x="2" width="12" height="2"></rect></svg>
                  <span>{{$accountStatus['text']}}</span>
                </a>
              </li>

              <li role="menuitem">
                <a href="{{url('admin/users/delete/'.$user->id)}}" class="menu__content js-menu__content">
                  <svg class="icon menu__icon" aria-hidden="true" viewBox="0 0 12 12"><path d="M8.354,3.646a.5.5,0,0,0-.708,0L6,5.293,4.354,3.646a.5.5,0,0,0-.708.708L5.293,6,3.646,7.646a.5.5,0,0,0,.708.708L6,6.707,7.646,8.354a.5.5,0,1,0,.708-.708L6.707,6,8.354,4.354A.5.5,0,0,0,8.354,3.646Z"></path><path d="M6,0a6,6,0,1,0,6,6A6.006,6.006,0,0,0,6,0ZM6,10a4,4,0,1,1,4-4A4,4,0,0,1,6,10Z"></path></svg>
                  <span>Delete</span>
                </a>
              </li>
            </menu>
          </td>
        </tr>

        @php
          }
        @endphp
      </tbody>
    </table><!-- /.int-table__table -->
  </div><!-- /#site-table-container -->

</div><!-- /.int-table int-table--sticky-header text-sm js-int-table container max-width-adaptive-lg margin-top-xxxl -->

<div class="site-table-pagination-ajax">
  {{ $users->onEachSide(5)->withQueryString()->links('vendor.pagination.codyhouse') }}
</div><!-- /.site-table-pagination -->

<!-- Re-initialized utl and menu component if the request is ajax -->
@if(Request::ajax())
  <script src="{{ asset('assets/js/util.js') }}"></script>
  <script src="{{ asset('assets/js/components/_1_menu.js') }}"></script>
  <script src="{{ asset('assets/js/components/_2_interactive-table.js') }}"></script>
  <script src="{{ asset('assets/js/components/_1_custom-select.js') }}"></script>
@endif
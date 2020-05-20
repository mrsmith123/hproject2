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

<!-- Re-initialized utl and menu component if the request is ajax -->
@if(Request::ajax())
  <script src="{{ asset('assets/js/util.js') }}"></script>
  <script src="{{ asset('assets/js/components/_1_menu.js') }}"></script>
@endif
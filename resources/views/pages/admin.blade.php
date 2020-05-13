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

    <div class="flex flex-wrap gap-sm margin-bottom-xxl margin-top-xxxs">
        <button class="btn btn--primary">Delete<span class="counter counter--light margin-left-xxs">12 <i class="sr-only">Notifications</i></span></button>
        <button class="btn btn--subtle">Suspend<span class="counter counter--dark margin-left-xxs">12 <i class="sr-only">Notifications</i></span></button>
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
  
            <th class="int-table__cell int-table__cell--th text-left">
              Status
            </th>
  
            <th class="int-table__cell int-table__cell--th int-table__cell--sort  js-int-table__cell--sort" data-date-format="dd-mm-yyyy">
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
  
            <th class="int-table__cell int-table__cell--th text-left">Username</th>
            <th class="int-table__cell int-table__cell--th text-right">Action</th>
          </tr>
        </thead>
        
        <tbody class="int-table__body js-int-table__body">
          <tr class="int-table__row">
            <th class="int-table__cell" scope="row">
              <div class="custom-checkbox int-table__checkbox">
                <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row"/>
                <div class="custom-checkbox__control" aria-hidden="true"></div>
              </div>
            </th>
            <td class="int-table__cell">1</td>
            <td class="int-table__cell"><a href="#0">Bryony Mcmillan</a></td>
            <td class="int-table__cell">r.email@email.com</td>
            <td class="int-table__cell max-width-xxxxs">Active</td>
            <td class="int-table__cell">01/01/2021</td>
            <td class="int-table__cell">Hungary</td>
            <td class="int-table__cell">
              <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example">
                <svg class="icon" viewBox="0 0 16 16"><circle cx="8" cy="7.5" r="1.5" /><circle cx="1.5" cy="7.5" r="1.5" /><circle cx="14.5" cy="7.5" r="1.5" /></svg>
              </button>
            </td>
          </tr>
  
          <tr class="int-table__row">
            <th class="int-table__cell" scope="row">
              <div class="custom-checkbox int-table__checkbox">
                <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row"/>
                <div class="custom-checkbox__control" aria-hidden="true"></div>
              </div>
            </th>
            <td class="int-table__cell">2</td>
            <td class="int-table__cell"><a href="#0">Hetty Maxwell</a></td>
            <td class="int-table__cell">f.email@email.com</td>
            <td class="int-table__cell max-width-xxxxs">Active</td>
            <td class="int-table__cell">11/10/2020</td>
            <td class="int-table__cell">United Kingdom</td>
            <td class="int-table__cell">
              <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example">
                <svg class="icon" viewBox="0 0 16 16"><circle cx="8" cy="7.5" r="1.5" /><circle cx="1.5" cy="7.5" r="1.5" /><circle cx="14.5" cy="7.5" r="1.5" /></svg>
              </button>
            </td>
          </tr>
  
          <tr class="int-table__row">
            <th class="int-table__cell" scope="row">
              <div class="custom-checkbox int-table__checkbox">
                <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row"/>
                <div class="custom-checkbox__control" aria-hidden="true"></div>
              </div>
            </th>
            <td class="int-table__cell">3</td>
            <td class="int-table__cell"><a href="#0">Honey Leblanc</a></td>
            <td class="int-table__cell">v.email@email.com</td>
            <td class="int-table__cell max-width-xxxxs">Active</td>
            <td class="int-table__cell">17/09/2020</td>
            <td class="int-table__cell">Maldives</td>
            <td class="int-table__cell">
              <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example">
                <svg class="icon" viewBox="0 0 16 16"><circle cx="8" cy="7.5" r="1.5" /><circle cx="1.5" cy="7.5" r="1.5" /><circle cx="14.5" cy="7.5" r="1.5" /></svg>
              </button>
            </td>
          </tr>
  
          <tr class="int-table__row">
            <th class="int-table__cell" scope="row">
              <div class="custom-checkbox int-table__checkbox">
                <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row"/>
                <div class="custom-checkbox__control" aria-hidden="true"></div>
              </div>
            </th>
            <td class="int-table__cell">4</td>
            <td class="int-table__cell"><a href="#0">Maira Hodges</a></td>
            <td class="int-table__cell">a.email@email.com</td>
            <td class="int-table__cell max-width-xxxxs">Suspended</td>
            <td class="int-table__cell">04/08/2020</td>
            <td class="int-table__cell">Iceland</td>
            <td class="int-table__cell">
              <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example">
                <svg class="icon" viewBox="0 0 16 16"><circle cx="8" cy="7.5" r="1.5" /><circle cx="1.5" cy="7.5" r="1.5" /><circle cx="14.5" cy="7.5" r="1.5" /></svg>
              </button>
            </td>
          </tr>
  
          <tr class="int-table__row">
            <th class="int-table__cell" scope="row">
              <div class="custom-checkbox int-table__checkbox">
                <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row"/>
                <div class="custom-checkbox__control" aria-hidden="true"></div>
              </div>
            </th>
            <td class="int-table__cell">5</td>
            <td class="int-table__cell"><a href="#0">Nigel Lang</a></td>
            <td class="int-table__cell">g.email@email.com</td>
            <td class="int-table__cell max-width-xxxxs">Active</td>
            <td class="int-table__cell">03/07/2020</td>
            <td class="int-table__cell">Italy</td>
            <td class="int-table__cell">
              <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example">
                <svg class="icon" viewBox="0 0 16 16"><circle cx="8" cy="7.5" r="1.5" /><circle cx="1.5" cy="7.5" r="1.5" /><circle cx="14.5" cy="7.5" r="1.5" /></svg>
              </button>
            </td>
          </tr>
  
          <tr class="int-table__row">
            <th class="int-table__cell" scope="row">
              <div class="custom-checkbox int-table__checkbox">
                <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row"/>
                <div class="custom-checkbox__control" aria-hidden="true"></div>
              </div>
            </th>
            <td class="int-table__cell">6</td>
            <td class="int-table__cell"><a href="#0">Saif Acevedo</a></td>
            <td class="int-table__cell">l.email@email.com</td>
            <td class="int-table__cell max-width-xxxxs">Suspended</td>
            <td class="int-table__cell">21/05/2020</td>
            <td class="int-table__cell">Argentina</td>
            <td class="int-table__cell">
              <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example">
                <svg class="icon" viewBox="0 0 16 16"><circle cx="8" cy="7.5" r="1.5" /><circle cx="1.5" cy="7.5" r="1.5" /><circle cx="14.5" cy="7.5" r="1.5" /></svg>
              </button>
            </td>
          </tr>
  
          <tr class="int-table__row">
            <th class="int-table__cell" scope="row">
              <div class="custom-checkbox int-table__checkbox">
                <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row"/>
                <div class="custom-checkbox__control" aria-hidden="true"></div>
              </div>
            </th>
            <td class="int-table__cell">7</td>
            <td class="int-table__cell"><a href="#0">Isaak O'Gallagher</a></td>
            <td class="int-table__cell">b.email@email.com</td>
            <td class="int-table__cell max-width-xxxxs">Active</td>
            <td class="int-table__cell">11/04/2020</td>
            <td class="int-table__cell">Maldives</td>
            <td class="int-table__cell">
              <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example">
                <svg class="icon" viewBox="0 0 16 16"><circle cx="8" cy="7.5" r="1.5" /><circle cx="1.5" cy="7.5" r="1.5" /><circle cx="14.5" cy="7.5" r="1.5" /></svg>
              </button>
            </td>
          </tr>
  
          <tr class="int-table__row">
            <th class="int-table__cell" scope="row">
              <div class="custom-checkbox int-table__checkbox">
                <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row"/>
                <div class="custom-checkbox__control" aria-hidden="true"></div>
              </div>
            </th>
            <td class="int-table__cell">8</td>
            <td class="int-table__cell"><a href="#0">Lucille Arias</a></td>
            <td class="int-table__cell">m.email@email.com</td>
            <td class="int-table__cell max-width-xxxxs">Active</td>
            <td class="int-table__cell">05/03/2020</td>
            <td class="int-table__cell">Thailand</td>
            <td class="int-table__cell">
              <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example">
                <svg class="icon" viewBox="0 0 16 16"><circle cx="8" cy="7.5" r="1.5" /><circle cx="1.5" cy="7.5" r="1.5" /><circle cx="14.5" cy="7.5" r="1.5" /></svg>
              </button>
            </td>
          </tr>
  
          <tr class="int-table__row">
            <th class="int-table__cell" scope="row">
              <div class="custom-checkbox int-table__checkbox">
                <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row"/>
                <div class="custom-checkbox__control" aria-hidden="true"></div>
              </div>
            </th>
            <td class="int-table__cell">9</td>
            <td class="int-table__cell"><a href="#0">Kendall Rankin</a></td>
            <td class="int-table__cell">e.email@email.com</td>
            <td class="int-table__cell max-width-xxxxs">Active</td>
            <td class="int-table__cell">02/02/2020</td>
            <td class="int-table__cell">Austria</td>
            <td class="int-table__cell">
              <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example">
                <svg class="icon" viewBox="0 0 16 16"><circle cx="8" cy="7.5" r="1.5" /><circle cx="1.5" cy="7.5" r="1.5" /><circle cx="14.5" cy="7.5" r="1.5" /></svg>
              </button>
            </td>
          </tr>
  
          <tr class="int-table__row">
            <th class="int-table__cell" scope="row">
              <div class="custom-checkbox int-table__checkbox">
                <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row"/>
                <div class="custom-checkbox__control" aria-hidden="true"></div>
              </div>
            </th>
            <td class="int-table__cell">10</td>
            <td class="int-table__cell"><a href="#0">Raihan Boone</a></td>
            <td class="int-table__cell">c.email@email.com</td>
            <td class="int-table__cell max-width-xxxxs">Active</td>
            <td class="int-table__cell">01/01/2020</td>
            <td class="int-table__cell">USA</td>
            <td class="int-table__cell">
              <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example">
                <svg class="icon" viewBox="0 0 16 16"><circle cx="8" cy="7.5" r="1.5" /><circle cx="1.5" cy="7.5" r="1.5" /><circle cx="14.5" cy="7.5" r="1.5" /></svg>
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  
  <nav class="pagination " aria-label="Pagination">
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
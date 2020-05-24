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

            <menu class="menu-bar menu-bar--expanded@md js-menu-bar">

                <li class="menu-bar__item" aria-controls="modal-full-width" role="menuitem">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><title>pencil</title><rect data-element="frame" x="9.600000000000001" y="9.600000000000001" width="28.799999999999997" height="28.799999999999997" rx="6" ry="6" stroke="none" fill="#0d9eec"></rect><g transform="translate(14.399999999999999 14.399999999999999) scale(0.4)" fill="#ffffff"><path fill="#ffffff" d="M43.7,8.6l-4.3-4.3c-0.9-0.9-2.2-1.5-3.5-1.5c-1.3,0-2.6,0.5-3.5,1.5L5.1,31.5C5,31.6,5,31.7,4.9,31.8 c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1l-2,12c-0.1,0.3,0.1,0.6,0.3,0.9c0.2,0.2,0.4,0.3,0.7,0.3c0.1,0,0.1,0,0.2,0l12-2c0,0,0.1,0,0.1,0 c0,0,0.1,0,0.1,0c0.1,0,0.2-0.1,0.3-0.2l27.2-27.2C45.7,13.8,45.7,10.6,43.7,8.6z M9.3,42.2l-3.6-3.6l0.7-4.4l7.3,7.3L9.3,42.2z M30.7,18.7L14.4,35c-0.2,0.2-0.5,0.3-0.7,0.3c-0.3,0-0.5-0.1-0.7-0.3c-0.4-0.4-0.4-1,0-1.4l16.3-16.3c0.4-0.4,1-0.4,1.4,0 S31.1,18.3,30.7,18.7z M37.8,18.8l-8.6-8.6l2.6-2.6l8.6,8.6L37.8,18.8z"></path></g></svg>
                    <span class="menu-bar__label">Add</span>
                  </li>
              
                <li class="menu-bar__item" role="menuitem">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>single-folded-content</title><g fill="#bfbfbf"><path fill="#bfbfbf" d="M15,0H2C1.448,0,1,0.448,1,1v22c0,0.552,0.448,1,1,1h20c0.552,0,1-0.448,1-1V8h-7c-0.552,0-1-0.448-1-1V0z M5,17h14v2H5V17z M5,12h14v2H5V12z M11,9H5V7h6V9z"></path> <polygon points="22.414,6 17,6 17,0.586 "></polygon></g></svg>
                  <span class="counter counter--critical counter--docked">4 <i class="sr-only">Notifications</i></span>
                  <span class="menu-bar__label">Draft</span>
                </li>
              
                <li class="menu-bar__item" role="menuitem">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>trash-simple</title><g fill="#bfbfbf"><path fill="#bfbfbf" d="M3,8v15c0,0.552,0.448,1,1,1h16c0.552,0,1-0.448,1-1V8H3z M9,19H7v-6h2V19z M13,19h-2v-6h2V19z M17,19h-2v-6 h2V19z"></path> <path d="M23,4h-6V1c0-0.552-0.447-1-1-1H8C7.447,0,7,0.448,7,1v3H1C0.447,4,0,4.448,0,5s0.447,1,1,1 h22c0.553,0,1-0.448,1-1S23.553,4,23,4z M9,2h6v2H9V2z"></path></g></svg>
                  <span class="counter counter--critical counter--docked">4 <i class="sr-only">Notifications</i></span>
                  <span class="menu-bar__label">Delete</span>
                </li>

                <li class="menu-bar__item" aria-controls="modal-search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>zoom-2</title><g fill="#bfbfbf"><path fill="#bfbfbf" d="M1.29 19.88l4.37-4.37a9.93 9.93 0 0 1-1.66-5.51c0-5.51 4.49-10 10-10s10 4.49 10 10-4.49 10-10 10a9.93 9.93 0 0 1-5.51-1.66l-4.37 4.37a1 1 0 0 1-1.41 0l-1.42-1.42a1 1 0 0 1 0-1.41z m20.71-9.88c0-4.41-3.59-8-8-8s-8 3.59-8 8 3.59 8 8 8 8-3.59 8-8z"></path></g></svg>
                        <span class="menu-bar__label">Search</span>
                      </g>
                    </svg>
                </li>

                <li class="menu-bar__item hide@md no-js:is-hidden" aria-controls="sidebar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>ic_menu_24px</title>
                        <g fill="#bfbfbf">
                            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                        </g>
                    </svg>
                        <span class="menu-bar__label">Sidebar</span>
                      </g>
                    </svg>
                </li>

              </menu>
    
                  <div class="modal modal--search modal--animate-fade flex flex-center padding-md js-modal" id="modal-search">
                    <div class="modal__content width-100% max-width-sm" role="alertdialog" aria-labelledby="modal-search-title" aria-describedby="">
                      <form class="full-screen-search">
                        <label for="search-input-x" id="modal-search-title" class="sr-only">Search</label>
                        <input class="reset full-screen-search__input" type="search" name="search-input-x" id="search-input-x" placeholder="Search...">
                        <button class="reset full-screen-search__btn">
                          <svg class="icon" viewBox="0 0 24 24">
                            <title>Search</title>
                            <g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" stroke="currentColor" fill="none" stroke-miterlimit="10">
                              <line x1="22" y1="22" x2="15.656" y2="15.656"></line>
                              <circle cx="10" cy="10" r="8"></circle>
                            </g>
                          </svg>
                        </button>
                      </form>
                    </div>
                  
                    <button class="reset modal__close-btn modal__close-btn--outer  js-modal__close js-tab-focus">
                      <svg class="icon icon--sm" viewBox="0 0 24 24">
                        <title>Close modal window</title>
                        <g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2">
                          <line x1="3" y1="3" x2="21" y2="21" />
                          <line x1="21" y1="3" x2="3" y2="21" />
                        </g>
                      </svg>
                    </button>
                  </div>

          </nav>
        </div>
      </div>
    </div>
  </div>

  <section class="padding-y">
    <div class="container max-width-lg">
      <div class="text-component text-center margin-bottom-lg">
      </div>
  
      <div class="grid gap-lg@lg">
        <aside class="sidebar sidebar--static@md col-3@md js-sidebar" data-static-class="sidebar--sticky-on-desktop z-index-1" id="sidebar" aria-labelledby="sidebarTitle">
          <div class="sidebar__panel">
            <header class="sidebar__header z-index-2">
              <h1 class="text-md text-truncate" id="sidebarTitle">Sidebar title</h1>
        
              <button class="reset sidebar__close-btn js-sidebar__close-btn js-tab-focus">
                <svg class="icon" viewBox="0 0 16 16"><title>Close panel</title><g stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"><line x1="13.5" y1="2.5" x2="2.5" y2="13.5"></line><line x1="2.5" y1="2.5" x2="13.5" y2="13.5"></line></g></svg>
              </button>
            </header>
        
            <div class="position-relative z-index-1">
              <!-- start sidebar content -->
              <aside class="bg border-right-sidebar padding-right-sm">
                <nav class="sidenav js-sidenav">
                  <div class="sidenav__label">Main</div>
                  
                  <ul class="sidenav__list">
                    <li class="sidenav__item">
                      <a href="#0" class="sidenav__link">
                        <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16"><g><path d="M6,0H1C0.4,0,0,0.4,0,1v5c0,0.6,0.4,1,1,1h5c0.6,0,1-0.4,1-1V1C7,0.4,6.6,0,6,0z M5,5H2V2h3V5z"></path><path d="M15,0h-5C9.4,0,9,0.4,9,1v5c0,0.6,0.4,1,1,1h5c0.6,0,1-0.4,1-1V1C16,0.4,15.6,0,15,0z M14,5h-3V2h3V5z"></path><path d="M6,9H1c-0.6,0-1,0.4-1,1v5c0,0.6,0.4,1,1,1h5c0.6,0,1-0.4,1-1v-5C7,9.4,6.6,9,6,9z M5,14H2v-3h3V14z"></path><path d="M15,9h-5c-0.6,0-1,0.4-1,1v5c0,0.6,0.4,1,1,1h5c0.6,0,1-0.4,1-1v-5C16,9.4,15.6,9,15,9z M14,14h-3v-3h3V14z"></path></g></svg>
                        <span class="sidenav__text">Published</span>
              
                        <span class="sidenav__counter">12 <i class="sr-only">notifications</i></span>
                      </a>
              
                      <button class="reset sidenav__sublist-control js-sidenav__sublist-control js-tab-focus" aria-label="Toggle sub navigation">
                        <svg class="icon" viewBox="0 0 12 12"><polygon points="4 3 8 6 4 9 4 3"/></svg>
                      </button>
              
                      <ul class="sidenav__list">
                        <li class="sidenav__item">
                          <a href="#0" class="sidenav__link">
                            <span class="sidenav__text">New widget</span>
                          </a>
                        </li>
              
                        <li class="sidenav__item">
                          <a href="#0" class="sidenav__link">
                            <span class="sidenav__text">Analytics</span>
                          </a>
                        </li>
                      </ul>
              
                    </li>
              
              
                    <li class="sidenav__item">
                      <a href="#0" class="sidenav__link">
                        <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16"><g><path d="M14,6.883V13H2V6.82L0,5.695V14c0,0.553,0.448,1,1,1h14c0.552,0,1-0.447,1-1V5.783L14,6.883z"></path><path d="M15,1H1C0.4,1,0,1.4,0,2v1.4l8,4.5l8-4.4V2C16,1.4,15.6,1,15,1z"></path></g></svg>
                        <span class="sidenav__text">Draft</span>
              
                        <span class="sidenav__counter">18 <i class="sr-only">notifications</i></span>
                      </a>
                    </li>

                    <li class="sidenav__item">
                        <a href="#0" class="sidenav__link">
                          <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16"><g><path d="M14,6.883V13H2V6.82L0,5.695V14c0,0.553,0.448,1,1,1h14c0.552,0,1-0.447,1-1V5.783L14,6.883z"></path><path d="M15,1H1C0.4,1,0,1.4,0,2v1.4l8,4.5l8-4.4V2C16,1.4,15.6,1,15,1z"></path></g></svg>
                          <span class="sidenav__text">Trash</span>
                
                          <span class="sidenav__counter">122 <i class="sr-only">notifications</i></span>
                        </a>
                      </li>

                  </ul>
              
                  <div class="sidenav__divider" role="presentation"></div>
              
                  <div class="sidenav__label">Other</div>
              
                  <ul class="sidenav__list">
                    <li class="sidenav__item">
                      <a href="#0" class="sidenav__link">
                        <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16"><g><circle cx="6" cy="8" r="2"></circle><path d="M10,2H6C2.7,2,0,4.7,0,8s2.7,6,6,6h4c3.3,0,6-2.7,6-6S13.3,2,10,2z M10,12H6c-2.2,0-4-1.8-4-4s1.8-4,4-4h4 c2.2,0,4,1.8,4,4S12.2,12,10,12z"></path></g></svg>
                        <span class="sidenav__text">Settings</span>
                      </a>
                    </li>
              
                    <li class="sidenav__item">
                      <a href="#0" class="sidenav__link">
                        <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16"><g><path d="M12.25,8.231C11.163,9.323,9.659,10,8,10S4.837,9.323,3.75,8.231C1.5,9.646,0,12.145,0,15v1h16 v-1C16,12.145,14.5,9.646,12.25,8.231z"></path><circle cx="8" cy="4" r="4"></circle></g></svg>
                        <span class="sidenav__text">Account</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </aside>
              <!-- end sidebar content -->
            </div>
          </div>
        </aside>
        
        <main class="position-relative z-index-1 col-12@md">
          <!-- start main content -->

          <div class="modal modal--animate-fade bg-contrast-higher bg-opacity-90% js-modal z-index-0" id="modal-full-width">
            <div class="modal__content bg height-100% flex flex-column" role="alertdialog" aria-labelledby="modal-title" aria-describedby="modal-description">
              <header class="bg-contrast-lower padding-y-sm padding-x-md flex items-center justify-between">

                <fieldset class="file-upload">
    <label for="upload2" class="file-upload__label btn btn--primary">
      <span class="flex items-center">
        <svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-width="2"><path  stroke-linecap="square" stroke-linejoin="miter" d="M2 16v6h20v-6"></path><path stroke-linejoin="miter" stroke-linecap="butt" d="M12 17V2"></path><path stroke-linecap="square" stroke-linejoin="miter" d="M18 8l-6-6-6 6"></path></g></svg>
        
        <span class="margin-left-xxs file-upload__text">Upload a Feature Image</span>
      </span>
    </label> 
  
    <input type="file" class="file-upload__input" name="upload2" id="upload2" multiple>
  </fieldset>
          
                <button class="reset modal__close-btn modal__close-btn--inner js-modal__close js-tab-focus">
                  <svg class="icon" viewBox="0 0 20 20">
                    <title>Close modal window</title>
                    <g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2">
                      <line x1="3" y1="3" x2="17" y2="17" />
                      <line x1="17" y1="3" x2="3" y2="17" />
                    </g>
                  </svg>
                </button>
              </header>
          
              <div class="padding-y-sm padding-x-md flex-grow overflow-auto">
                <div class="text-component v-space-md line-height-lg">
                  <p id="modal-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae culpa, inventore alias ab atque similique quod ea reprehenderit.</p>
          
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet accusantium provident nulla minus velit, voluptas voluptatem in libero hic quaerat saepe quae, labore, qui illo eum ullam ea. Repudiandae excepturi aut earum ipsa vitae modi, non eos hic? Atque fugit ullam est ab nam numquam id pariatur, esse voluptates, ipsa aperiam consequatur laboriosam perspiciatis. Nemo culpa reprehenderit tenetur alias dolor veritatis ducimus, numquam ipsa incidunt harum dolorem quod perspiciatis autem quis soluta, nobis assumenda aliquam perferendis ut commodi inventore sunt.</p>
          
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id sunt eaque, veniam voluptatibus tempore iusto fugiat magnam aliquid maiores cum! Alias debitis facere delectus! Nulla minus unde placeat neque nam quibusdam consequatur et! Eligendi, architecto quo atque ut sint, eaque id facere dignissimos error sed tempore. Ex nam possimus dolorem numquam at, dolore a itaque voluptas veritatis eaque temporibus ipsam nemo animi esse reprehenderit odio sint delectus sequi ullam aliquid qui praesentium nesciunt repudiandae. Ipsa architecto sunt repellendus error dolorem.</p>
          
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id sunt eaque, veniam voluptatibus tempore iusto fugiat magnam aliquid maiores cum! Alias debitis facere delectus! Nulla minus unde placeat neque nam quibusdam consequatur et! Eligendi, architecto quo atque ut sint, eaque id facere dignissimos error sed tempore. Ex nam possimus dolorem numquam at, dolore a itaque voluptas veritatis eaque temporibus ipsam nemo animi esse reprehenderit odio sint delectus sequi ullam aliquid qui praesentium nesciunt repudiandae. Ipsa architecto sunt repellendus error dolorem.</p>
          
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id sunt eaque, veniam voluptatibus tempore iusto fugiat magnam aliquid maiores cum! Alias debitis facere delectus! Nulla minus unde placeat neque nam quibusdam consequatur et! Eligendi, architecto quo atque ut sint, eaque id facere dignissimos error sed tempore. Ex nam possimus dolorem numquam at, dolore a itaque voluptas veritatis eaque temporibus ipsam nemo animi esse reprehenderit odio sint delectus sequi ullam aliquid qui praesentium nesciunt repudiandae. Ipsa architecto sunt repellendus error dolorem.</p>
          
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, aperiam. Doloribus nam perferendis earum at, modi ullam dolor voluptas quos? Autem explicabo, ab rerum mollitia, fugiat ipsam eligendi non eius ullam neque, atque at labore quisquam tempora id harum dolorum nisi quia molestias nam molestiae placeat laboriosam ipsa dolore. Veniam dicta temporibus sed cupiditate asperiores sunt labore minima velit id facere, delectus, mollitia ratione provident fugiat nulla distinctio in odit error tenetur eum! Est dolorum veritatis repudiandae excepturi iste adipisci at accusamus mollitia odit accusantium delectus deleniti recusandae consequuntur sunt dolores voluptatum dolor tempore modi consequatur numquam voluptates beatae non, optio hic. Similique sequi voluptas autem suscipit corrupti officia voluptatum sapiente, aliquam est odio praesentium. Doloribus fugit dolores voluptatum ad.</p>
                </div>
              </div>
          
              <footer class="padding-y-sm padding-x-md bg shadow-md">
                <div class="flex justify-end gap-xs">
                  <button class="btn btn--subtle js-modal__close">Cancel</button>
                  <button class="btn btn--primary">Trash</button>
                  <button class="btn btn--primary">Save</button>
                  <button class="btn btn--primary">Publish</button>
                </div>
              </footer>
            </div>
          
          </div>

          <div class="int-table text-sm js-int-table">
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
          
                    <th class="int-table__cell int-table__cell--th int-table__cell--sort js-int-table__cell--sort">
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
          
                    <th class="int-table__cell int-table__cell--th int-table__cell--sort js-int-table__cell--sort">
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
          
                    <th class="int-table__cell int-table__cell--th int-table__cell--sort js-int-table__cell--sort">
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
                      Description
                    </th>
          
                    <th class="int-table__cell int-table__cell--th int-table__cell--sort js-int-table__cell--sort" data-date-format="dd-mm-yyyy">
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
          
                    <th class="int-table__cell int-table__cell--th text-left">Location</th>
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
                    <td class="int-table__cell max-width-xxxxs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat eveniet nisi itaque!</td>
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
                    <td class="int-table__cell max-width-xxxxs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat eveniet nisi itaque!</td>
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
                    <td class="int-table__cell max-width-xxxxs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat eveniet nisi itaque!</td>
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
                    <td class="int-table__cell max-width-xxxxs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat eveniet nisi itaque!</td>
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
                    <td class="int-table__cell max-width-xxxxs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat eveniet nisi itaque!</td>
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
                    <td class="int-table__cell max-width-xxxxs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat eveniet nisi itaque!</td>
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
                    <td class="int-table__cell max-width-xxxxs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat eveniet nisi itaque!</td>
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
                    <td class="int-table__cell max-width-xxxxs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat eveniet nisi itaque!</td>
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
                    <td class="int-table__cell max-width-xxxxs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat eveniet nisi itaque!</td>
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
                    <td class="int-table__cell max-width-xxxxs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat eveniet nisi itaque!</td>
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
                <span>Copy</span>
              </span>
            </li>
          
            <li role="menuitem">
              <span class="menu__content js-menu__content">
                <svg class="icon menu__icon" aria-hidden="true" viewBox="0 0 12 12"><path d="M8.354,3.646a.5.5,0,0,0-.708,0L6,5.293,4.354,3.646a.5.5,0,0,0-.708.708L5.293,6,3.646,7.646a.5.5,0,0,0,.708.708L6,6.707,7.646,8.354a.5.5,0,1,0,.708-.708L6.707,6,8.354,4.354A.5.5,0,0,0,8.354,3.646Z"></path><path d="M6,0a6,6,0,1,0,6,6A6.006,6.006,0,0,0,6,0ZM6,10a4,4,0,1,1,4-4A4,4,0,0,1,6,10Z"></path></svg>
                <span>Delete</span>
              </span>
            </li>
          </menu>
          <!-- end main content -->
        </main>
      </div>
    </div>
  </section>
@endsection
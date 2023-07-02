   <!-- partial:partials/_settings-panel.html -->
   {{-- <div class="theme-setting-wrapper">
       <div id="settings-trigger"><i class="ti-settings"></i></div>
       <div id="theme-settings" class="settings-panel">
           <i class="settings-close ti-close"></i>
           <p class="settings-heading">SIDEBAR SKINS</p>
           <div class="sidebar-bg-options selected" id="sidebar-light-theme">
               <div class="img-ss rounded-circle bg-light border me-3"></div>Light
           </div>
           <div class="sidebar-bg-options" id="sidebar-dark-theme">
               <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
           </div>
           <p class="settings-heading mt-2">HEADER SKINS</p>
           <div class="color-tiles mx-0 px-4">
               <div class="tiles success"></div>
               <div class="tiles warning"></div>
               <div class="tiles danger"></div>
               <div class="tiles light"></div>
               <div class="tiles info"></div>
               <div class="tiles dark"></div>
               <div class="tiles default"></div>
           </div>
       </div>
   </div>
   <div id="right-sidebar" class="settings-panel">
       <i class="settings-close ti-close"></i>
       <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
           <li class="nav-item">
               <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab"
                   aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab"
                   aria-controls="chats-section">CHATS</a>
           </li>
       </ul>
       <div class="tab-content" id="setting-content">
           <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
               aria-labelledby="todo-section">
               <div class="add-items d-flex px-3 mb-0">
                   <form class="form w-100">
                       <div class="form-group d-flex">
                           <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                           <button type="submit" class="add btn btn-primary todo-list-add-btn"
                               id="add-task">Add</button>
                       </div>
                   </form>
               </div>
               <div class="list-wrapper px-3">
                   <ul class="d-flex flex-column-reverse todo-list">
                       <li>
                           <div class="form-check">
                               <label class="form-check-label">
                                   <input class="checkbox" type="checkbox">
                                   Team review meeting at 3.00 PM
                               </label>
                           </div>
                           <i class="remove ti-close"></i>
                       </li>
                       <li>
                           <div class="form-check">
                               <label class="form-check-label">
                                   <input class="checkbox" type="checkbox">
                                   Prepare for presentation
                               </label>
                           </div>
                           <i class="remove ti-close"></i>
                       </li>
                       <li>
                           <div class="form-check">
                               <label class="form-check-label">
                                   <input class="checkbox" type="checkbox">
                                   Resolve all the low priority tickets due today
                               </label>
                           </div>
                           <i class="remove ti-close"></i>
                       </li>
                       <li class="completed">
                           <div class="form-check">
                               <label class="form-check-label">
                                   <input class="checkbox" type="checkbox" checked>
                                   Schedule meeting for next week
                               </label>
                           </div>
                           <i class="remove ti-close"></i>
                       </li>
                       <li class="completed">
                           <div class="form-check">
                               <label class="form-check-label">
                                   <input class="checkbox" type="checkbox" checked>
                                   Project review
                               </label>
                           </div>
                           <i class="remove ti-close"></i>
                       </li>
                   </ul>
               </div>
               <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
               <div class="events pt-4 px-3">
                   <div class="wrapper d-flex mb-2">
                       <i class="ti-control-record text-primary me-2"></i>
                       <span>Feb 11 2018</span>
                   </div>
                   <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                   <p class="text-gray mb-0">build a js based app</p>
               </div>
               <div class="events pt-4 px-3">
                   <div class="wrapper d-flex mb-2">
                       <i class="ti-control-record text-primary me-2"></i>
                       <span>Feb 7 2018</span>
                   </div>
                   <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                   <p class="text-gray mb-0 ">Call Sarah Graves</p>
               </div>
           </div>
           <!-- To do section tab ends -->
           <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
               <div class="d-flex align-items-center justify-content-between border-bottom">
                   <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                   <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See
                       All</small>
               </div>
               <ul class="chat-list">
                   <li class="list active">
                       <div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span
                               class="online"></span></div>
                       <div class="info">
                           <p>Thomas Douglas</p>
                           <p>Available</p>
                       </div>
                       <small class="text-muted my-auto">19 min</small>
                   </li>
                   <li class="list">
                       <div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span
                               class="offline"></span></div>
                       <div class="info">
                           <div class="wrapper d-flex">
                               <p>Catherine</p>
                           </div>
                           <p>Away</p>
                       </div>
                       <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                       <small class="text-muted my-auto">23 min</small>
                   <li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.html">Sortable
                           table</a></li>
                   </li>
                   <li class="list">
                       <div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span
                               class="online"></span></div>
                       <div class="info">
                           <p>Daniel Russell</p>
                           <p>Available</p>
                       </div>
                       <small class="text-muted my-auto">14 min</small>
                   </li>
                   <li class="list">
                       <div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span
                               class="offline"></span></div>
                       <div class="info">
                           <p>James Richardson</p>
                           <p>Away</p>
                       </div>
                       <small class="text-muted my-auto">2 min</small>
                   </li>
                   <li class="list">
                       <div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span
                               class="online"></span></div>
                       <div class="info">
                           <p>Madeline Kennedy</p>
                           <p>Available</p>
                       </div>
                       <small class="text-muted my-auto">5 min</small>
                   </li>
                   <li class="list">
                       <div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span
                               class="online"></span></div>
                       <div class="info">
                           <p>Sarah Graves</p>
                           <p>Available</p>
                       </div>
                       <small class="text-muted my-auto">47 min</small>
                   </li>
               </ul>
           </div>
           <!-- chat tab ends -->
       </div>
   </div> --}}
   <!-- partial -->
   <!-- partial:partials/_sidebar.html -->
   <nav class="sidebar sidebar-offcanvas" id="sidebar">
       <ul class="nav">
           <li class="nav-item {{ Request::is(['/home']) ? 'active' : '' }}">
               <a class="nav-link" href="{{ URL::to('/home') }}">
                   <i class="mdi mdi-grid-large menu-icon"></i>
                   <span class="menu-title">Dashboard</span>
               </a>
           </li>

           <li class="nav-item nav-category">Layanaan</li>
           <li class="nav-item {{ Request::is(['aduan/*'])}}">
               <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                   aria-controls="ui-basic">
                   <i class="menu-icon mdi mdi-floor-plan"></i>
                   <span class="menu-title">Pengaduan</span>
                   <i class="menu-arrow"></i>
               </a>
               <div class="collapse" id="ui-basic">
                   <ul class="nav flex-column sub-menu">
                       <li class="nav-item {{ Request::is(['aduan/view']) ? 'active' : '' }}">
                           <a class="nav-link"
                               href="
                               {{ url('/aduan/view/') }}
                               ">Request</a>
                       </li>
                       <li class="nav-item {{ Request::is(['aduan/laporan']) ? 'active' : '' }}"> <a class="nav-link"
                               href="
                               {{ url('/aduan/report/') }}
                               ">Laporan</a>
                       </li>

                   </ul>
               </div>
           </li>


           <li class="nav-item">
               <a class="nav-link" data-bs-toggle="collapse" href="#ui-advanced" aria-expanded="false"
                   aria-controls="ui-advanced">
                   <i class="menu-icon mdi mdi-arrow-down-drop-circle-outline"></i>
                   <span class="menu-title">Permintaan</span>
                   <i class="menu-arrow"></i>
               </a>
               <div class="collapse" id="ui-advanced">
                   <ul class="nav flex-column sub-menu">
                       <li class="nav-item"> <a class="nav-link" href="{{ URL::to('/permintaan/view') }}">Request</a>
                       </li>
                       <li class="nav-item"> <a class="nav-link" href="{{ URL::to('/permintaan/report') }}">Laporan</a>
                       </li>
                   </ul>
               </div>
           </li>
           <li class="nav-item nav-category">Master Data</li>
           <li class="nav-item">
               <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false"
                   aria-controls="tables">
                   <i class="menu-icon mdi mdi-table"></i>
                   <span class="menu-title">User Management</span>
                   <i class="menu-arrow"></i>
               </a>
               <div class="collapse" id="tables">
                   <ul class="nav flex-column sub-menu">
                       <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">User Role</a>
                       </li>
                       <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Role</a>
                       </li>
                       <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Permission</a></li>

                   </ul>
               </div>
           </li>
           <li class="nav-item ">
               <a class="nav-link" data-bs-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
                   <i class="menu-icon mdi mdi-google-maps"></i>
                   <span class="menu-title">Lainnya</span>
                   <i class="menu-arrow"></i>
               </a>
               <div class="collapse" id="maps">
                   <ul class="nav flex-column sub-menu">
                       <li class="nav-item {{ Request::is(['status/*']) ? 'active' : '' }}"> <a class="nav-link"
                               href="{{ url('/status/view') }}">status</a></li>
                       <li class="nav-item {{ Request::is(['jenis-barang/*']) ? 'active' : '' }}"> <a class="nav-link"
                               href="{{ URL::to('/jenis-barang/view') }}">Jenis Barang</a>
                       </li>
                       <li class="nav-item {{ Request::is(['inventaris/*']) ? 'active' : '' }}"> <a class="nav-link"
                               href="{{ URL::to('/inventaris/view') }}">Inventaris</a>
                       </li>
                       <li class="nav-item {{ Request::is(['sperpat/*']) ? 'active' : '' }}"> <a class="nav-link"
                               href="{{ URL::to('/sperpat/view') }}">sperpat</a>
                       </li>
                   </ul>
               </div>
           </li>

       </ul>
   </nav>

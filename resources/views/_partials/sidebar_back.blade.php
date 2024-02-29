<div class="sidebar-wrapper sidebar-theme">
    <nav id="sidebar">
       <div class="navbar-nav theme-brand flex-row  text-center">
          <div class="nav-logo">
             <div class="nav-item theme-logo">
                <a href="index-2.html">
                <img src="https://designreset.com/equation/html/src/assets/img/logo.svg" class="navbar-logo" alt="logo">
                </a>
             </div>
             <div class="nav-item theme-text">
                <a href="index-2.html" class="nav-link"> Equation </a>
             </div>
          </div>
          <div class="nav-item sidebar-toggle">
             <div class="btn-toggle sidebarCollapse">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left">
                   <polyline points="11 17 6 12 11 7"></polyline>
                   <polyline points="18 17 13 12 18 7"></polyline>
                </svg>
             </div>
          </div>
       </div>
       <div class="shadow-bottom"></div>
       <ul class="list-unstyled menu-categories" id="accordionExample">
          <li class="menu active">
             <a href="#dashboard" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                <div class="">
                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                      <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                      <polyline points="9 22 9 12 15 12 15 22"></polyline>
                   </svg>
                   <span>Dashboard</span>
                </div>
                <div>
                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                      <polyline points="9 18 15 12 9 6"></polyline>
                   </svg>
                </div>
             </a>
             <ul class="collapse submenu list-unstyled show" id="dashboard" data-bs-parent="#accordionExample">
                <li class="active">
                   <a href="index-2.html"> Analytics </a>
                </li>
                <li>
                   <a href="index2.html"> Sales </a>
                </li>
                <li>
                   <a href="index3.html"> Real Estate </a>
                </li>
             </ul>
          </li>
          <li class="menu menu-heading">
             <div class="heading">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                   <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
                <span>M. KONTEN</span>
             </div>
          </li>
          <li class="menu">
             <a href="{{ url("admin/profil") }}" aria-expanded="false" class="dropdown-toggle">
             <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                   <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                   <line x1="16" y1="2" x2="16" y2="6"></line>
                   <line x1="8" y1="2" x2="8" y2="6"></line>
                   <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
                <span>Profil</span>
             </div>
             </a>
          </li>
          <li class="menu">
             <a href="{{ url("admin/layanan") }}" aria-expanded="false" class="dropdown-toggle">
             <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                   <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                </svg>
                <span>Layanan</span>
             </div>
             </a>
          </li>
          <li class="menu">
             <a href="{{ url('admin/informasi-penerbitan') }}" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg>
                    <span>Informasi Penerbitan</span>
                </div>
             </a>
          </li>
          <li class="menu">
             <a href="{{ url('admin/product') }}" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                      <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                      <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                   </svg>
                   <span>Product</span>
                </div>
             </a>
          </li>
          <li class="menu">
             <a href="{{ url('admin/kontak') }}" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                      <circle cx="12" cy="10" r="3"></circle>
                   </svg>
                   <span>Kontak Kami</span>
                </div>
             </a>
          </li>
          
          <li class="menu">
             <a  href="{{ url('admin/download') }}" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hash">
                      <line x1="4" y1="9" x2="20" y2="9"></line>
                      <line x1="4" y1="15" x2="20" y2="15"></line>
                      <line x1="10" y1="3" x2="8" y2="21"></line>
                      <line x1="16" y1="3" x2="14" y2="21"></line>
                   </svg>
                   <span>Konten Download</span>
                </div>
             </a>
          </li>
       </ul>
    </nav>
 </div>
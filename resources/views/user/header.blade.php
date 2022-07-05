<body class="hold-transition light-skin sidebar-mini theme-warning fixed">
	
    <div class="wrapper">
        
      <header class="main-header">
        <div class="d-flex align-items-center logo-box justify-content-start">	
            <!-- Logo -->
            <a href="{{ route('dashboard') }}" class="logo">
              <!-- logo-->
              <div class="logo-mini w-30">
                  <span class="dark-logo"><img src="" alt="logo"></span>
              </div>
              <div class="logo-lg">
                  <span class="light-logo"><img src="" alt="logo" ></span>
                  <span class="dark-logo"><img src="" alt="logo"></span>
              </div>
            </a>	
        </div>  
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <div class="app-menu">
            <ul class="header-megamenu nav">
                <li class="btn-group nav-item">
                    <a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
                        <i data-feather="align-left"></i>
                    </a>
                </li>
               
            </ul> 
          </div>
            
          <div class="navbar-custom-menu r-side">
            <ul class="nav navbar-nav">		  
                <li class="btn-group d-lg-inline-flex d-none">
                    <div class="app-menu">
                        <div class="search-bx mx-5">
                            <form>
                                <div class="input-group">
                                  <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                  <div class="input-group-append">
                                    <button class="btn" type="submit" id="button-addon3"><i data-feather="search"></i></button>
                                  </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
                <li class="btn-group nav-item d-lg-inline-flex d-none">
                    <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen btn-primary-light" title="Full Screen">
                        <i data-feather="maximize"></i>
                    </a>
                </li>
              <!-- Notifications -->
             
              
              <!-- User Account-->
              <li class="dropdown user user-menu">
                <a href="#" class="waves-effect waves-light dropdown-toggle btn-primary-light" data-bs-toggle="dropdown" title="User">
                    <i data-feather="user"></i>
                </a>
                <ul class="dropdown-menu animated flipInX">
                  <li class="user-body">
                     <a class="dropdown-item" href="{{ route('profile') }}"><i class="ti-user text-muted me-2"></i> Profile</a>
                     <a class="dropdown-item" href="{{ route('deposit') }}"><i class="ti-wallet text-muted me-2"></i> My Wallet</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="{{ route('logout') }}"><i class="ti-lock text-muted me-2"></i> Logout</a>
                  </li>
                </ul>
              </li>	
              
              <!-- Control Sidebar Toggle Button -->
              
                
            </ul>
          </div>
        </nav>
      </header>
      
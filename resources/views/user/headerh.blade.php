<body>

    <div class="preloader">
    <div class="d-table">
    <div class="d-table-cell">
    <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    </div>
    </div>
    </div>
    
    
    <div class="topbar-area">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-lg-6 col-md-6">
    <ul class="topbar-information">
    <!-- <li>
    <a href="tel:44789289524329">+44 7892 8952 4329</a>
    </li> -->
    <li>
    <a href=""><span class="" data-cfemail="">support@swiftescrow.net</span></a>
    </li>
    </ul>
    </div>
    <div class="col-lg-6 col-md-6">
    <ul class="topbar-action">
    <li>
    <a href="{{ route('register') }}">Register</a>
    </li>
    <li>
    <a href="{{ route('login') }}">Login</a>
    </li>
    <li class="dropdown language-option">
    
    {{-- <i class="ri-global-line"></i> --}}
    
    <span class="lang-name"></span>
    <div id="google_translate_element"></div>
                                            <script type="text/javascript">
                                                function googleTranslateElementInit() {
                                                  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                                                }
                                                </script>
                                                 
                                                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                                                
    
     </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    
    
    <div class="navbar-area navbar-style-two">
    <div class="main-responsive-nav">
    <div class="container">
    <div class="main-responsive-menu">
    <div class="logo">
    <a href="{{ route('home') }}">
    <img src="{{ asset('assett/assets/images/logo.png') }}" style="width: 120%" alt="Oleev">
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="main-navbar">
    <div class="container">
    <nav class="navbar navbar-expand-md navbar-light">
    <a class="navbar-brand" href="{{ route('home') }}">
    <img src="{{ asset('assett/assets/images/logo.png') }}" style="width: 1000%" alt="Oleev">
    </a>
    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto">
    <li class="nav-item">
    <a href="#" class="nav-link active">
    Home
    </a>
    
    </li>
    <li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link">About Us</a>
    </li>
    <li class="nav-item">
    <a href="{{ route('faq') }}" class="nav-link">FAQ</a>
    </li>
    <li class="nav-item">
    <a href="{{ route('terms') }}" class="nav-link">Terms</a>
    </li>
    <li class="nav-item">
    <a href="{{ route('policy') }}" class="nav-link"> Policy</a>
    </li>
    <li class="nav-item">
    <a href="{{ route('contact') }}" class="nav-link">Contact</a>
    </li>
    
    </ul>
    <div class="others-options d-flex align-items-center">
    <div class="option-item">
    <a href="{{ route('login') }}" class="optional-btn">Log In</a>
    </div>
    <div class="option-item">
    <a href="{{ route('register') }}" class="default-btn">Register Now</a>
    </div>
    </div>
    </div>
    </nav>
    </div>
    </div>
    <div class="others-option-for-responsive">
    <div class="container">
    <div class="dot-menu">
    <div class="inner">
    <div class="circle circle-one"></div>
    <div class="circle circle-two"></div>
    <div class="circle circle-three"></div>
    </div>
    </div>
    <div class="container">
    <div class="option-inner">
    <div class="others-options d-flex align-items-center">
    <div class="option-item">
    <a href="{{ route('login') }}l" class="optional-btn">Log In</a>
    </div>
    <div class="option-item">
    <a href="{{ route('register') }}" class="default-btn">Register Now</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
<header class="header-main-sec">
    <div class="header-inner-area">
        <div class="header-main-area">
            <div class="container">
                <div class="row">
                    <div class="header-logo-col">
                        <div class="header-logo-area">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('images/logo-main.png') }}">
                            </a>
                        </div>
                    </div>
                    <div class="header-menu-col">
                        <div class="header-buttons-area">
                            <div class="header-btn">
                           
                            @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle logout-dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->first_name }}
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                            </div>
                            <div class="header-btn header-menu-btn">
                                <a href="javascript:void(0)">
                                    <p>Menu</p>
                                    <div class="header-menubar">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-drawer-main">
            <div class="menu-drawer-inner">
                <div class="menubar-top-area">
                    <div class="container">
                        <div class="row">
                            <div class="menubar-top-left">
                                <a href="tel:1300 558 169">
                                    <span>We're here to help</span>
                                    <p>CALL 1300 558 169</p>
                                </a>
                            </div>
                            <div class="menubar-top-right">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">CONSUMER SITE</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menubar-menu-main">
                    <ul>
                        <li>
                            <a href="javascript:void(0)">
                                <div class="container">
                                    <div class="row">
                                        <div class="menubar-menu-left">
                                            <span>Our market leading benefits are endless</span>
                                            <p>Benefits</p>
                                        </div>
                                        <div class="menubar-menu-right">
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <div class="container">
                                    <div class="row">
                                        <div class="menubar-menu-left">
                                            <span>Hassle free moving for your customers</span>
                                            <p>Always On Guarantee</p>
                                        </div>
                                        <div class="menubar-menu-right">
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <div class="container">
                                    <div class="row">
                                        <div class="menubar-menu-left">
                                            <span>Account support when you need it</span>
                                            <p>Member Services</p>
                                        </div>
                                        <div class="menubar-menu-right">
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <div class="container">
                                    <div class="row">
                                        <div class="menubar-menu-left">
                                            <span>Full range of marketing material supporting you</span>
                                            <p>Agent Resources</p>
                                        </div>
                                        <div class="menubar-menu-right">
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <div class="container">
                                    <div class="row">
                                        <div class="menubar-menu-left">
                                            <span>Local support for you and your office</span>
                                            <p>Account Management</p>
                                        </div>
                                        <div class="menubar-menu-right">
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <div class="container">
                                    <div class="row">
                                        <div class="menubar-menu-left">
                                            <span></span>
                                            <p>How to tenant proof your listing</p>
                                        </div>
                                        <div class="menubar-menu-right">
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <div class="container">
                                    <div class="row">
                                        <div class="menubar-menu-left">
                                            <span></span>
                                            <p>Security Policy</p>
                                        </div>
                                        <div class="menubar-menu-right">
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <div class="container">
                                    <div class="row">
                                        <div class="menubar-menu-left">
                                            <span></span>
                                            <p>Direct Connect Data Sharing & Terms</p>
                                        </div>
                                        <div class="menubar-menu-right">
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="subscribe-form-area">
                    <div class="container">
                        <form class="subscribe-form">
                            <div class="form-field">
                                <label>Become a Direct Connect agent</label>
                                <div class="form-field-row">
                                    <div class="form-field-email">
                                        <input type="email" name="email" placeholder="Enter your email address">
                                    </div>
                                    <div class="form-field-btn">
                                        <button>JOIN NOW</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="menubar-social-nav">
                    <div class="container">
                        <div class="row">
                            <div class="menubar-social-left">
                                <ul class="menubar-social-menu">
                                    <li>
                                        <a href="javascript:void(0)" class="social-twitter" rel="social-twitter">TWITTER</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="social-facebook" rel="social-facebook">FACEBOOK</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="social-youyube" rel="social-youyube">YOUTUBE</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="social-linkedin" rel="social-linkedin">LINKEDIN</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="menubar-social-right">
                                <ul class="menubar-social-icons">
                                    <li id="social-twitter">
                                        <i class="fab fa-twitter"></i>
                                    </li>
                                    <li id="social-facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </li>
                                    <li id="social-youyube">
                                        <i class="fab fa-youtube"></i>
                                    </li>
                                    <li id="social-linkedin">
                                        <i class="fab fa-linkedin-in"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menubar-footer footer-main">
                    <div class="container">
                        <div class="footer-inner">
                            <div class="footer-links-area">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">Contact us (1300 558 169)</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Terms & Conditions</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Declaration & Execution</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Collections Statement</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Security Policy</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Snowy Hydro Group Supplier Code of Conduct</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Site Map</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Tax Invoice Log In</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-copyright-area">
                                <p>Copyright &copy; 2023 Direct Connect</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
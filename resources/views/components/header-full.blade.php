  <header class="bg-gray-100 header">
            <div class="container container-two">
                <nav class="header-inner flx-between">
                    <!-- Logo Start -->
                    <div class="logo">
                        <a href="index.html" class="link">
                            <img src="/images/logo.png" width="100" height="100" alt="Logo">
                        </a>
                    </div>
                    <!-- Logo End -->

                    <!-- Menu Start  -->
                    <div class="header-menu d-lg-block d-none ">

                        <ul class="nav-menu flx-align ">
                            <li class="nav-menu__item">
                                <a href="{{route('home')}}" class="nav-menu__link">Accueil</a>

                            </li>
                            <li class="nav-menu__item has-submenu">
                                <a href="javascript:void(0)" class="nav-menu__link">Maison</a>
                                <ul class="nav-submenu">
                                    <li class="nav-submenu__item">
                                        <a href="property.html" class="nav-submenu__link"> Ventes</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="property-sidebar.html" class="nav-submenu__link"> Achat </a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="property-details.html" class="nav-submenu__link"> Evaluer</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-menu__item has-submenu">
                                <a href="javascript:void(0)" class="nav-menu__link">Services</a>
                                <ul class="nav-submenu">
                                    <li class="nav-submenu__item">
                                        <a href="project.html" class="nav-submenu__link"> Project </a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="project-details.html" class="nav-submenu__link">Project Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-menu__item">
                                <a href="{{route('about')}}" class="nav-menu__link">A propos de nous</a>

                            </li>
                            <li class="nav-menu__item">
                                <a href="{{route('contact')}}" class="nav-menu__link">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Menu End  -->

                    <!-- Header Right start -->
                    <div class="header-right flx-align">
                        <a href="#"
                            class="gap-2 text-gray-800 contact-number text-poppins fw-500 d-flex align-items-center">
                            <span class="icon text-gradient font-20"><i class="fas fa-phone"></i></span>
                            <span class="text">(0844720350)</span>
                        </a>
                        <button type="button" class="offcanvas-btn d-lg-block d-none me-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 30 24"
                                fill="none">
                                <line x1="0.0078125" y1="12.293" x2="30.0078" y2="12.293" stroke="#181616"
                                    stroke-width="3"></line>
                                <path d="M5.00781 22.293H30.0078" stroke="#181616" stroke-width="3"></path>
                                <path d="M10.0078 2.29297H30.0078" stroke="#181616" stroke-width="3"></path>
                            </svg>
                        </button>
                        <button type="button" class="toggle-mobileMenu d-lg-none"> <i class="las la-bars"></i> </button>
                    </div>
                    <!-- Header Right End  -->
                </nav>
            </div>
        </header>

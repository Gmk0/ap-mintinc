  <header class="bg-gray-100 header">
            <div class="container px-4 container-two">
                <nav class="header-inner flx-between">
                    <!-- Logo Start -->
                    <div class="logo">
                        <a href="index.html" class="link">
                            <img src="/images/logo.png" width="80" height="80" alt="Logo">
                        </a>
                    </div>
                    <!-- Logo End -->

                    <!-- Menu Start  -->
                    <div class="hidden header-menu lg:block ">

                        <ul class="nav-menu flx-align ">
                            <li class="nav-menu__item">
                                <a href="{{route('home')}}" class="nav-menu__link">{{__('brand.home')}}</a>

                            </li>
                            <li class="nav-menu__item ">
                                <a href="{{route('property.allproperty')}}" class="nav-menu__link">{{__('brand.property')}}</a>
                          
                            </li>
                            <li class="nav-menu__item has-submenu">
                                <a href="javascript:void(0)" class="nav-menu__link">{{__('brand.services')}}</a>
                                <ul class="nav-submenu">
                                    <li class="nav-submenu__item">
                                        <a href="{{route('projet')}}" class="nav-submenu__link"> {{__('brand.Project')}} </a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="nav-menu__item">
                                <a href="{{route('about')}}" class="nav-menu__link">{{__('brand.about_us')}}</a>

                            </li>
                            <li class="nav-menu__item">
                                <a href="{{route('contact')}}" class="nav-menu__link">{{__('brand.contact')}}</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Menu End  -->

                    <!-- Header Right start -->
                    <div class="header-right flx-align">

                        
                        <a href="#"
                            class="flex items-center gap-2 text-gray-800 contact-number text-poppins fw-500">
                            <span class="icon text-gradient font-20"><i class="fas fa-phone"></i></span>
                            <span class="text">({{__('brand.numero')}})</span>
                        </a>
                        <button type="button" class="hidden offcanvas-btn lg:block me-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 30 24"
                                fill="none">
                                <line x1="0.0078125" y1="12.293" x2="30.0078" y2="12.293" stroke="#181616"
                                    stroke-width="3"></line>
                                <path d="M5.00781 22.293H30.0078" stroke="#181616" stroke-width="3"></path>
                                <path d="M10.0078 2.29297H30.0078" stroke="#181616" stroke-width="3"></path>
                            </svg>
                        </button>
                        <button type="button" class="toggle-mobileMenu lg:hidden"> <i class="las la-bars"></i> </button>
                    </div>
                    <!-- Header Right End  -->
                </nav>
            </div>
        </header>

<div class="mobile-menu d-lg-none d-block">
    <button type="button" class="close-button"> <i class="las la-times"></i> </button>
    <div class="mobile-menu__inner">
        <a href="{{route('home')}}" class="mobile-menu__logo">
            <img src="/images/logo.png" width="50" height="50" alt="Logo">
        </a>
        <div class="mobile-menu__menu">

            <ul class="nav-menu flx-align nav-menu--mobile">
                <li class="nav-menu__item ">
                    <a href="{{route('home')}}" class="nav-menu__link">Accueil</a>

                </li>
                <li class="nav-menu__item ">
                    <a href="{{route('property.allproperty')}}" class="nav-menu__link">{{__('brand.property')}}</a>

                </li>
                <li class="nav-menu__item has-submenu">
                    <a href="javascript:void(0)" class="nav-menu__link">{{__('brand.services')}}</a>
                    <ul class="nav-submenu">
                        <li class="nav-submenu__item">
                            <a href="{{route('project.allprojects')}}" class="nav-submenu__link"> {{__('brand.services')}} </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-menu__item">
                        <a href="{{route('project.allprojects')}}" class="nav-menu__link">{{__('brand.Project')}}</a>
                    </li>

                <li class="nav-menu__item">
                    <a href="{{route('about')}}" class="nav-menu__link">{{__('brand.about_us')}}</a>
                </li>
                <li class="nav-menu__item">
                    <a href="{{route('contact')}}" class="nav-menu__link">{{__('brand.contact')}}</a>
                </li>
            </ul>
            <a href="{{route('property.sellproperty')}}" class="mt-4 btn btn-outline-light d-lg-none d-block">{{__('brand.add_property')}} <span
                    class="icon-right text-gradient"> <i class="fas fa-arrow-right"></i> </span> </a>
        </div>
    </div>
</div>

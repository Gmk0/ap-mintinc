<div class="common-offcanvas d-lg-block !text-gray-700 !bg-white d-none">
    <div class="flx-between">
        <a href="index.html" class="mobile-menu__logo">
            <img src="/images/logo.png" width="100" height="100" alt="Logo">
        </a>
        <button type="button" class="close-button d-flex position-relative top-0 end-0"> <i class="las la-times"></i>
        </button>
    </div>

    <div class="search-box  hidden mt-5">
        <form action="#">
            <input type="text" class="common-input !text-gray-800 border border-green-600 placeholder:text-gray-700  common-input--light" placeholder="Search...">
            <button type="submit" class="icon"> <i class="fas fa-search"></i> </button>
        </form>
    </div>

    <ul class="address-list mt-5">
        <li class="address-list__item flx-align">
            <span class="address-list__icon"><i class="fas fa-map-marker-alt"></i></span>
            <div class="address-list__content">
                <p class="address-list__text text-gray-700">{{__('brand.addresse_bureau')}}<br>  RDC</p>
            </div>
        </li>
        <li class="address-list__item flx-align">
            <span class="address-list__icon text-gray-800"> <i class="fas  fa-phone"></i></span>
            <div class="address-list__content">
                <a href="tel:{{__('brand.numero')}}" class="address-list__text text-gray-700">{{__('brand.numero')}} </a>

            </div>
        </li>
        <li class="address-list__item flx-align">
            <span class="address-list__icon text-gray-800"> <i class="fas fa-envelope"></i></span>
            <div class="address-list__content">
                <a href="mailto:" class="address-list__text text-gray-700">{{__('brand.email_info')}}</a>

            </div>
        </li>
    </ul>

    <div class="google-map mt-5">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1511.2499674845235!2d-73.99553882767792!3d40.75102778252164!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1686536419224!5m2!1sen!2sbd"
            loading="lazy" class="w-100 h-100"></iframe>
    </div>

    <ul class="social-list">
        <li class="social-list__item"><a href="https://www.facebook.com" class="social-list__link flx-center"><i
                    class="fab fa-facebook-f"></i></a> </li>
        <li class="social-list__item"><a href="https://www.twitter.com" class="social-list__link flx-center"> <i
                    class="fab fa-twitter"></i></a></li>
        <li class="social-list__item"><a href="https://www.linkedin.com" class="social-list__link flx-center"> <i
                    class="fab fa-linkedin-in"></i></a></li>
        <li class="social-list__item"><a href="https://www.pinterest.com" class="social-list__link flx-center"> <i
                    class="fab fa-instagram"></i></a></li>
    </ul>

</div>

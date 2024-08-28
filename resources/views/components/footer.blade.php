<footer class="px-6 py-16 footer ">
    <div class="w-full container-two">
        <div class="gap-3 flx-between">
            <div class="footer-top__left">
                <span class="hidden icon"><img src="/assets/images/icons/envelop-icon.svg" alt=""></span>
                <h2 class="mb-0 text-white text">Subscribe to My newsletter</h2>
            </div>
            <form action="#" class="flex items-center gap-3 subscribe-form">
                <div class="position-relative w-100">
                    <input type="text" class="common-input common-input--withLeftIcon w-100"
                        placeholder="Enter Your Email Address">
                    <span class="input-icon input-icon--left text-gradient font-20 line-height-1"><i
                            class="far fa-envelope"></i></span>
                </div>
                <button type="submit" class="flex-shrink-0 btn btn-main fw-normal">Subscribe</button>
            </form>
        </div>

        <div class="grid grid-cols-12 gap-5 py-6">
            <div class="col-span-6 lg:col-span-5">
                <div class="footer-item">
                    <div class="footer-item__logo">
                        <a href="index.html"> <img src="/images/logo.png" alt=""></a>
                    </div>
                <p class="footer-item__desc max-w-unset">
                  {{__('brand.footer_desc')}}
                </p>
                    <ul class="gap-2 mt-4 social-icon-list style-two flx-align">
                        <li class="social-icon-list__item">
                            <a href="https://www.facebook.com" class="social-icon-list__link"><i
                                    class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="social-icon-list__item">
                            <a href="https://www.twitter.com" class="social-icon-list__link"><i
                                    class="fab fa-twitter"></i></a>
                        </li>
                        <li class="social-icon-list__item">
                            <a href="https://www.linkedin.com" class="social-icon-list__link"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="social-icon-list__item">
                            <a href="https://www.pinterest.com" class="social-icon-list__link"><i
                                    class="fab fa-instagram"></i></a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="col-span-6 lg:col-span-4">
               <div class="footer-item lg:mr-5">
            <h6 class="footer-item__title">Nos Services</h6>
            <ul class="footer-menu">
                <li class="footer-menu__item"><a href="property.html" class="footer-menu__link">Planification Stratégique</a></li>
                <li class="footer-menu__item"><a href="property.html" class="footer-menu__link">Gestion de Projets</a></li>
                <li class="footer-menu__item"><a href="property.html" class="footer-menu__link">Vente de Maisons</a></li>
                <li class="footer-menu__item"><a href="property.html" class="footer-menu__link">Approbation Municipale</a></li>
            </ul>
</div>

            </div>
            <div class="col-span-6 lg:col-span-3">
                <div class="footer-item">
                    <h6 class="footer-item__title">Contact Us</h6>
                    <div class="footer-contact">
                        <div class="flex items-start footer-contact__item font-18">
                            <span class="footer-contact__icon"><i class="fas fa-envelope"></i></span>
                            <a href="mailto:" class="footer-contact__link">info@gpamintinc.com</a>
                        </div>
                        <div class="flex items-start footer-contact__item font-18">
                            <span class="footer-contact__icon"><i class="fas fa-map-marker-alt"></i></span>
                            <p class="footer-contact__text">Immeble sozacom 5e niveau , Kinshasa- Gombe</p>
                        </div>
                        <div class="flex items-start footer-contact__item font-18">
                            <span class="footer-contact__icon"><i class="fas fa-phone"></i></span>
                            <a href="tel:" class="footer-contact__link">(+243) 0844720350</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- bottom Footer -->
<div class="px-6 bottom-footer ">
    <div class="container container-two">
        <div class="gap-3 bottom-footer__inner flx-between">
            <p class="bottom-footer__text"> &copy; CityScape 2024 | All Rights Reserved.</p>
            <div class="footer-links">
                <a href="#" class="footer-link">Terms & Condition</a>
                <a href="#" class="footer-link">Privacy Policy</a>
                <a href="#" class="footer-link">Contact Us</a>
            </div>
            <div x-data="{ open: false }" class="relative inline-block text-left">
                <button @click="open = !open" type="button"
                    class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Language
                    <svg class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 3.414l3.293 3.879a1 1 0 001.414-1.414l-4-4a1 1 0 00-1.414 0l-4 4a1 1 0 000 1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            
                <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 w-56 mb-2 origin-bottom-right bg-white rounded-md shadow-lg bottom-full ring-1 ring-black ring-opacity-5 focus:outline-none">
                    <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                        <a href="?lang=en" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            role="menuitem">English</a>
                        <a href="?lang=fr" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            role="menuitem">Français</a>
                        <a href="?lang=pt" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            role="menuitem">Português</a>
                    </div>
                </div>
            </div>
            
           
        </div>
    </div>
</div>

<footer class="px-6 py-16 footer ">
    <div class="w-full container-two">
       @livewire('sendemail')

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
        @livewire("footer")

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
                            <a href="tel:" class="footer-contact__link">{{__('brand.numero')}}</a>
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
            <p class="bottom-footer__text"> &copy; Ap 2024 | All Rights Reserved.</p>
            <div class="footer-links">
                <div x-data="{ open: false, selectedLanguage: '{{ app()->getLocale() }}' }" class="relative inline-block text-left">
                    <button @click="open = !open" type="button"
                        class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-100 bg-gray-700 border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <span
                            x-text="selectedLanguage === 'en' ? 'English' : selectedLanguage === 'fr' ? 'Français' : 'Português'"></span>
                        <svg class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 3.414l3.293 3.879a1 1 0 001.414-1.414l-4-4a1 1 0 00-1.414 0l-4 4a1 1 0 000 1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>


                </div>
                <a href="#" class="footer-link">Terms & Condition</a>
                <a href="#" class="footer-link">Privacy Policy</a>
                <a href="#" class="footer-link">Contact Us</a>


            </div>






        </div>
    </div>
</div>

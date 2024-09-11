<footer class="px-6 py-16 footer ">
    <div class="w-full container-two">
       @livewire('sendemail')

        <div class="grid grid-cols-12 gap-5 py-6">
            <div class="col-span-6 lg:col-span-5">
                <div class="footer-item">
                    <div class="">
                        <a href="/"> <img src="/images/icons/2.png" class="w-32 h-32" alt="logo"></a>
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

                <a href="#" class="footer-link">Terms & Condition</a>
                <a href="#" class="footer-link">Privacy Policy</a>
                <a href="#" class="footer-link">Contact Us</a>


            </div>






        </div>
    </div>
</div>

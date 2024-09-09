
<div class=" header-top bg--gradient">
    <div class="w-full px-4 ">
        <div class="flex flex-col justify-center gap-2 sm:items-center lg:flex-row lg:justify-between">
            <div class="header-info flx-align">
                <div class="text-white header-info__item flx-align">
                    <span class="header-info__icon"><i class="fas fa-map-marker-alt"></i></span>
                    <span class="text-white header-info__text fw-light">{{__('brand.addresse_bureau')}}</span>
                </div>
                <div class="hidden text-white lg:block header-info__item flx-align">
                    <span class="header-info__icon"><i class="fas fa-envelope"></i></span>
                    <a href="mailto:{{__('brand.email_info')}}" class="text-white header-info__text fw-light">{{__('brand.email_info')}}</a>
                </div>
            </div>
            <ul class="justify-center gap-2 social-icon-list flx-align">

                <li class="social-icon-list__item">
                    <a href="https://www.facebook.com" class="social-icon-list__link"><i
                            class="fab fa-facebook-f"></i></a>
                </li>
                <li class="social-icon-list__item">
                    <a href="https://www.twitter.com" class="social-icon-list__link"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="social-icon-list__item">
                    <a href="https://www.linkedin.com" class="social-icon-list__link"><i
                            class="fab fa-linkedin-in"></i></a>
                </li>
                <li class="social-icon-list__item">
                    <a href="https://www.pinterest.com" class="social-icon-list__link"><i
                            class="fab fa-instagram"></i></a>
                </li>
                <div x-data="{ open: false, selectedLanguage: '{{ app()->getLocale() }}' }" class="relative inline-block text-left">
                   <button @click="open = !open" type="button"
                        class="inline-flex justify-center w-full px-1 py-1 text-sm font-medium text-gray-100 border border-gray-100 rounded-md shadow-sm social-icon-list__item focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <img :src="selectedLanguage === 'en' ? '/images/flags/us.svg' : selectedLanguage === 'fr' ? '/images/flags/fr.svg' : '/images/flags/pt.svg'"
                            alt="Flag" class="w-5 h-5">
                        <svg class="hidden w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
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
                        class="absolute right-0 z-10 w-16 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                            <a href="#" @click.prevent="changeLanguage('en')"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                                <img src="/images/flags/us.svg" class="w-12" alt="en">
                            </a>
                            <a href="#" @click.prevent="changeLanguage('fr')"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem"><img src="/images/flags/fr.svg" class="w-12" alt=""></a>
                            <a href="#" @click.prevent="changeLanguage('pt')"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem"><img src="/images/flags/pt.svg" class="w-12" alt=""></a>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>

    <script>
        function changeLanguage(locale) {
                        const form = document.createElement('form');
                        form.method = 'GET';
                        form.action = `{{ route('change.language', '') }}/${locale}`;
                        document.body.appendChild(form);
                        form.submit();
                    }
    </script>
</div>

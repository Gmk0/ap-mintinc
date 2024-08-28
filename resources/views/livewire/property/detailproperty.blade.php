<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
    <x-bread-cumb title="Details proprietes" />
    <section class="py-32 bg-white property-details">
        <div class="container px-12 container-two">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 lg:col-span-8">
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12 col-sm-12">
                            <div class="property-details__thumb">
                                <img src="/assets/images/thumbs/property-details-1.png" alt="" class="cover-img">
                            </div>
                        </div>
                        <div class="col-span-6 lg:col-span-4">
                            <div class="property-details__thumb">
                                <img src="/assets/images/thumbs/property-details-2.png" alt="" class="cover-img">
                            </div>
                        </div>
                        <div class="col-span-6 lg:col-span-4">
                            <div class="property-details__thumb">
                                <img src="/assets/images/thumbs/property-details-3.png" alt="" class="cover-img">
                            </div>
                        </div>
                        <div class="col-span-6  lg:col-span-4">
                            <div class="property-details__thumb">
                                <img src="/assets/images/thumbs/property-details-4.png" alt="" class="cover-img">
                            </div>
                        </div>
                    </div>
                    <div class="property-details-wrapper">
                        <div class="property-details-item">
                            <h6 class="property-details-item__title">Preview</h6>
                            <div class="property-details-item__content">
                                <div class="grid grid-cols-12 gap-4 lg:gap-5">
                                    <div class="col-span-6 lg:col-span-4">
                                        <div class="flex items-center amenities-content">
                                            <span class="amenities-content__icon">
                                                <img src="/assets/images/icons/amenities1.svg" alt="">
                                            </span>
                                            <div class="amenities-content__inner">
                                                <span class="amenities-content__text">Room</span>
                                                <h6 class="mb-0 amenities-content__title font-16">4 Room</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-6 lg:col-span-4">
                                        <div class="flex items-center amenities-content">
                                            <span class="amenities-content__icon">
                                                <img src="/assets/images/icons/amenities2.svg" alt="">
                                            </span>
                                            <div class="amenities-content__inner">
                                                <span class="amenities-content__text">Bed</span>
                                                <h6 class="mb-0 amenities-content__title font-16">3 Beds</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-6 lg:col-span-4">
                                        <div class="flex items-center amenities-content">
                                            <span class="amenities-content__icon">
                                                <img src="/assets/images/icons/amenities3.svg" alt="">
                                            </span>
                                            <div class="amenities-content__inner">
                                                <span class="amenities-content__text">Bath</span>
                                                <h6 class="mb-0 amenities-content__title font-16">2 Baths</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-6 lg:col-span-4">
                                        <div class="flex items-center amenities-content">
                                            <span class="amenities-content__icon">
                                                <img src="/assets/images/icons/amenities4.svg" alt="">
                                            </span>
                                            <div class="amenities-content__inner">
                                                <span class="amenities-content__text">Space</span>
                                                <h6 class="mb-0 amenities-content__title font-16">3 Space</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-6 lg:col-span-4">
                                        <div class="flex items-center amenities-content">
                                            <span class="amenities-content__icon">
                                                <img src="/assets/images/icons/amenities5.svg" alt="">
                                            </span>
                                            <div class="amenities-content__inner">
                                                <span class="amenities-content__text">Size</span>
                                                <h6 class="mb-0 amenities-content__title font-16">1020 sqft</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-6 lg:col-span-4">
                                        <div class="flex items-center amenities-content">
                                            <span class="amenities-content__icon">
                                                <img src="/assets/images/icons/amenities6.svg" alt="">
                                            </span>
                                            <div class="amenities-content__inner">
                                                <span class="amenities-content__text">Property Type</span>
                                                <h6 class="mb-0 amenities-content__title font-16">Apartment</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="property-details-item">
                            <h6 class="property-details-item__title">Features</h6>
                            <div class="property-details-item__content">
                                <div class="grid grid-cols-12 gap-2">
                                    <div class="col-span-6">
                                        <ul class="check-list">
                                            <li class="flex items-center check-list__item">
                                                <span class="icon"><i class="fas fa-check"></i></span>
                                                <span class="text">Dream Property Solutions</span>
                                            </li>
                                            <li class="flex items-center check-list__item">
                                                <span class="icon"><i class="fas fa-check"></i></span>
                                                <span class="text">Secure Property Partners</span>
                                            </li>
                                            <li class="flex items-center check-list__item">
                                                <span class="icon"><i class="fas fa-check"></i></span>
                                                <span class="text">Doors to Your Future</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-span-6">
                                        <ul class="check-list">
                                            <li class="flex items-center check-list__item">
                                                <span class="icon"><i class="fas fa-check"></i></span>
                                                <span class="text">Prestige Property Management</span>
                                            </li>
                                            <li class="flex items-center check-list__item">
                                                <span class="icon"><i class="fas fa-check"></i></span>
                                                <span class="text">Global Real Estate Investments</span>
                                            </li>
                                            <li class="flex items-center check-list__item">
                                                <span class="icon"><i class="fas fa-check"></i></span>
                                                <span class="text">You Home with Experience</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="property-details-item">
                            <h6 class="property-details-item__title">Address</h6>
                            <div class="property-details-item__content">
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="col-span-6">
                                        <div class="flex items-center gap-4 address-content">
                                            <span class="address-content__text font-18">Address</span>
                                            <h6 class="mb-0 address-content__title font-15">Mirpur 1,Chineese</h6>
                                        </div>
                                    </div>
                                    <div class="col-span-6">
                                        <div class="flex items-center gap-4 address-content">
                                            <span class="address-content__text font-18">Code</span>
                                            <h6 class="mb-0 address-content__title font-15">2365</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="address-map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1150112.1628856962!2d44.64619029447154!3d23.086651461779507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43348a67e24b%3A0xff45e502e1ceb7e2!2sBurj%20Khalifa!5e0!3m2!1sen!2sbd!4v1707037970965!5m2!1sen!2sbd"
                                        allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="property-details-item">
                            <h6 class="property-details-item__title">House</h6>
                            <div class="property-details-item__content">
                                <div class="relative house-content">
                                    <img src="/assets/images/thumbs/house.png" alt="">
                                    <a href="https://www.youtube.com/watch?v=pPl3ZZdTP3g"
                                        class="popup-video-link video-popup__button style-two">
                                        <i class="fas fa-play text-gradient"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <div class="common-sidebar-wrapper">
                        <div class="common-sidebar">
                            <h6 class="common-sidebar__title"> Category </h6>
                            <ul class="category-list">
                                <li class="category-list__item">
                                    <a href="blog-classic.html" class="category-list__link flx-between">
                                        <span class="text">Prime Investments</span>
                                        <span class="number">(1)</span>
                                    </a>
                                </li>
                                <li class="category-list__item">
                                    <a href="blog-classic.html" class="category-list__link flx-between">
                                        <span class="text">ProHome Finders</span>
                                        <span class="number"> (8) </span>
                                    </a>
                                </li>
                                <li class="category-list__item">
                                    <a href="blog-classic.html" class="category-list__link flx-between">
                                        <span class="text">SmartHouse Agency</span>
                                        <span class="number"> (3) </span>
                                    </a>
                                </li>
                                <li class="category-list__item">
                                    <a href="blog-classic.html" class="category-list__link flx-between">
                                        <span class="text">Secure Property Partners</span>
                                        <span class="number"> (5) </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="common-sidebar">
                            <h6 class="common-sidebar__title"> Recent Post </h6>
                            <div class="latest-blog">
                                <div class="latest-blog__thumb">
                                    <a href="blog-details.html"> <img src="/assets/images/thumbs/latest-blog1.png"
                                            class="cover-img" alt=""></a>
                                </div>
                                <div class="latest-blog__content">
                                    <span class="gap-1 latest-blog__category font-12 flx-align">
                                        <span class="icon text-gradient"><i class="fas fa-folder-open"></i></span>
                                        Category</span>
                                    <h6 class="latest-blog__title">
                                        <a href="blog-details.html">A picture is worth standard and stand us return</a>
                                    </h6>
                                </div>
                            </div>
                            <div class="latest-blog">
                                <div class="latest-blog__thumb">
                                    <a href="blog-details.html"> <img src="/assets/images/thumbs/latest-blog2.png"
                                            class="cover-img" alt=""></a>
                                </div>
                                <div class="latest-blog__content">
                                    <span class="gap-1 latest-blog__category font-12 flx-align">
                                        <span class="icon text-gradient"><i class="fas fa-folder-open"></i></span>
                                        Category</span>
                                    <h6 class="latest-blog__title">
                                        <a href="blog-details.html">Your journ homeownership starts here</a>
                                    </h6>
                                </div>
                            </div>
                            <div class="latest-blog">
                                <div class="latest-blog__thumb">
                                    <a href="blog-details.html"> <img src="/assets/images/thumbs/latest-blog3.png"
                                            class="cover-img" alt=""></a>
                                </div>
                                <div class="latest-blog__content">
                                    <span class="gap-1 latest-blog__category font-12 flx-align">
                                        <span class="icon text-gradient"><i class="fas fa-folder-open"></i></span>
                                        Category</span>
                                    <h6 class="latest-blog__title">
                                        <a href="blog-details.html">Trust us to guide you the a through the process</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="common-sidebar">
                            <h6 class="common-sidebar__title"> Properties </h6>
                            <div class="grid grid-cols-12 gap-4">
                                <div class="col-span-6 lg:col-span-4">
                                    <a href="property.html" class="properties-item d-block w-100">
                                        <img src="/assets/images/thumbs/properties-1.png" alt="Property Image"
                                            class="cover-img">
                                        <span class="properties-item__text">Relax House</span>
                                    </a>
                                </div>
                                <div class="col-span-6 lg:col-span-4">
                                    <a href="property.html" class="properties-item d-block w-100">
                                        <img src="/assets/images/thumbs/properties-2.png" alt="Property Image"
                                            class="cover-img">
                                        <span class="properties-item__text">Hunting Adventure</span>
                                    </a>
                                </div>
                                <div class="col-span-6 lg:col-span-4">
                                    <a href="property.html" class="properties-item d-block w-100">
                                        <img src="/assets/images/thumbs/properties-3.png" alt="Property Image"
                                            class="cover-img">
                                        <span class="properties-item__text">Homeowner ship</span>
                                    </a>
                                </div>
                                <div class="col-span-6 lg:col-span-4">
                                    <a href="property.html" class="properties-item d-block w-100">
                                        <img src="/assets/images/thumbs/properties-4.png" alt="Property Image"
                                            class="cover-img">
                                        <span class="properties-item__text">Real Dreams</span>
                                    </a>
                                </div>
                                <div class="col-span-6 lg:col-span-4">
                                    <a href="property.html" class="properties-item d-block w-100">
                                        <img src="/assets/images/thumbs/properties-5.png" alt="Property Image"
                                            class="cover-img">
                                        <span class="properties-item__text">New Doors</span>
                                    </a>
                                </div>
                                <div class="col-span-6 lg:col-span-4">
                                    <a href="property.html" class="properties-item d-block w-100">
                                        <img src="/assets/images/thumbs/properties-6.png" alt="Property Image"
                                            class="cover-img">
                                        <span class="properties-item__text">The Heart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
    
    
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

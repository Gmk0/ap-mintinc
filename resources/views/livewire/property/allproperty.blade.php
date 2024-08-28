<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>

    <x-bread-cumb title="Proprietes" />
<!-- ==================== Breadcrumb End Here ==================== -->

<!-- ======================== Property Section Start ============================ -->
<section class="py-8 bg-gray-100 property">
    <div class="container px-12 container-two">
        <div class="property-filter">
            <form action="#">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-6 lg:col-span-2 ">
                        <div class="select-has-icon">
                            <select class="text-gray-800 form-select common-input common-input--withLeftIcon pill">
                                <option value="Status" disabled selected>Status</option>
                                <option value="All">All</option>
                                <option value="Buy">Buy</option>
                                <option value="Rent">Rent</option>
                            </select>
                            <span class="input-icon input-icon--left text-gradient">
                                <img src="assets/images/icons/status.svg" alt="">
                            </span>
                        </div>
                    </div>
                    <div class="col-span-6 lg:col-span-3 ">
                        <div class="select-has-icon">
                            <select class="text-gray-800 form-select common-input common-input--withLeftIcon pill">
                                <option value="Type" disabled selected>Type</option>
                                <option value="All">All</option>
                                <option value="Houses">Houses</option>
                                <option value="Apartments">Apartments</option>
                                <option value="Office">Office</option>
                                <option value="Villa">Villa</option>
                            </select>
                            <span class="input-icon input-icon--left text-gradient">
                                <img src="assets/images/icons/type.svg" alt="">
                            </span>
                        </div>
                    </div>
                    <div class="col-span-6 lg:col-span-4 ">
                        <div class="select-has-icon">
                            <select class="text-gray-800 form-select common-input common-input--withLeftIcon pill">
                                <option value="Location" disabled selected>Location</option>
                                <option value="1">Bangladesh</option>
                                <option value="1">Japan</option>
                                <option value="1">Korea</option>
                                <option value="1">Singapore</option>
                                <option value="1">Germany</option>
                                <option value="1">Thailand</option>
                            </select>
                            <span class="input-icon input-icon--left text-gradient">
                                <img src="assets/images/icons/location.svg" alt="">
                            </span>
                        </div>
                    </div>
                    <div class="col-span-6 lg:col-span-3">
                        <div class="position-relative">
                            <input type="text" class="text-gray-800 common-input common-input--withLeftIcon pill"
                                placeholder="Advanced Filter">
                            <span class="input-icon input-icon--left text-gradient">
                                <img src="assets/images/icons/filter.svg" alt="">
                            </span>
                        </div>
                    </div>
                </div>
            </form>
            <div class="flex items-center justify-between gap-2 property-filter__bottom">
                <span class="text-gray-800 property-filter__text font-18">Showing 1-10 of 23</span>
                <div class="flex items-center justify-between gap-2">
                    <div class="items-center !hidden gap-2 lg:flex lg:ml-4 list-grid">
                        <button class="list-grid__button grid-button active text-body"><i
                                class="las la-border-all"></i></button>
                        <button class="list-grid__button list-button text-body"><i class="las la-list"></i></button>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <span class="text-gray-800 property-filter__text font-18"> Sort by: </span>
                        <div class="select-has-icon">
                            <select class="px-3 py-2 text-gray-800 form-select common-input pill">
                                <option value="Newest">Newest</option>
                                <option value="Best Seller">Best Seller</option>
                                <option value="Best Match">Best Match</option>
                                <option value="Low Price">Low Price</option>
                                <option value="High Price">High Price</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-12 gap-6 mt-6 md:mt-0 list-grid-item-wrapper show-two-item">
           
            @for($i=0;$i<10;$i++)
            <div class="col-span-12 md:col-span-6 lg:col-span-4">
                <div class="property-item style-two">
                    <div class="property-item__thumb">
                        <a href="property-details.html" class="link">
                            <img src="assets/images/thumbs/property-7.png" alt="" class="cover-img">
                        </a>
                    </div>
                    <div class="property-item__content">
                        <h6 class="property-item__title">
                            <a href="property-details.html" class="link"> Turning Dreams into Addresses Home State </a>
                        </h6>
                        <ul class="amenities-list flx-align">
                            <li class="amenities-list__item flx-align">
                                <span class="icon text-gradient"><i class="fas fa-bed"></i></span>
                                <span class="text">3 Beds</span>
                            </li>
                            <li class="amenities-list__item flx-align">
                                <span class="icon text-gradient"><i class="fas fa-bath"></i></span>
                                <span class="text">3 Baths</span>
                            </li>
                        </ul>
                        <h6 class="property-item__price"> $456.00
                            <span class="day">/per day</span>
                        </h6>
                        <p class="gap-2 property-item__location d-flex">
                            <span class="icon text-gradient"> <i class="fas fa-map-marker-alt"></i></span>
                            66 Broklyant, New York America
                        </p>
                        <a href="property-details.html" class="simple-btn text-gradient fw-semibold font-14">Book Now
                            <span class="icon-right"> <i class="fas fa-arrow-right"></i> </span> </a>
                    </div>
                </div>
            </div>

            @endfor
           
        </div>
        <nav aria-label="Page  navigation example">
            <ul class="hidden pagination common-pagination">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
            </ul>
        </nav>
    </div>
</section>
</div>

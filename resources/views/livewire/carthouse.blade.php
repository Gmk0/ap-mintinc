<?php

use function Livewire\Volt\{state};

state('images')

?>

<div>
    <div class="p-2 m-2 bg-white rounded property-item style-white">
        <div class="rounded property-item__thumb">
            <a href="property-details.html" class="link">
                <img src="/images/house/{{$images}}" alt="" class="cover-img">
            </a>
        </div>
        <div class="p-3 bg-white property-item__content lg:p-4">
            <h6 class="property-item__price text-heading fw-semibold">$76 500 <span class="day fw-500">
                </span> </h6>
            <h6 class="font-semibold property-item__title text-heading"> <a href="property-details.html"
                    class="link">Paramount Investments Prestige Property Management </a> </h6>
            <p class="gap-2 property-item__location text-heading fw-normal d-flex"> <span class="icon text-gradient"> <i
                        class="fas fa-map-marker-alt"></i></span> 26
                Oshwe, Kinshasa</p>
            <div class="gap-2 font-semibold property-item__bottom border-color text-heading flx-between">
                <ul class="amenities-list flx-align">
                    <li class="amenities-list__item flx-align">
                        <span class="icon text-gradient"><i class="fas fa-bed"></i></span>
                        <span class="text text-heading fw-500">3 Beds</span>
                    </li>
                    <li class="amenities-list__item flx-align">
                        <span class="icon text-gradient"><i class="fas fa-bath"></i></span>
                        <span class="text text-heading fw-500">3 Baths</span>
                    </li>
                </ul>
                <a href="#" class="simple-btn text-heading">Book Now <span class="icon-right text-gradient">
                        <i class="fas fa-arrow-right"></i> </span>
                </a>
            </div>
        </div>
    </div>
</div>

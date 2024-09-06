<?php

use function Livewire\Volt\{state, mount};



state('property');
mount(function(\App\Models\property $property){

    $this->property=$property;
})
?>

<div>

    <div class="p-2 m-2 bg-white rounded property-item style-white">
        <div class="rounded property-item__thumb">
            <a href="{{route('property.detailproperty',$property->slug)}}" class="link">
                <img src="{{$property->getFirstMediaUrl('properties')}}" alt="{{$property->title}}" class="cover-img">
            </a>
        </div>
        <div class="p-3 bg-white property-item__content lg:p-4">
            <h6 class="property-item__price text-heading fw-semibold">${{$property->price}} <span class="day fw-500">
                </span> </h6>
            <h6 class="font-semibold property-item__title text-heading"> <a href="{{route('property.detailproperty',$property->slug)}}"
                    class="link">{{$property->title}} </a> </h6>
            <p class="gap-2 property-item__location text-heading fw-normal d-flex"> <span class="icon text-gradient"> <i
                        class="fas fa-map-marker-alt"></i></span> {{$property->address}}</p>
            <div class="gap-2 font-semibold property-item__bottom border-color text-heading flx-between">
                <ul class="amenities-list flx-align">
                    @if ($property->bedrooms)
                    <li class="amenities-list__item flx-align">
                        <span class="icon text-gradient"><i class="fas fa-bed"></i></span>
                        <span class="text text-heading fw-500">{{$property->bedrooms}} {{__('brand.bed')}}</span>
                    </li>

                    @endif
                    @if ($property->bathrooms)

                    <li class="amenities-list__item flx-align">
                        <span class="icon text-gradient"><i class="fas fa-bath"></i></span>
                        <span class="text text-heading fw-500">{{$property->bathrooms}} {{__('brand.bathroom')}}</span>
                    </li>
                    @endif
                </ul>
                <a href="{{route('property.detailproperty',$property->slug)}}" class="simple-btn text-heading">{{__('brand.see_more')}} <span class="icon-right text-gradient">
                        <i class="fas fa-arrow-right"></i> </span>
                </a>
            </div>
        </div>
    </div>
</div>

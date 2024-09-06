<?php

use Livewire\Volt\Component;
use App\Models\Expertise;
use function Livewire\Volt\{computed};


$expertises=computed(function(){

    return Expertise::all();

});
 ?>

<div>
    <section class="px-6 pt-6 pb-16 property-type-three">
        <div class="container mx-auto">
            <div class="mb-8 text-center section-heading">
                <span class="section-heading__subtitle">
                    <span class="font-semibold text-gradient">{{__('brand.services')}}</span>
                </span>
                <h2 class="text-2xl font-bold section-heading__title">{{__('brand.our_expertise')}}</h2>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">

            @foreach ($this->expertises as $expertise)
            <div class="flex items-center property-type-three-item">
                <span class="flex-shrink-0 mr-4 property-type-three-item__icon">
                    <img src="{{$expertise->getFirstMediaUrl('icon')}}" alt="">
                </span>
                <div class="property-type-three-item__content">
                    <h6 class="text-lg font-semibold property-type-three-item__title">{{$expertise->title}}</h6>
                    <p class="text-base property-type-three-item__desc">{{$expertise->description}}</p>
                    <a href="{{route('expertise.oneexpertise',$expertise->slug)}}" class="inline-flex items-center font-semibold simple-btn text-heading">
                        {{__('brand.see_more')}}
                        <span class="ml-2 icon-right"><i class="fas fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>

            @endforeach


            </div>
        </div>
    </section>
</div>

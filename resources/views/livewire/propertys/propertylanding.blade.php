<?php

use function Livewire\Volt\{state, with};


with(fn()=>[
    'properties'=>\App\Models\Property::all(),
]);

 ?>
<div>

    <section class="px-6 py-8 property-five">
        <div class="container container-two">
            <div class="text-center section-heading">
                <div class="section-heading__inner">
                    <span class="section-heading__subtitle">
                        <span class="text-gradient fw-semibold">{{__('brand.last_offer')}}</span>
                    </span>
                    <h2 class="text-2xl lg:text-4xl section-heading__title">{{__('brand.best_life')}}</h2>
                </div>
            </div>
            <div class="property-five-slider arrow-style-two">

                @forelse ($properties as $property)
                <livewire:carthouse :property="$property" />

                @empty

                @endforelse




            </div>
        </div>
    </section>

</div>

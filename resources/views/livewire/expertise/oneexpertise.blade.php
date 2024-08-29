<?php

use function Livewire\Volt\{mount,state};


state(['expertise']); 

mount(function($slug){

    $this->expertise=\App\Models\Expertise::where('slug',$slug)->first();

})

?>

<div>
    <x-bread-cumb title="Expertise" />
    <section class="px-12 py-32 contact-top">
        <div class="container container-two">
            <div class="section-heading">
                <span class="bg-gray-100 section-heading__subtitle">
                    <span class="text-gradient fw-semibold">Contact</span>
                </span>
                <h2 class="section-heading__title">Contact Us!</h2>
            </div>
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-6 lg:col-span-4">
                    <div class="contact-card">
                        <span class="contact-card__icon"><i class="fas fa-paper-plane"></i></span>
                        <h5 class="contact-card__title">Email</h5>
                        <p class="contact-card__text font-18">
                            <a href="mailto:" class="link">{{__('brand.email_info')}}</a>
                        </p>
                        <p class="contact-card__text font-18">
                            <a href="mailto:" class="link">{{__('brand.email_info')}}</a>
                        </p>
                    </div>
                </div>
                <div class="col-span-6 lg:col-span-4">
                    <div class="contact-card">
                        <span class="contact-card__icon"><i class="fas fa-map-marker-alt"></i></span>
                        <h5 class="contact-card__title">Location</h5>
                        <p class="contact-card__text font-18">
                            {{__('brand.address')}}
                        </p>
                    </div>
                </div>
                <div class="col-span-6 lg:col-span-4">
                    <div class="contact-card">
                        <span class="contact-card__icon"><i class="fas fa-phone"></i></span>
                        <h5 class="contact-card__title">Contacts </h5>
                        <p class="contact-card__text font-18">
                            <a href="mailto:" class="link"> {{__('brand.numero')}}</a>
                        </p>
                        <p class="contact-card__text font-18">
                            <a href="mailto:" class="link"> {{__('brand.numero')}}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</div>

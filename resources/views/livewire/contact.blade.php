<?php

use function Livewire\Volt\{layout, state, title};

title('contacts');

state(['contact'=>[]]);


$save = function () {
$this->validate([
'contact.nom' => 'required|string|max:255',
'contact.email' => 'required|email',
'contact.telephone' => 'required|string|max:20',
'contact.sujet' => 'required|string|max:255',
'contact.message' => 'required|string|max:500',
]);

try{
    \App\Models\Contact::create($this->contact);

    $this->contact=[];

    $this->dispatch('event',['icon'=>'success', 'title'=>'Votre message a ete envoyer avec succes']);

}catch(\Exception $e){


}


// Code to save data after validation
};





?>

<div>
<!-- ==================== Breadcrumb Start Here ==================== -->

<x-bread-cumb  title="Contact" />
<!-- ==================== Breadcrumb End Here ==================== -->

<!-- ============================= Contact Top Section Start ======================= -->
<section class="px-12 py-8 contact-top">
    <div class="container container-two">
        <div class="section-heading">
            <span class="bg-gray-100 section-heading__subtitle">
                <span class="text-gradient fw-semibold">{{__('brand.contact')}}</span>
            </span>
            <h2 class="text-3xl section-heading__title lg:text-4xl">{{('brand.contact_us')}}</h2>
        </div>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 lg:col-span-4">
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
            <div class="col-span-12 lg:col-span-4">
                <div class="contact-card">
                    <span class="contact-card__icon"><i class="fas fa-map-marker-alt"></i></span>
                    <h5 class="contact-card__title">{{__('brand.location')}}</h5>
                    <p class="contact-card__text font-18">
                        {{__('brand.address')}}
                    </p>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-4">
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
<!-- ============================= Contact Top Section End ======================= -->


<div class="contact-map address-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1150112.1628856962!2d44.64619029447154!3d23.086651461779507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43348a67e24b%3A0xff45e502e1ceb7e2!2sBurj%20Khalifa!5e0!3m2!1sen!2sbd!4v1707037970965!5m2!1sen!2sbd"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<section class="contact-us-section padding-b-120">
    <div class="container container-two">
        <div class="bg-white contact-form">
            <div class="section-heading">
                <span class="bg-gray-100 section-heading__subtitle">
                    <span class="text-gradient fw-semibold">{{__('brand.contact_us')}}</span>
                </span>
                <h2 class="text-3xl section-heading__title lg:text-4xl">{{__('brand.avez_vous_question')}} </h2>
                <p class=" section-heading__desc">{{__('brand.question_response')}}</p>
            </div>
          <form wire:submit.prevent='save' class="contact-form__form">
            <div class="grid grid-cols-12 gap-4">
                <div class="w-full col-span-12 lg:col-span-6 col-xs-6">
                    <input type="text" required wire:model='contact.nom' class="common-input" placeholder="Votre Nom">
                    @error('contact.nom')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full col-span-12 lg:col-span-6 col-xs-6">
                    <input type="email" required wire:model='contact.email' class="common-input" placeholder="Votre E-mail">
                    @error('contact.email')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full col-span-12 lg:col-span-6 col-xs-6">
                    <input type="tel" required wire:model='contact.telephone' class="common-input" placeholder="Numero de telephone">
                    @error('contact.telephone')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-span-12 lg:col-span-6 col-xs-6">
                    <input wire:model='contact.sujet' required type="text" class="common-input" placeholder="Sujet">
                    @error('contact.sujet')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full col-span-12">
                    <textarea wire:model='contact.message' required class="common-input" placeholder="Votre Message"></textarea>
                    @error('contact.message')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex items-center justify-center col-span-12">
                    <button type="submit" class="btn btn-main w-100">Envoyer</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</section>

<!-- ============================= CTA section Start ===================== -->
<section class="hidden cta d-none padding-b-120">
    <div class="container container-two">
        <div class="gap-2 cta-box flx-between">
            <div class="cta-content">
                <h2 class="cta-content__title">Subscribe To Our <span class="text-gradient">Newsletter</span> </h2>
                <p class="cta-content__desc">It is a long established fact that a reader will be distracted by the
                    readable content of a page when looking at its layout.</p>
                <form action="#" class="gap-2 cta-content__form d-flex align-items-center">
                    <div class="position-relative w-100">
                        <input type="text" class="common-input common-input--withLeftIcon w-100"
                            placeholder="Enter Your Email Address">
                        <span class="input-icon input-icon--left text-gradient font-20 line-height-1"><i
                                class="far fa-envelope"></i></span>
                    </div>
                    <button type="submit" class="flex-shrink-0 btn btn-main text-uppercase"> Subscribe <span
                            class="text">Now</span> </button>
                </form>
            </div>
            <div class="cta-content__thumb d-xl-block d-none">
                <img src="assets/images/thumbs/cta-img.png" alt="">
            </div>
        </div>
    </div>
</section>
<!-- ============================= CTA section End ===================== -->
</div>

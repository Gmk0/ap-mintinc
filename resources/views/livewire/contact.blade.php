<?php

use function Livewire\Volt\{layout, state, title};

title('contacts')
?>

<div>
<!-- ==================== Breadcrumb Start Here ==================== -->
<section class="breadcrumb padding-y-120">
    <img src="assets/images/thumbs/breadcrumb-img.png" alt="" class="breadcrumb__img">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb__wrapper">
                    <h2 class="breadcrumb__title"> Contact Us</h2>
                    <ul class="breadcrumb__list">
                        <li class="breadcrumb__item"><a href="index.html" class="breadcrumb__link"> <i
                                    class="las la-home"></i> Home</a> </li>
                        <li class="breadcrumb__item"><i class="fas fa-angle-right"></i></li>
                        <li class="breadcrumb__item"> <span class="breadcrumb__item-text"> Contact Us </span> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Breadcrumb End Here ==================== -->

<!-- ============================= Contact Top Section Start ======================= -->
<section class="contact-top padding-y-120">
    <div class="container container-two">
        <div class="section-heading">
            <span class="bg-gray-100 section-heading__subtitle">
                <span class="text-gradient fw-semibold">Contact</span>
            </span>
            <h2 class="section-heading__title">Contact Us!</h2>
        </div>
        <div class="row gy-4">
            <div class="col-lg-4 col-sm-6">
                <div class="contact-card">
                    <span class="contact-card__icon"><i class="fas fa-paper-plane"></i></span>
                    <h5 class="contact-card__title">Email</h5>
                    <p class="contact-card__text font-18">
                        <a href="mailto:" class="link">michelle.rivera@example.com</a>
                    </p>
                    <p class="contact-card__text font-18">
                        <a href="mailto:" class="link">michelle.rivera@example.com</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="contact-card">
                    <span class="contact-card__icon"><i class="fas fa-map-marker-alt"></i></span>
                    <h5 class="contact-card__title">Location</h5>
                    <p class="contact-card__text font-18">
                        8502 Preston Rd. Inglewood, Maine 98380
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="contact-card">
                    <span class="contact-card__icon"><i class="fas fa-phone"></i></span>
                    <h5 class="contact-card__title">Contacts </h5>
                    <p class="contact-card__text font-18">
                        <a href="mailto:" class="link"> (270) 555-0117</a>
                    </p>
                    <p class="contact-card__text font-18">
                        <a href="mailto:" class="link"> (704) 555-0127 </a>
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
                    <span class="text-gradient fw-semibold">Contact us</span>
                </span>
                <h2 class="section-heading__title">Do you have any question? </h2>
                <p class="section-heading__desc">For your car we will do everything advice, repairs and maintenance. We
                    are the some preferred choice by many car owners because</p>
            </div>
            <form action="#" class="contact-form__form">
                <div class="row gy-4">
                    <div class="col-sm-6 col-xs-6">
                        <input type="text" class="common-input" placeholder="Your Name">
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <input type="email" class="common-input" placeholder="Your E-mail">
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <input type="tel" class="common-input" placeholder="Phone Number">
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <input type="text" class="common-input" placeholder="Subject">
                    </div>
                    <div class="col-12">
                        <textarea class="common-input" placeholder="Your Message"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-main w-100">Submit Now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- ============================= CTA section Start ===================== -->
<section class="cta padding-b-120">
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

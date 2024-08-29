<?php

use Livewire\Volt\Component;



new class extends Component {
    //


};

?>

<div>
<div>


    <x-bread-cumb title="A propos de nous" />
    <!-- ==================== Breadcrumb End Here ==================== -->

    <!-- ============================= About Section Start =========================== -->
    <section class="py-8 bg-white lg:py-8 about-three">
        <div class="px-6 container-two">
            <div class="grid grid-cols-12 gap-4 ">
                <div class="col-span-12 lg:col-span-6">
                    <div class="about-three-thumb">
                        <div class="about-three-thumb__inner">
                            <img src="images/house/2.png" alt="">
                            <div class="hidden project-content">
                                <div class="project-content__inner">
                                    <h2 class="project-content__number"> 10k+ </h2>
                                    <span class="project-content__text font-12">Complete project</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-first col-span-12 lg:order-last lg:col-span-6">
                    <div class="about-content">
                        <div class="section-heading style-left">
                            <span class="bg-gray-100 section-heading__subtitle"> <span
                                    class="text-gradient fw-semibold">About</span> </span>
                            <h2 class="text-2xl text-4xl section-heading__title">Votre vision notre Objectif</h2>
                            <p class="text-justify section-heading__desc font-18">Chez AP MANAGEMENT INTERNATIONAL INC, nous planifions stratégiquement des projets immobiliers, qu’ils soient
                            résidentiels. Notre expertise en matière d’urbanisme, d’architecture paysagère et d’urbanisme, en étroite collaboration
                            avec des disciplines connexes telles que l’environnement, le génie civil et l’architecture, nous permet d’identifier les
                            problèmes spécifiques à chaque projet. Nous sommes ainsi en mesure d’élaborer un plan d’action stratégique, afin de
                            mener rapidement à bien des projets à forte valeur ajoutée.
                            Nous assurons la meilleure utilisation des sites, tout en réduisant le temps nécessaire à la planification et à
                            l’approbation du projet. Pour le développeur, nous aidons à réduire les risques associés à ses investissements et à
                            augmenter leur rentabilité, tout en assurant l’achèvement de projets dont il sera fier.
                            </p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================= About Section End =========================== -->

    <!-- ======================= Property Type Three Start =========================== -->
    <livewire:home.allexpertise />
    <!-- ======================= Property Type Three End =========================== -->
    <!-- ========================= Team Section Start ============================= -->
    <section class="px-6 py-32 team">
        <div class="container container-two">
            <div class="gap-3 section-heading style-left style-flex flx-between align-items-end">
                <div class="section-heading__inner">
                    <span class="section-heading__subtitle"> <span class="text-gradient fw-semibold">Nos 
                            Professionnels</span> </span>
                    <h2 class="text-2xl text-4xl section-heading__title">{{__('brand.about_proffesional')}}</h2>
                </div>
                <a href="#" class="hidden btn btn-main">Learn More <span class="icon-right"> <i class="fas fa-plus"></i>
                    </span>
                </a>
            </div>
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-6 lg:col-span-4 ">
                    <div class="team-item">
                        <div class="team-item__thumb">
                            <img src="assets/images/thumbs/team1.png" alt="" class="cover-img">
                        </div>
                        <div class="team-item__content flx-between flex-nowrap">
                            <div>
                                <h6 class="mb-1 text-white team-item__name">Andre Pindi</h6>
                                <span class="text-white team-item__designation font-12 fw-light">President</span>
                            </div>
                            <div class="social-share">
                                <button type="button" class="social-share__button"><i
                                        class="fas fa-share-alt"></i></button>
                                <ul class="social-share-list">
                                    <li class="social-share-list__item">
                                        <a href="https://www.facebook.com" class="social-share-list__link"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="social-share-list__item">
                                        <a href="https://www.twitter.com" class="social-share-list__link"><i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="social-share-list__item">
                                        <a href="https://www.linkedin.com" class="social-share-list__link"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="social-share-list__item">
                                        <a href="https://www.pinterest.com" class="social-share-list__link"><i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-6 lg:col-span-4">
                    <div class="team-item">
                        <div class="team-item__thumb">
                            <img src="assets/images/thumbs/team2.png" alt="" class="cover-img">
                        </div>
                        <div class="team-item__content flx-between flex-nowrap">
                            <div>
                                <h6 class="mb-1 text-white team-item__name">Savannah Nguyen</h6>
                                <span class="text-white team-item__designation font-12 fw-light">Manager of Sales</span>
                            </div>
                            <div class="social-share">
                                <button type="button" class="social-share__button"><i
                                        class="fas fa-share-alt"></i></button>
                                <ul class="social-share-list">
                                    <li class="social-share-list__item">
                                        <a href="https://www.facebook.com" class="social-share-list__link"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="social-share-list__item">
                                        <a href="https://www.twitter.com" class="social-share-list__link"><i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="social-share-list__item">
                                        <a href="https://www.linkedin.com" class="social-share-list__link"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="social-share-list__item">
                                        <a href="https://www.pinterest.com" class="social-share-list__link"><i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-6 lg:col-span-4">
                    <div class="team-item">
                        <div class="team-item__thumb">
                            <img src="assets/images/thumbs/team3.png" alt="" class="cover-img">
                        </div>
                        <div class="team-item__content flx-between flex-nowrap">
                            <div>
                                <h6 class="mb-1 text-white team-item__name">Bessie Cooper</h6>
                                <span class="text-white team-item__designation font-12 fw-light">Director of
                                    Sales</span>
                            </div>
                            <div class="social-share">
                                <button type="button" class="social-share__button"><i
                                        class="fas fa-share-alt"></i></button>
                                <ul class="social-share-list">
                                    <li class="social-share-list__item">
                                        <a href="https://www.facebook.com" class="social-share-list__link"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="social-share-list__item">
                                        <a href="https://www.twitter.com" class="social-share-list__link"><i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="social-share-list__item">
                                        <a href="https://www.linkedin.com" class="social-share-list__link"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="social-share-list__item">
                                        <a href="https://www.pinterest.com" class="social-share-list__link"><i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= Team Section End ============================= -->

    <!-- ============================= CTA section Start ===================== -->


</div><!-- ==================== Breadcrumb Start Here ==================== -->
</div>

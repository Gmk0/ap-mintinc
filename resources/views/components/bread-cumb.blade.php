
@props(['title'])


<section class="py-16 lg:py-32 breadcrumb">
    <img src="assets/images/thumbs/breadcrumb-img.png" alt="" class="breadcrumb__img">
    <div class="container px-6">
        <div class="flex justify-center">
            <div class="w-8/12 ">
                <div class="breadcrumb__wrapper">
                    <h2 class="breadcrumb__title">{{$title}}</h2>
                    <ul class="breadcrumb__list">
                        <li class="breadcrumb__item"><a href="index.html" class="breadcrumb__link"> <i
                                    class="las la-home"></i> Accueil</a> </li>
                        <li class="breadcrumb__item"><i class="fas fa-angle-right"></i></li>
                        <li class="breadcrumb__item"> <span class="breadcrumb__item-text"> {{$title}} </span> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

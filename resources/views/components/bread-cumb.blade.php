
@props(['title','firsturl'=>null,'secondelement'=>null])


<section class="py-12 lg:py-24 breadcrumb">
    <img src="/assets/images/thumbs/breadcrumb-img.png" alt="bread" class="breadcrumb__img">
    <div class="container px-6">
        <div class="flex justify-center">
            <div class="w-8/12 ">
                <div class="breadcrumb__wrapper">
                    <h2 class="breadcrumb__title">{{$title}}</h2>
                    <ul class="breadcrumb__list">
                        <li class="breadcrumb__item">
                            <a href="{{route('home')}}" class="breadcrumb__link"> <i
                                    class="las la-home"></i> {{__('brand.home')}}</a> </li>
                        <li class="breadcrumb__item"><i class="fas fa-angle-right"></i></li>

                        @if ($firsturl != null)
                            <li class="breadcrumb__item">
                                <a href="{{$firsturl}}" class="breadcrumb__link"><span class="breadcrumb__item-text"> {{$title}} </span></a>
                            </li>
                        @else
                            <li class="breadcrumb__item"> <span class="breadcrumb__item-text"> {{$title}} </span> </li>
                        @endif

                        @if($secondelement!=null && $firsturl != null)
                        <li class="breadcrumb__item"><i class="fas fa-angle-right"></i></li>
                        <li class="breadcrumb__item"> <span class="breadcrumb__item-text"> {{$secondelement}} </span> </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

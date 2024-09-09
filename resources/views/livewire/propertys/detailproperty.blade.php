<?php

use Livewire\Volt\Component;
use App\Models\Property;
use Illuminate\View\View;

new class extends Component {

    public $property;




    public function mount($slug){
        $this->property = Property::findBySlug($slug);



        if($this->property==null)
        {
        return redirect(route('home'));
        }
    }

    public function with()
    {

        return [
            'categories'=>\App\Models\Category::all(),
            'properties'=>\App\Models\Property::latest()->take(6)->get(),
        ];
    }

    public function rendering(View $view): void
    {
    $view->title('Proprietes');

    // ...
    }


    //
}; ?>

<div>
    <x-bread-cumb title="Proprietes" :firsturl="route('property.allproperty')" :secondelement="$property->title"/>
    <section class="py-32 bg-white property-details">
        <div class="container px-12 container-two">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 lg:col-span-8">
                    <div class="grid grid-cols-12 gap-4">
                        @forelse ($property->getMedia('*') as $index=> $image)
                            @php
                                $colSpan=match($index){
                                0=>'col-span-12 col-sm-12',
                                default=>'col-span-6 lg:col-span-4',
                                }
                            @endphp
                        <div class="{{$colSpan}}">



                            <div class="property-details__thumb">
                                <img src="{{$image->getUrl()}}" alt="{{$image->name}}" class="cover-img">
                            </div>
                        </div>

                        @empty

                        @endforelse

                    </div>
                    <div class="property-details-wrapper">
                        <div class="property-details-item">
                            <h6 class="property-details-item__title">{{__('brand.preview')}}</h6>
                            <div class="property-details-item__content">
                                <div class="grid grid-cols-12 gap-4 lg:gap-5">
                                    @empty (!$property->rooms)
                                    <div class="col-span-6 lg:col-span-4">
                                        <div class="flex items-center amenities-content">
                                            <span class="amenities-content__icon">
                                                <img src="/assets/images/icons/amenities1.svg" alt="">
                                            </span>
                                            <div class="amenities-content__inner">
                                                <span class="amenities-content__text">{{__('brand.chambre')}}</span>
                                                @forelse ($property->rooms as $key=> $value)

                                                <h6 class="my-1 amenities-content__title font-16">{{$key}}  {{$value}}</h6>

                                                @empty

                                                @endforelse

                                            </div>
                                        </div>
                                    </div>
                                    @endempty


                                    <div class="hidden col-span-6 lg:col-span-4">
                                        <div class="flex items-center amenities-content">
                                            <span class="amenities-content__icon">
                                                <img src="/assets/images/icons/amenities4.svg" alt="">
                                            </span>
                                            <div class="amenities-content__inner">
                                                <span class="amenities-content__text">Space</span>
                                                <h6 class="mb-0 amenities-content__title font-16">3 Space</h6>
                                            </div>
                                        </div>
                                    </div>
                                    @empty (!$property->area)
                                    <div class="col-span-6 lg:col-span-4">
                                        <div class="flex items-center amenities-content">
                                            <span class="amenities-content__icon">
                                                <img src="/assets/images/icons/amenities5.svg" alt="">
                                            </span>

                                            <div class="amenities-content__inner">
                                                <span class="amenities-content__text">{{__('brand.size')}}</span>
                                                <h6 class="mb-0 amenities-content__title font-16">{{$property->area}}</h6>
                                            </div>



                                        </div>
                                    </div>
                                    @endempty

                                    @empty (!$property->category->name)
                                    <div class="col-span-6 lg:col-span-4">
                                        <div class="flex items-center amenities-content">
                                            <span class="amenities-content__icon">
                                                <img src="/assets/images/icons/amenities6.svg" alt="">
                                            </span>

                                            <div class="amenities-content__inner">
                                                <span class="amenities-content__text">{{('brand.Property Type')}}</span>
                                                <h6 class="mb-0 amenities-content__title font-16">{{$property->category->name}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                    @endempty
                                </div>
                            </div>
                        </div>

                        @empty(!$property->features)

                        <div class="property-details-item">
                            <h6 class="property-details-item__title">{{__('brand.features')}}</h6>
                            <div class="property-details-item__content">
                                <div class="grid grid-cols-12 gap-2">
                                    @foreach ($property->features as $value)
                                    <div class="col-span-6">
                                        <ul class="check-list">
                                            <li class="flex items-center check-list__item">
                                                <span class="icon"><i class="fas fa-check"></i></span>
                                                <span class="text">{{$value['feature'?? 'no name']}}</span>
                                            </li>




                                        </ul>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        @endempty
                        <div class="property-details-item">
                            <h6 class="property-details-item__title">{{__('brand.address')}}</h6>
                            <div class="property-details-item__content">
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="col-span-6">
                                        <div class="flex items-center gap-4 address-content">

                                            <h6 class="mb-0 address-content__title font-15">{{$property->state}}-{{$property->country}}</h6>
                                        </div>
                                    </div>
                                    <div class="hidden col-span-6">
                                        <div class="flex items-center gap-4 address-content">
                                            <span class="address-content__text font-18">Code</span>
                                            <h6 class="mb-0 address-content__title font-15">2365</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="address-map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1150112.1628856962!2d44.64619029447154!3d23.086651461779507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43348a67e24b%3A0xff45e502e1ceb7e2!2sBurj%20Khalifa!5e0!3m2!1sen!2sbd!4v1707037970965!5m2!1sen!2sbd"
                                        allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                        @empty(!$property->lien_video)
                        <div class="property-details-item">
                            <h6 class="property-details-item__title">{{__('brand.video')}}</h6>
                            <div class="property-details-item__content">
                                <div class="relative house-content">
                                    <img src="{{$property->getFirstMediaUrl('properties')}}" alt="">

                                    <a href="{{$property->lien_video}}"
                                        class="popup-video-link video-popup__button style-two">
                                        <i class="fas fa-play text-gradient"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                        @endempty

                       <div class="flex justify-center mt-2">
                        <a href="https://wa.me/2430844720350?text={{ urlencode('Bonjour, je suis intéressé par la maison : ' . $property->title) }}"
                            target="_blank" class="flex-shrink-0 btn btn-main fw-normal">
                            {{ __('brand.nous_contacter') }}
                        </a>
                    </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <div class="common-sidebar-wrapper">
                        <div class="common-sidebar">
                            <h6 class="common-sidebar__title"> {{__('brand.category')}} </h6>
                            <ul class="category-list">
                                @forelse ($categories as $category)

                                <li class="category-list__item">
                                    <a href="{{ route('property.allproperty', ['category' => $category->name]) }}" class="category-list__link flx-between">
                                        <span class="text">{{$category->name}}</span>
                                        <span class="number">({{$category->properties->count()}})</span>
                                    </a>
                                </li>
                                @empty

                                @endforelse

                            </ul>
                        </div>
                        <div class="hidden common-sidebar">
                            <h6 class="common-sidebar__title"> Recent Post </h6>
                            <div class="latest-blog">
                                <div class="latest-blog__thumb">
                                    <a href="blog-details.html"> <img src="/assets/images/thumbs/latest-blog1.png"
                                            class="cover-img" alt=""></a>
                                </div>
                                <div class="latest-blog__content">
                                    <span class="gap-1 latest-blog__category font-12 flx-align">
                                        <span class="icon text-gradient"><i class="fas fa-folder-open"></i></span>
                                        Category</span>
                                    <h6 class="latest-blog__title">
                                        <a href="blog-details.html">A picture is worth standard and stand us return</a>
                                    </h6>
                                </div>
                            </div>
                            <div class="latest-blog">
                                <div class="latest-blog__thumb">
                                    <a href="blog-details.html"> <img src="/assets/images/thumbs/latest-blog2.png"
                                            class="cover-img" alt=""></a>
                                </div>
                                <div class="latest-blog__content">
                                    <span class="gap-1 latest-blog__category font-12 flx-align">
                                        <span class="icon text-gradient"><i class="fas fa-folder-open"></i></span>
                                        Category</span>
                                    <h6 class="latest-blog__title">
                                        <a href="blog-details.html">Your journ homeownership starts here</a>
                                    </h6>
                                </div>
                            </div>
                            <div class="latest-blog">
                                <div class="latest-blog__thumb">
                                    <a href="blog-details.html"> <img src="/assets/images/thumbs/latest-blog3.png"
                                            class="cover-img" alt=""></a>
                                </div>
                                <div class="latest-blog__content">
                                    <span class="gap-1 latest-blog__category font-12 flx-align">
                                        <span class="icon text-gradient"><i class="fas fa-folder-open"></i></span>
                                        Category</span>
                                    <h6 class="latest-blog__title">
                                        <a href="blog-details.html">Trust us to guide you the a through the process</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="common-sidebar">

                            <h6 class="common-sidebar__title"> {{__('brand.properties')}} </h6>

                            <div class="grid grid-cols-12 gap-4">

                               @forelse ($properties as $property)
                               <div class="col-span-6 lg:col-span-4">
                                <a href="{{route('property.detailproperty',$property->slug)}}" class="properties-item d-block w-100">
                                    <img src="{{$property->getFirstMediaUrl('properties')}}" alt="Property Image" class="cover-img">
                                    <span class="truncate properties-item__text">{{$property->title}}</span>
                                </a>
                            </div>

                            @empty

                            @endforelse

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

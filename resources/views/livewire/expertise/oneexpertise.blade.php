<?php

use function Livewire\Volt\{mount,state,title};


state(['expertise','nextProperty'=>null,'previousProperty']);

title('expertise');

mount(function($slug){

    $this->expertise=\App\Models\Expertise::findBySlug($slug);



    if($this->expertise==null)
    {
        return redirect(route('home'));
    }

    $this->nextProperty = \App\Models\Expertise::where('id', '>', $this->expertise->id)
    ->orderBy('id')
    ->first();


    $this->previousProperty = \App\Models\Expertise::where('id', '<', $this->expertise->id)
        ->orderBy('id', 'desc') // Tri dans l'ordre décroissant pour obtenir la propriété avec l'ID le plus élevé qui est
        ->first();






});

?>

<div>
    <x-bread-cumb :title="$expertise->title" />


    <section class="py-8 bg-white lg:py-8 about-three">
        <div class="px-6 container-two">
            <div class="grid grid-cols-12 gap-4 ">
                <div class="col-span-12 lg:col-span-6">
                    <div class="about-three-thumb">
                        <div class="about-three-thumb__inner">
                            <img src="{{$expertise->getFirstMediaUrl()}}" alt="">
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
                            <h2 class="text-2xl lg:text-4xl section-heading__title">{{$expertise->title}}</h2>
                            <div class="text-justify section-heading__desc font-18">

                                {!! tiptap_converter()->asHTML($expertise->content) !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="flex justify-between px-4 my-8 ">
        <div>
            @if($previousProperty !=null)
                <a href="{{route('expertise.oneexpertise',$previousProperty->slug)}}" class="flex-shrink-0 btn btn-main fw-normal">
                    {{__('brand.prev')}} : {{ $previousProperty->title }}
                </a>
                @endif
        </div>

        <div>

       @if($nextProperty !=null)
    <a href="{{route('expertise.oneexpertise',$nextProperty->slug)}}"
         class="flex-shrink-0 btn btn-main fw-normal">
        {{__('brand.next')}} : {{ $nextProperty->title }}
    </a>
    @endif
    </div>

    </div>

    <section class="">
        <div class="container container-two">
            <div class="bg-white contact-form">
                <div class="section-heading">

                    <h2 class="text-2xl section-heading__title">{{__('brand.avez_vous_question')}}? </h2>
                    <p class="text-2xl section-heading__desc">{{('brand.en_savoir_plus')}} {{$expertise->title}}</p>
                </div>
                <form action="#" class="contact-form__form">
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-6 col-xs-6">
                            <input type="text" class="common-input" placeholder="{{__('brand.your_name')}}">
                        </div>
                        <div class="col-span-6 col-xs-6">
                            <input type="email" class="common-input" placeholder="{{__('brand.your_email')}}">
                        </div>
                        <div class="col-span-6 col-xs-6">
                            <input type="tel" class="common-input" placeholder="{{__('brand.your_phone')}}">
                        </div>
                        <div class="col-span-6 col-xs-6">
                            <input type="text" value="{{$expertise->title}}"   class="common-input" placeholder="Sujet">
                        </div>
                        <div class="col-span-12">
                            <textarea class="common-input" placeholder="{{__('brand.your_message')}}"></textarea>
                        </div>
                        <div class="flex items-center justify-center col-span-12">
                            <button type="submit" class="btn btn-main w-100">{{__('brand.send')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

</div>

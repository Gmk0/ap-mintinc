<?php

use Livewire\Volt\Component;
use App\Models\ConstructionProject;
use function Livewire\Volt\{computed,with};

with(fn()=>[
    'constructions'=>ConstructionProject::latest()->take(4)->get(),
]);


 ?>

 <div>



<section class="px-6 py-2 bg-white gallery-section">
    <div class="container container-two">
        <div class="section-heading">
            <span class="bg-transparent section-heading__subtitle"> <span
                    class="text-gradient fw-semibold">{{__('brand.our_project')}}</span> </span>
            <h2 class="text-2xl section-heading__title lg:text-4xl">{{__('brand.our_project_title')}}</h2>
        </div>
        <div class="flex justify-end mb-4">
            <a href="{{route('project.allprojects')}}" class="btn btn-main fw-normal"> {{__('brand.more')}}
                <span class="icon-right"> <i class="fas fa-arrow-right"></i> </span>
            </a>

        </div>
        <div class="grid grid-cols-12 gap-4">


            @forelse ($constructions as $index=> $item)

            @php
                $colSpan=match($index){
                    0=>'col-span-12 lg:col-span-6',
                    1=>"col-span-6 lg:col-span-6",
                    2=>'col-span-6 lg:col-span-6',
                    3=>'col-span-6 lg:col-span-6',
                    default=>'col-span-5 lg:col-span-4',
                }
            @endphp

            <div class="{{$colSpan}} ">
                <div class="gallery-thumb">

                    <div class="project-page-thumb">
                        <img src="{{$item->getFirstMediaUrl('projets')}}" alt="" class="w-full h-96 cover-img">
                        <div class="project-page-content">
                            <h6 class="project-page-content__title">
                                <a href="{{route('project.detail',$item->slug)}}" class="text-lg link">{{$item->title}}</a>
                            </h6>
                        </div>
                    </div>

                </div>
            </div>

             @empty

            @endforelse

        </div>
    </div>
</section>
</div>

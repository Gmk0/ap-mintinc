<?php


use function Livewire\Volt\{layout, state,with, title};
use App\Models\ConstructionProject;


title('Projets');

with(fn()=>[
    'constructions'=>\App\Models\ConstructionProject::all(),
]);


?>



<div>

    <x-bread-cumb title="Projets" />
<section class="py-8 project-page">
    <div class="container px-12 container-two">
        <div class="grid grid-cols-12 gap-4">



           @foreach ($constructions as $index => $item)
            <div class="col-span-6 md:col-span-4 sm:col-span-6">
                <div class="project-page-thumb">
                    <img src="/images/house/1.png" alt="" class="cover-img">
                    <div class="project-page-content">
                        <h6 class="project-page-content__title">
                            <a href="{{route('project.detail',$item->slug)}}" class="link">Where Innovation Meets Interior Design</a>
                        </h6>
                    </div>
                </div>
            </div>

            @endforeach
            {{--
        <div class="col-span-6 md:col-span-4 sm:col-span-6">
                <div class="project-page-thumb">
                    <img src="/images/house/1.png" alt="" class="cover-img">
                    <div class="project-page-content">
                        <h6 class="project-page-content__title">
                            <a href="{{route('project.detail')}}" class="link">Where Innovation Meets Interior Design</a>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-span-6 md:col-span-4 sm:col-span-6">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12">
                        <div class="project-page-thumb">
                            <img src="/images/house/4.png" alt="" class="cover-img">
                            <div class="project-page-content">
                                <h6 class="project-page-content__title">
                                    <a href="{{route('project.detail')}}" class="link">Where Innovation Meets Interior
                                        Design</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <div class="project-page-thumb">
                            <img src="/images/house/5.png" alt="" class="cover-img">
                            <div class="project-page-content">
                                <h6 class="project-page-content__title">
                                    <a href="{{route('project.detail')}}" class="link">Where Innovation Meets Interior
                                        Design</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-6 md:col-span-4 sm:col-span-6">
                <div class="project-page-thumb">
                    <img src="/images/house/construction.jpg" alt="" class="cover-img">
                    <div class="project-page-content">
                        <h6 class="project-page-content__title">
                            <a href="{{route('project.detail')}}" class="link">Where Innovation Meets Interior Design</a>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-span-6 md:col-span-4 sm:col-span-6">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12">
                        <div class="project-page-thumb">
                            <img src="/images/house/house2.jpg" alt="" class="cover-img">
                            <div class="project-page-content">
                                <h6 class="project-page-content__title">
                                    <a href="{{route('project.detail')}}" class="link">Where Innovation Meets Interior
                                        Design</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <div class="project-page-thumb">
                            <img src="/images/house/terrain.jpg" alt="" class="cover-img">
                            <div class="project-page-content">
                                <h6 class="project-page-content__title">
                                    <a href="{{route('project.detail')}}" class="link">Where Innovation Meets Interior
                                        Design</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-6 md:col-span-4 sm:col-span-6">
                <div class="project-page-thumb">
                    <img src="/images/house/terrain.jpg" alt="" class="cover-img">
                    <div class="project-page-content">
                        <h6 class="project-page-content__title">
                            <a href="{{route('project.detail')}}" class="link">Where Innovation Meets Interior Design</a>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-span-6 md:col-span-4 sm:col-span-6">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12">
                        <div class="project-page-thumb">
                            <img src="assets/images/thumbs/project-img2.png" alt="" class="cover-img">
                            <div class="project-page-content">
                                <h6 class="project-page-content__title">
                                    <a href="{{route('project.detail')}}" class="link">Where Innovation Meets Interior
                                        Design</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <div class="project-page-thumb">
                            <img src="assets/images/thumbs/project-img3.png" alt="" class="cover-img">
                            <div class="project-page-content">
                                <h6 class="project-page-content__title">
                                    <a href="{{route('project.detail')}}" class="link">Where Innovation Meets Interior
                                        Design</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}
        </div>
    </div>
</section>
</div>

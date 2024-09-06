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


          @foreach ($constructions as $index => $project)
        @if ($index % 3 == 0)
        <div class="col-span-6 md:col-span-4 sm:col-span-6">
            <div class="project-page-thumb">
                <img src="{{ $project->getFirstMediaUrl('projets') }}" alt="{{ $project->title }}" class="cover-img">
                <div class="project-page-content">
                    <h6 class="project-page-content__title">
                        <a href="{{ route('project.detail', $project->id) }}" class="link">{{ $project->title }}</a>
                    </h6>
                </div>
            </div>
        </div>
        @elseif ($index % 3 == 1)
        <div class="col-span-6 md:col-span-4 sm:col-span-6">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12">
                    <div class="project-page-thumb">
                        <img src="{{ $project->getFirstMediaUrl('projets') }}" alt="{{ $project->title }}" class="cover-img">
                        <div class="project-page-content">
                            <h6 class="project-page-content__title">
                                <a href="{{ route('project.detail', $project->id) }}" class="link">{{ $project->title }}</a>
                            </h6>
                        </div>
                    </div>
                </div>
                @if ($index + 1 < count($constructions)) <div class="col-span-12">
                    <div class="project-page-thumb">
                        <img src="{{ $constructions[$index + 1]->getFirstMediaUrl('projets') }}"
                            alt="{{ $constructions[$index + 1]->title }}" class="cover-img">
                        <div class="project-page-content">
                            <h6 class="project-page-content__title">
                                <a href="{{ route('project.detail', $constructions[$index + 1]->id) }}" class="link">{{
                                    $constructions[$index + 1]->title }}</a>
                            </h6>
                        </div>
                    </div>
            </div>
            @php $index++ @endphp
            <!-- Incrémente manuellement l'index pour sauter l'élément affiché ici -->
            @endif
        </div>
        </div>
        @endif
        @endforeach






            {{--

           @forelse ($constructions as $index => $item)
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
            @empty

            @endforelse

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

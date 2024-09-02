<?php

use Livewire\Volt\Component;
use App\Models\ConstructionProject;

new class extends Component {

    public  $construction;
    public function mount($slug)
    {
        $this->construction=ConstructionProject::findBySlug($slug);


        if($this->construction==null)
        {
            return redirect(route('home'));
        }


    }
    //
}; ?>

<div>
    <x-bread-cumb title="Details projets" :firsturl="route('project.allprojects')" secondelement="first"  />
    <section class="py-16 project-details">
        <div class="container px-12 container-two">
            <div class="project-details__thumb">
                <img src="{{$construction->getFirstMediaUrl('projets')}}" class="" alt="">
            </div>
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 lg:col-span-8">
                    <div class="project-details__content">
                        <h2 class="text-4xl project-details__title">{{$construction->title}}</h2>

                        <div class="prose">

                            {{$construction->description}}

                        </div>

                    </div>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <div class="project-sidebar__box">
                        <ul class="project-sidebar">

                            @if ($construction->client)


                            <li class="project-sidebar__item">
                                <span class="project-sidebar__text font-12">Client</span>
                                <h6 class="mb-0 font-semibold project-sidebar__title font-16">{{$construction->client}}</h6>
                            </li>
                            @endif
                            @if ($construction->cost)


                            <li class="project-sidebar__item">
                                <span class="project-sidebar__text font-12">{{$construction->cost}}</span>
                                <h6 class="mb-0 font-semibold project-sidebar__title font-16">cout du projet  </h6>
                            </li>
                            @endif

                            @if($construction->category)
                            <li class="project-sidebar__item">
                                <span class="project-sidebar__text font-12">Category</span>
                                <h6 class="mb-0 font-semibold project-sidebar__title font-16">{{$construction->category}}</h6>
                            </li>
                            @endif
                            <li class="project-sidebar__item">
                                <span class="project-sidebar__text font-12">Date</span>
                                <h6 class="mb-0 font-semibold project-sidebar__title font-16">{{$construction->end_date}}</h6>
                            </li>
                        </ul>
                        <ul class="mt-4 social-share-list style-two lg:mt-5">
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
    </section>
</div>

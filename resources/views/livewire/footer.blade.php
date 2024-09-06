
<?php

use Livewire\Volt\Component;
use App\Models\Expertise;
use function Livewire\Volt\{computed};


$expertises=computed(function(){

    return Expertise::all();

});
 ?>
<div class="col-span-6 lg:col-span-4">
    <div class="footer-item lg:mr-5">
        <h6 class="footer-item__title">{{__('brand.nos_service')}}</h6>
        <ul class="footer-menu">
            @forelse ($this->expertises as $expertise)
            <li class="footer-menu__item"><a href="{{route('expertise.oneexpertise',$expertise->slug)}}" class="footer-menu__link">{{$expertise->title}}</a></li>

            @empty

            @endforelse


        </ul>
</div>

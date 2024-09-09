<?php

use Livewire\Volt\Component;

use function Livewire\Volt\{state};

state(['email']);


$save=function(){

    try{\App\Models\Newsletter::create(['email'=>$this->email]);
    $this->dispatch('event',['icon'=>'success', 'title'=>'Votre eamil a ete enregistrer avec succes']);

    $this->reset('email');
}catch(\Exception $e){

    dd($e->getMessage());

    $this->dispatch('event',['icon'=>'error', 'title'=>"Votre eamil n'a ete enregistrer avec succes"]);
}


};


 ?>

<div class="gap-3 flx-between">
    <div class="footer-top__left">
        <span class="hidden icon"><img src="/assets/images/icons/envelop-icon.svg" alt=""></span>
        <h2 class="mb-0 text-white text">{{__('brand.subscribe_our_letter')}}</h2>
    </div>
    <form  wire:submit.prevent='save' class="flex items-center gap-3 subscribe-form">
        <div class="position-relative w-100">
            <input required type="email" wire:model='email' class="common-input common-input--withLeftIcon w-100"
                placeholder="Enter Your Email Address">
            <span class="input-icon input-icon--left text-gradient font-20 line-height-1"><i
                    class="far fa-envelope"></i></span>
        </div>
        <button type="submit" class="flex-shrink-0 btn btn-main fw-normal">{{__('brand.subscrire')}}</button>
    </form>
</div>

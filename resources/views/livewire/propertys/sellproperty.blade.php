<?php

use Livewire\Volt\Component;
use Livewire\WithFileUploads;
use Spatie\LivewireFilepond\WithFilePond;


new class extends Component {
    //




    #[Validate(['photos.*' => 'image|max:1024'])]
    public $photos = [];


    public $property=[];




    public function saveElement(){

try{
      $this->validate([
            'property.title' => 'required',
            'property.description' => 'required',
          //  'property.status' => 'required', // Par exemple
            'property.prix' => 'required',
            'property.area' => 'required',
            'property.nom' => 'required',
            'property.email' => 'required|email',
            'property.numero' => 'required',
        // 'photos.*' => 'required', // Valider les photos
            ]);

            $property = \App\Models\PropertySell::create($this->property);

            $this->reset('property');
        }catch(\Exception $e){
            dd($e->getMessage());

        }


    }


}; ?>

<div>
    <x-bread-cumb title="{{ __('brand.Sell property') }}" />
    <section class="py-8 listing">
        <div class="container px-6 container-two">
            <div class="flex flex-col gap-4 lg:flex-row">
                <div class="w-full lg:w-3/12">
                    <div class="listing-sidebar">
                        <ul id="list-scroll" class="flex flex-col gap-2 sidebar-list">
                            <li class="sidebar-list__item">
                                <a href="#basicInformation" class="sidebar-list__link">{{ __('brand.Basic Information')
                                    }}</a>
                            </li>
                            <li class="sidebar-list__item">
                                <a href="#propertyGallery" class="sidebar-list__link">{{ __('brand.Property Gallery')
                                    }}</a>
                            </li>

                            <li class="sidebar-list__item">
                                <a href="#propertyContactDetails" class="sidebar-list__link">{{ __('brand.Property Contact Details') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
               @livewire("file-upload")
            </div>
        </div>
    </section>
</div>

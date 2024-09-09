<div class="w-full lg:w-9/12">
    <div data-bs-spy="scroll" data-bs-target="#list-scroll" data-bs-offset="0" data-bs-smooth-scroll="true"
        class="scrollspy-example" tabindex="0">
        <form wire:submit.prevent='saveElement'>
            <div class="card-item" id="basicInformation">
                <div class="card common-card">
                    <div class="card-header">
                        <h6 class="mb-0 title">{{ __('brand.Property Basic Information') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="grid grid-cols-12 gap-4">
                            <div class="col-span-12">
                                <label for="propertyTitle" class="form-label">{{ __('brand.Property Title') }}</label>
                                <input wire:model='property.title' required type="text" class="common-input"
                                    id="propertyTitle" placeholder="{{ __('brand.Property Title') }}">

                                @error('property.title')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-12">
                                <label for="Description" class="form-label">{{ __('brand.Description')
                                    }}</label>
                                <textarea wire:model='property.description' required class="common-input"
                                    id="Description" placeholder="{{ __('brand.Description') }}"></textarea>

                                @error('property.description')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-6">
                                <label for="Status" class="form-label">{{ __('brand.Status') }}</label>
                                <div class="select-has-icon icon-black">
                                    <select wire:model='property.status' required class="select common-input"
                                        id="Status">
                                        <option value="" disabled="">{{ __('brand.Status') }}</option>
                                        <option value="for rent">{{ __('brand.For Rent') }}</option>
                                        <option value="for sell">{{ __('brand.For Sell') }}</option>
                                    </select>

                                    @error('property.status')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-6">
                                <label for="Type" class="form-label">{{ __('brand.Type') }}</label>
                                <div class="select-has-icon icon-black">
                                    <select wire:model='property.category_id' required class="select common-input"
                                        id="Type">
                                        <option value="" disabled="">{{ __('brand.Type') }}</option>


                                        @forelse ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>

                                        @empty
                                        <option value="">not found</option>

                                        @endforelse

                                    </select>

                                    @error('property.category_id')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-6">
                                <label for="Price" class="form-label">{{ __('brand.Price') }}</label>
                                <input type="number" wire:model='property.prix' required class="common-input" id="Price"
                                    placeholder="USD">

                                @error('property.prix')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-6">
                                <label for="Area" class="form-label">{{ __('brand.Area') }}</label>
                                <input type="number" wire:model='property.area' required class="common-input" id="Area"
                                    placeholder="Sq Ft">

                                @error('property.area')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card-item" id="">
                <div class="card common-card">
                    <div class="card-header">
                        <h6 class="mb-0 title">{{ __('brand.Property Gallery') }}</h6>
                    </div>
                    <div class="card-body">

                        <x-filepond::upload :multiple="true" wire:model="photos" />


                    </div>

                    @error('property.photos')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="card-item" id="propertyContactDetails">
                <div class="card common-card">
                    <div class="card-header">
                        <h6 class="mb-0 title">{{ __('brand.Property Contact Details') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="grid grid-cols-12 gap-4">
                            <div class="col-span-6 md:col-span-4">
                                <label for="Name" class="form-label">{{__('brand.Your Name')}}</label>
                                <input type="text" wire:model='property.nom' id="Name" required class="common-input"
                                    placeholder="{{__('brand.Your Name')}}">


                            </div>
                            <div class="col-span-6 md:col-span-4">
                                <label for="Email" class="form-label">{{__('brand.Your Email')}}</label>
                                <input type="email" wire:model='property.email' required id="Email" class="common-input"
                                    placeholder="{{__('brand.Your Email')}}">
                            </div>
                            <div class="col-span-6 md:col-span-4">
                                <label for="Phone" class="form-label">{{__('brand.Phone Number')}}</label>
                                <input type="tel" id="Phone" wire:model='property.numero' required class="common-input"
                                    placeholder="{{__('brand.Phone Number')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <button type="submit" class=" btn btn-main w-100">Submit Property</button>

            </div>
        </form>
    </div>

</div>






<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
    <x-bread-cumb title="Sell property" />
    <section class="py-8 listing">
        <div class="container px-6 container-two">
            <div class="flex flex-col gap-4 lg:flex-row">
                <div class="w-full lg:w-3/12">
                    <div class="listing-sidebar">
                        <ul id="list-scroll" class="flex flex-col gap-2 sidebar-list">
                            <li class="sidebar-list__item">
                                <a href="#basicInformation" class="sidebar-list__link">Basic Information</a>
                            </li>
                            <li class="sidebar-list__item">
                                <a href="#propertyGallery" class="sidebar-list__link">Property Gallery</a>
                            </li>
                            <li class="sidebar-list__item">
                                <a href="#propertyInformation" class="sidebar-list__link">Property Information</a>
                            </li>
                            <li class="sidebar-list__item">
                                <a href="#propertyContactDetails" class="sidebar-list__link">Property Contact Details </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full lg:w-9/12">
                    <div data-bs-spy="scroll" data-bs-target="#list-scroll" data-bs-offset="0" data-bs-smooth-scroll="true"
                        class="scrollspy-example" tabindex="0">
                        <form action="#" enctype="multipart/form-data">
                            <div class="card-item" id="basicInformation">
                                <div class="card common-card">
                                    <div class="card-header">
                                        <h6 class="mb-0 title">Property Basic Information</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="grid grid-cols-12 gap-4">
                                            <div class="col-span-12">
                                                <label for="propertyTitle" class="form-label">Property Title</label>
                                                <input type="text" class="common-input" id="propertyTitle"
                                                    placeholder="Property Title">
                                            </div>
                                            <div class="col-span-12">
                                                <label for="Description" class="form-label">Description</label>
                                                <textarea class="common-input" id="Description"
                                                    placeholder="Your Message"></textarea>
                                            </div>
                                            <div class="col-span-6">
                                                <label for="Status" class="form-label">Status</label>
                                                <div class="select-has-icon icon-black">
                                                    <select class="select common-input" id="Status">
                                                        <option value="1" disabled="">Status</option>
                                                        <option value="1">For Rent</option>
                                                        <option value="1">For Sell</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-span-6">
                                                <label for="Type" class="form-label">Status</label>
                                                <div class="select-has-icon icon-black">
                                                    <select class="select common-input" id="Type">
                                                        <option value="1" disabled=""> Type</option>
                                                        <option value="1">Apartment</option>
                                                        <option value="1">House</option>
                                                        <option value="1">Land</option>
                                                        <option value="1">Single Family</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-span-6">
                                                <label for="Price" class="form-label">Price</label>
                                                <input type="number" class="common-input" id="Price" placeholder="USD">
                                            </div>
                                            <div class="col-span-6">
                                                <label for="Area" class="form-label">Area</label>
                                                <input type="number" class="common-input" id="Area" placeholder="Sq Ft">
                                            </div>
                                            <div class="col-span-12 lg:col-span-6">
                                                <label for="Rooms" class="form-label">Rooms</label>
                                                <div class="select-has-icon icon-black">
                                                    <select class="select common-input" id="Rooms">
                                                        <option value="1" disabled=""> Rooms</option>
                                                        <option value="1">Apartment</option>
                                                        <option value="1">House</option>
                                                        <option value="1">Land</option>
                                                        <option value="1">Single Family</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-item" id="propertyGallery">
                                <div class="card common-card">
                                    <div class="card-header">
                                        <h6 class="mb-0 title">Property Gallery</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="input-images"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-item" id="propertyInformation">
                                <div class="card common-card">
                                    <div class="card-header">
                                        <h6 class="mb-0 title">Details Information</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="grid grid-cols-12 gap-4">
                                            <div class="col-span-6 lg:col-span-3">
                                                <label for="PropertyId" class="form-label">Property Id</label>
                                                <input type="text" class="common-input" id="PropertyId"
                                                    placeholder="Property Id">
                                            </div>
                                            <div class="col-span-6 lg:col-span-3">
                                                <label for="AreaSize" class="form-label">Area Size</label>
                                                <input type="text" class="common-input" id="AreaSize"
                                                    placeholder="Area Size">
                                            </div>
                                            <div class="col-span-6 lg:col-span-3">
                                                <label for="SizePrefix" class="form-label">Size Prefix</label>
                                                <input type="text" class="common-input" id="SizePrefix"
                                                    placeholder="Size Prefix">
                                            </div>
                                            <div class="col-span-6 lg:col-span-3">
                                                <label for="LandArea" class="form-label">Land Area</label>
                                                <input type="text" class="common-input" id="LandArea"
                                                    placeholder="Land Area">
                                            </div>
                                            <div class="col-span-6 lg:col-span-3">
                                                <label for="Bedrooms" class="form-label">Bedrooms</label>
                                                <input type="text" class="common-input" id="Bedrooms"
                                                    placeholder="Bedrooms">
                                            </div>
                                            <div class="col-span-6 lg:col-span-3">
                                                <label for="Bathrooms" class="form-label">Bathrooms</label>
                                                <input type="text" class="common-input" id="Bathrooms"
                                                    placeholder="Bathrooms">
                                            </div>
                                            <div class="col-span-6 lg:col-span-3">
                                                <label for="Garages" class="form-label">Garages</label>
                                                <input type="text" class="common-input" id="Garages" placeholder="Garages">
                                            </div>
                                            <div class="col-span-6 lg:col-span-3">
                                                <label for="YearBuild" class="form-label">Year Build</label>
                                                <input type="text" class="common-input" id="YearBuild"
                                                    placeholder="Year Build">
                                            </div>
                                            <div class="col-span-12">
                                                <h6 class="mt-4 checkboxes__title fw-500 font-18">Amenities</h6>
                                                <div class="grid grid-cols-12 gap-3 checkboxes">
                                                    <div class="col-span-6 md:col-span-4">
                                                        <div class="common-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="airCondition">
                                                            <label class="form-check-label" for="airCondition"> Air
                                                                Condition </label>
                                                        </div>
                                                        <div class="common-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="Lawn">
                                                            <label class="form-check-label" for="Lawn"> Lawn </label>
                                                        </div>
                                                        <div class="common-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="SwimmingPool">
                                                            <label class="form-check-label" for="SwimmingPool"> Swimming
                                                                Pool </label>
                                                        </div>
                                                        <div class="common-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="Barbeque">
                                                            <label class="form-check-label" for="Barbeque"> Barbeque
                                                            </label>
                                                        </div>
                                                        <div class="common-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="Microwave">
                                                            <label class="form-check-label" for="Microwave"> Microwave
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-6 md:col-span-4">
                                                        <div class="common-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="TVCable">
                                                            <label class="form-check-label" for="TVCable"> TV Cable </label>
                                                        </div>
                                                        <div class="common-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="Dryer">
                                                            <label class="form-check-label" for="Dryer"> Dryer </label>
                                                        </div>
                                                        <div class="common-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="OutdoorShower">
                                                            <label class="form-check-label" for="OutdoorShower"> Outdoor
                                                                Shower </label>
                                                        </div>
                                                        <div class="common-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="Washer">
                                                            <label class="form-check-label" for="Washer"> Washer </label>
                                                        </div>
                                                        <div class="common-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="Gym">
                                                            <label class="form-check-label" for="Gym"> Gym </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-6 md:col-span-4">
                                                        <div class="common-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="Refrigerator">
                                                            <label class="form-check-label" for="Refrigerator"> Refrigerator
                                                            </label>
                                                        </div>
                                                        <div class="common-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="WiFi">
                                                            <label class="form-check-label" for="WiFi"> WiFi </label>
                                                        </div>
                                                        <div class="common-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="Laundry">
                                                            <label class="form-check-label" for="Laundry"> Laundry </label>
                                                        </div>
                                                        <div class="common-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="Souna">
                                                            <label class="form-check-label" for="Souna"> Souna </label>
                                                        </div>
                                                        <div class="common-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="WindowCoverings">
                                                            <label class="form-check-label" for="WindowCoverings"> Window
                                                                Coverings </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-item" id="propertyContactDetails">
                                <div class="card common-card">
                                    <div class="card-header">
                                        <h6 class="mb-0 title">Property Contact Details</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="grid grid-cols-12 gap-4">
                                            <div class="col-span-6 md:col-span-4">
                                                <label for="Name" class="form-label">Your Name</label>
                                                <input type="text" id="Name" class="common-input" placeholder="Your Name">
                                            </div>
                                            <div class="col-span-6 md:col-span-4">
                                                <label for="Email" class="form-label">Your E-mail</label>
                                                <input type="email" id="Email" class="common-input"
                                                    placeholder="Your E-Mail">
                                            </div>
                                            <div class="col-span-6 md:col-span-4">
                                                <label for="Phone" class="form-label">Phone Number</label>
                                                <input type="tel" id="Phone" class="common-input"
                                                    placeholder="Phone Number">
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
            </div>
        </div>
    </section>
</div>

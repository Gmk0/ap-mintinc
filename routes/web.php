<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::get('/home2', function () {
    return view('welcome');
});




Volt::route('/about', 'about')->name('about');
Volt::route('/contact', 'contact')->name('contact');

Volt::route('/projects/details', 'projects.detailproject')->name('project.detail');

Volt::route('/projects', 'project')->name('projet');

Volt::route('/property/details', 'property.detailproperty')->name('property.detailproperty');

Volt::route('/property', 'property.allproperty')->name('property.allproperty');




Route::get('/', \App\Livewire\Home\Landing::class)->name('home');





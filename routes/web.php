<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::get('/home2', function () {
    return view('welcome');
});




Volt::route('/a-propos-de-nous', 'about')->name('about');
Volt::route('/contact', 'contact')->name('contact');


Route::get('/', \App\Livewire\Home\Landing::class)->name('home');





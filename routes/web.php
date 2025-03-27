<?php

use App\Livewire\HomePage;
use App\Livewire\AllServices;
use App\Livewire\ServiceDetails;
use App\Livewire\Teames;
use App\Livewire\Articles;
use App\Livewire\BlogDetail;
use App\Livewire\ContactPage;
use App\Livewire\Faqs;
use App\Livewire\StaticPage;
use Illuminate\Support\Facades\Route;


Route::get('/', HomePage::class)->name('home');
Route::get('/services', AllServices::class)->name('services');
Route::get('/service/{id}', ServiceDetails::class)->name('service');
Route::get('/teames', Teames::class)->name('teames');
Route::get('/blog', Articles::class)->name('blog');
Route::get('/blog/{id}', BlogDetail::class)->name('blog-details');
Route::get('/faqs', Faqs::class)->name('faqs');
Route::get('/{slug}', StaticPage::class)->name('static-page');
Route::get('/contact', ContactPage::class)->name('contact');

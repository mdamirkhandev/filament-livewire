<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Service;
use App\Models\Page;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        View::composer(['components.layouts.app'], function ($view) {
            $services = Service::orderBy('title', 'ASC')->get();
            $view->with('services', $services);
        });
        $aboutUs = Page::where('slug', 'about-us')->first();
        $privacyPolicy = Page::where('slug', 'privacy-policy')->first();
        $tandc = Page::where('slug', 'terms-and-conditions')->first();
        View::share([
            'aboutUs' => $aboutUs,
            'privacyPolicy' => $privacyPolicy,
            'tandc' => $tandc
        ]);
    }
}

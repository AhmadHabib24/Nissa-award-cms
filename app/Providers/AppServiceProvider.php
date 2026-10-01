<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        \Illuminate\Support\Facades\View::composer('*', function ($view) {
            $currentEdition = \App\Models\Edition::where('status', 'active')->where('is_active', true)->orderBy('year', 'desc')->first();
            $socialLinks = \App\Models\SocialLink::where('is_active', true)->get();
            $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
            $activeAnnouncement = \App\Models\Announcement::where('is_active', true)->latest()->first();
            $view->with('currentEdition', $currentEdition);
            $view->with('socialLinks', $socialLinks);
            $view->with('settings', $settings);
            $view->with('activeAnnouncement', $activeAnnouncement);
        });
    }
}

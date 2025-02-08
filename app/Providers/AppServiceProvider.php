<?php
namespace App\Providers;

use App\Models\ContactInfo;
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
        $contactInfo = ContactInfo::first();
        if (! $contactInfo) {
            ContactInfo::create([
                'phone'     => '+1234567890',
                'email'     => 'admin@example.com',
                'address'   => '123 Main St, Anytown, USA',
                'facebook'  => 'https://www.facebook.com',
                'twitter'   => 'https://twitter.com',
                'instagram' => 'https://www.instagram.com/',
                'linkedin'  => 'https://www.linkedin.com/in/',
                'whatsapp'  => '+1234567890',
                'telegram'  => 'https://t.me',
            ]);
        }
        view()->share('contactInfo', $contactInfo);
    }
}

<?php
namespace Database\Seeders;

use App\Models\ContactInfo;
use Illuminate\Database\Seeder;

class ContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        ContactInfo::create([
            'phone'     => '123-456-7890',
            'email'     => 'example@example.com',
            'address'   => '123 Main St, Anytown, USA',
            'facebook'  => 'https://facebook.com/example',
            'twitter'   => 'https://twitter.com/example',
            'instagram' => 'https://instagram.com/example',
            'linkedin'  => 'https://linkedin.com/in/example',
            'whatsapp'  => '123-456-7890',
            'telegram'  => '@example',
        ]);

    }
}

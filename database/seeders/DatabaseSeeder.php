<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::firstOrCreate([
            'email' => 'admin@nissaawards.com'
        ], [
            'name' => 'Admin User',
            'password' => bcrypt('password'), // password is 'password'
        ]);

        \App\Models\Edition::updateOrCreate(
            ['year' => '2026'],
            [
                'date' => '2026-12-15',
                'venue' => 'Grand Hyatt, London',
                'status' => 'active',
                'is_active' => true,
            ]
        );

        \App\Models\Edition::updateOrCreate(
            ['year' => '2025'],
            [
                'date' => '2025-11-20',
                'venue' => 'Royal Albert Hall, London',
                'status' => 'completed',
                'is_active' => true,
            ]
        );

        \App\Models\Partner::updateOrCreate(
            ['name' => 'L\'Oreal Paris'],
            ['link' => 'https://loreal.com', 'is_active' => true]
        );

        \App\Models\Partner::updateOrCreate(
            ['name' => 'Vogue UK'],
            ['link' => 'https://vogue.co.uk', 'is_active' => true]
        );
        
        \App\Models\Partner::updateOrCreate(
            ['name' => 'Spotify'],
            ['link' => 'https://spotify.com', 'is_active' => true]
        );
        
        \App\Models\SocialLink::updateOrCreate(['platform' => 'Facebook'], ['url' => 'https://facebook.com', 'icon' => 'fa-brands fa-facebook-f', 'is_active' => true]);
        \App\Models\SocialLink::updateOrCreate(['platform' => 'Instagram'], ['url' => 'https://instagram.com', 'icon' => 'fa-brands fa-instagram', 'is_active' => true]);
        \App\Models\SocialLink::updateOrCreate(['platform' => 'LinkedIn'], ['url' => 'https://linkedin.com', 'icon' => 'fa-brands fa-linkedin-in', 'is_active' => true]);

        \App\Models\Setting::updateOrCreate(['key' => 'email'], ['value' => 'contact@nissaawards.com']);
        \App\Models\Setting::updateOrCreate(['key' => 'phone'], ['value' => '+92 309 7961212']);

        \App\Models\Announcement::updateOrCreate(
            ['title' => 'Award Ceremony Registration'],
            [
                'content' => 'The Nissa Awards Ceremony is approaching! Secure your spot by registering yourself for the ceremony today.',
                'link' => 'https://forms.gle/QQWQBau3PPrbMRvh9',
                'link_text' => 'Register Now',
                'is_active' => true,
            ]
        );

        \App\Models\Slider::updateOrCreate(
            ['title' => 'Nissa Awards 2026'],
            [
                'subtitle' => 'Lahore - Nishat Hotel, Emporium Mall',
                'button_text' => 'NOMINATE NOW',
                'button_link' => '#',
                'is_active' => true,
            ]
        );

        $edition = \App\Models\Edition::where('year', 2026)->first();
        if ($edition) {
            \App\Models\EventSchedule::updateOrCreate(['title' => 'Awards Ceremony'], ['edition_id' => $edition->id, 'description' => 'Recognizing top professionals, brands & innovators shaping the future of women\'s empowerment.', 'time_range' => '11:00 AM - 02:00 PM', 'icon' => 'fa-solid fa-trophy', 'order' => 1]);
            \App\Models\EventSchedule::updateOrCreate(['title' => 'Empowerment Conference'], ['edition_id' => $edition->id, 'description' => 'Thought leadership, panel talks, and expert keynotes on digital innovation and success.', 'time_range' => '02:00 PM - 04:00 PM', 'icon' => 'fa-solid fa-users-viewfinder', 'order' => 2]);
            \App\Models\EventSchedule::updateOrCreate(['title' => 'Fashion Showcase'], ['edition_id' => $edition->id, 'description' => 'Exclusive runway show in collaboration with top emerging brands and celebrated designers.', 'time_range' => '04:00 PM - 07:00 PM', 'icon' => 'fa-solid fa-person-dress', 'order' => 3]);
            \App\Models\EventSchedule::updateOrCreate(['title' => 'Concert & Dinner'], ['edition_id' => $edition->id, 'description' => 'Live music, celebrity appearances, and a premium networking dinner to conclude the evening.', 'time_range' => '07:00 PM - 10:00 PM', 'icon' => 'fa-solid fa-music', 'order' => 4]);

            $catTech = \App\Models\Category::updateOrCreate(['name' => 'Tech Innovator of the Year'], ['edition_id' => $edition->id, 'description' => 'For outstanding achievements in technology.']);
            $catCreator = \App\Models\Category::updateOrCreate(['name' => 'Best Content Creator'], ['edition_id' => $edition->id, 'description' => 'For the most engaging digital content.']);

            \App\Models\Nominee::updateOrCreate(
                ['name' => 'Sarah Connor'], 
                ['category_id' => $catTech->id, 'edition_id' => $edition->id, 'email' => 'sarah@example.com', 'slug' => 'sarah-connor', 'status' => 'approved']
            );
            \App\Models\Nominee::updateOrCreate(
                ['name' => 'Ada Lovelace'], 
                ['category_id' => $catTech->id, 'edition_id' => $edition->id, 'email' => 'ada@example.com', 'slug' => 'ada-lovelace', 'status' => 'approved']
            );
            \App\Models\Nominee::updateOrCreate(
                ['name' => 'Jane Doe'], 
                ['category_id' => $catCreator->id, 'edition_id' => $edition->id, 'email' => 'jane@example.com', 'slug' => 'jane-doe', 'status' => 'approved']
            );
            \App\Models\Nominee::updateOrCreate(
                ['name' => 'Mary Smith'], 
                ['category_id' => $catCreator->id, 'edition_id' => $edition->id, 'email' => 'mary@example.com', 'slug' => 'mary-smith', 'status' => 'approved']
            );
        }

        \App\Models\SeoSetting::updateOrCreate(
            ['route_name' => 'home'],
            ['page_name' => 'Home Page', 'url' => '/', 'title' => 'Nissa Awards | Empowering Women', 'description' => 'Join the Nissa Awards 2026. Celebrating women empowerment, leadership, and success.', 'keywords' => 'nissa awards, women empowerment, awards 2026', 'robots' => 'index, follow']
        );
        \App\Models\SeoSetting::updateOrCreate(
            ['route_name' => 'about'],
            ['page_name' => 'About Us', 'url' => '/about', 'title' => 'About Us | Nissa Awards', 'description' => 'Learn more about Nissa Awards and our mission to empower women.', 'keywords' => 'about nissa awards, mission', 'robots' => 'index, follow']
        );
        \App\Models\SeoSetting::updateOrCreate(
            ['route_name' => 'vote.index'],
            ['page_name' => 'Vote Now', 'url' => '/vote', 'title' => 'Vote Now | Nissa Awards 2026', 'description' => 'Cast your vote for the most inspiring women in the Nissa Awards.', 'keywords' => 'vote nissa awards, nominees', 'robots' => 'index, follow']
        );
        \App\Models\SeoSetting::updateOrCreate(
            ['route_name' => 'contact'],
            ['page_name' => 'Contact Us', 'url' => '/contact', 'title' => 'Contact | Nissa Awards', 'description' => 'Get in touch with the Nissa Awards team for any inquiries.', 'keywords' => 'contact, nissa awards support', 'robots' => 'index, follow']
        );
        \App\Models\SeoSetting::updateOrCreate(
            ['route_name' => 'sponsor'],
            ['page_name' => 'Become a Sponsor', 'url' => '/sponsor', 'title' => 'Become a Sponsor | Nissa Awards', 'description' => 'Partner with Nissa Awards and become a sponsor.', 'keywords' => 'sponsor nissa awards, partner', 'robots' => 'index, follow']
        );
    }
}

<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Event;
use App\Models\Work;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    // public function run(): void
    // {
    //     $artist = Artist::create([
    //         'artist_name' => 'Takeru Hokazono',
    //         'username'    => 'takeru',
    //         'artist_about_text'    => 'Takeru HokazonoTakeru HokazonoTakeru HokazonoTakeru Hokazono',
    //         'email'       => 'admin@basement.com',
    //         'password'    => Hash::make('1111'),
    //         'role'        => 'admin',
    //     ]);

    //     $event = Event::create([
    //         'event_name'       => 'Kagurabachi',
    //         'event_about_text' => 'Japanese manga series Kagurabachi.',
    //         'poster_path'      => 'assets/poster1.jpg',
    //         'event_status'     => 'ongoing'
    //     ]);

    //     Work::create([
    //         'work_name'       => 'char',
    //         'work_about_text' => 'char char char char.',
    //         'poster_path'      => 'assets/poster1.jpg',
    //         'author_id'       => $artist->id,
    //         'event_id'        => $event->id
    //     ]);
    // }


    public function run(): void
    {
        $adminArtist = Artist::create([
            'artist_name'       => 'Takeru Hokazono',
            'username'          => 'takeru',
            'artist_about_text' => 'Takeru Hokazono Takeru Hokazono Takeru Hokazono',
            'email'             => 'admin@basement.com',
            'password'          => Hash::make('1111'),
            'role'              => 'admin',
        ]);

        $adminEvent = Event::create([
            'event_name'       => 'Kagurabachi',
            'event_about_text' => 'Japanese manga series Kagurabachi.',
            'poster_path'      => 'assets/poster1.jpg',
            'event_status'     => 'ongoing'
        ]);

        Work::create([
            'work_name'       => 'char',
            'work_about_text' => 'char char char char.',
            'poster_path'     => 'assets/poster1.jpg',
            'author_id'       => $adminArtist->id,
            'event_id'        => $adminEvent->id
        ]);

        $artists = Artist::factory(50)->create();
        $events  = Event::factory(15)->create();

        $allArtists = $artists->concat([$adminArtist]);
        $allEvents  = $events->concat([$adminEvent]);

        Work::factory(300)
            ->recycle($allArtists)
            ->recycle($allEvents)
            ->create();

    }

}

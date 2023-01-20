<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event = new Event();
        $event->name = 'NK Atletiek';
        $event->photo = 'photo1';
        $event->event_start = '2022-06-25';
        $event->event_end = '2022-06-26';
        $event->available_tickets = '999';
        $event->location = 'Helmond';
        $event->price = 500.99;
        $event->description = 'lorem impsum';
        $event->save();

        $event = new Event();
        $event->name = 'Defqon';
        $event->photo = 'photo2';
        $event->event_start = '2022-06-25';
        $event->event_end = '2022-06-29';
        $event->available_tickets = '888';
        $event->location = 'Eindhoven';
        $event->price = 99.9;
        $event->description = 'lorem impsum';
        $event->save();

        // Event::factory()->count(50)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Http\Controllers\area\areaTicket;
use App\Http\Controllers\equipos\equipos;
use App\Models\tipotickets\tipoTickets;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(servicioTicketSeeder::class);
        $this->call(tipoTicketsSeeder::class);
        $this->call(tipoEquiposSeeder::class);
        $this->call(areaTicketsSeeder::class);
        $this->call(equiposSeeder::class);

        // \App\Models\User::factory(10)->create();
    }
}

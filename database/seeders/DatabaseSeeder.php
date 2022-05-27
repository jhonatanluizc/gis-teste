<?php

namespace Database\Seeders;

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
        \App\Models\User::factory()->create(['name' => 'admin' ,'email' => 'admin@gmail.com', 'password' =>  \Hash::make('admin') ]);
        \App\Models\Consulta::factory(3)->create();

    }
}

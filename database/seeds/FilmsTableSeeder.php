<?php

use Illuminate\Database\Seeder;

use App\Film;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Film::create([
            'name' => 'The Martian',
            'director' => 'Ridley Scott'
        ]);
    }
}

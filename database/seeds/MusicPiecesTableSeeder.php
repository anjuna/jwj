<?php

use Illuminate\Database\Seeder;

use App\MusicPiece;

class MusicPiecesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MusicPiece::create([
            'name' => 'Sonatina',
            'composer' => 'Maurice Ravel'
        ]);
    }
}

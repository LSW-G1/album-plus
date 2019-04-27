<?php

use Illuminate\Database\Seeder;

class CameraTypeSeeder extends Seeder
{
    private $cameras = [
        "A",
        "B",
        "C",
        "D",
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->cameras as $camera) {
            \App\models\CameraType::create([
                "libelle" => $camera,
            ]);
        }
    }
}

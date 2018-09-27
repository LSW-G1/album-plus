<?php

use Illuminate\Database\Seeder;

class AlbumImageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('album_image')->delete();

        \DB::table('album_image')->insert([
            0  => [
                'id'         => 1,
                'album_id'   => 2,
                'image_id'   => 43,
                'created_at' => null,
                'updated_at' => null,
            ],
            1  => [
                'id'         => 2,
                'album_id'   => 2,
                'image_id'   => 42,
                'created_at' => null,
                'updated_at' => null,
            ],
            2  => [
                'id'         => 3,
                'album_id'   => 1,
                'image_id'   => 37,
                'created_at' => null,
                'updated_at' => null,
            ],
            3  => [
                'id'         => 4,
                'album_id'   => 3,
                'image_id'   => 32,
                'created_at' => null,
                'updated_at' => null,
            ],
            4  => [
                'id'         => 5,
                'album_id'   => 2,
                'image_id'   => 35,
                'created_at' => null,
                'updated_at' => null,
            ],
            5  => [
                'id'         => 6,
                'album_id'   => 3,
                'image_id'   => 29,
                'created_at' => null,
                'updated_at' => null,
            ],
            6  => [
                'id'         => 7,
                'album_id'   => 1,
                'image_id'   => 27,
                'created_at' => null,
                'updated_at' => null,
            ],
            7  => [
                'id'         => 8,
                'album_id'   => 1,
                'image_id'   => 24,
                'created_at' => null,
                'updated_at' => null,
            ],
            8  => [
                'id'         => 9,
                'album_id'   => 3,
                'image_id'   => 22,
                'created_at' => null,
                'updated_at' => null,
            ],
            9  => [
                'id'         => 10,
                'album_id'   => 1,
                'image_id'   => 19,
                'created_at' => null,
                'updated_at' => null,
            ],
            10 => [
                'id'         => 11,
                'album_id'   => 2,
                'image_id'   => 14,
                'created_at' => null,
                'updated_at' => null,
            ],
            11 => [
                'id'         => 12,
                'album_id'   => 2,
                'image_id'   => 16,
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);


    }
}

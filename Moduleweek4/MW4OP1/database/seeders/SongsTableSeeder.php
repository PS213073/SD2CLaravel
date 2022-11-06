<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            [
                'title'=> 'White Hanami',
                'singer'=> 'swar',
                
            ],

            [
                'title'=> 'Star Boy',
                'singer'=> 'The Weeknd',
            ],
           
            [
                'title'=> 'Save your Tears',
                'singer'=> 'The Weeknd',
            ],

            
            [
                'title'=> 'Blinding Lights',
                'singer'=> 'The Weeknd',
            ],

            
            [
                'title'=> 'pray for me',
                'singer'=> 'The Weeknd',
            ],

            
            ]);
    }
}

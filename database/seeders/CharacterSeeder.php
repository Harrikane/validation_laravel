<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('characters')->insert([
            [   
                'name'=>'All Might',
                'creation_date'=>'2014',
                'manga_name'=>'MHA',
                'drawer'=>'Kōhei Horikoshi'
            ],
            [
                'name'=>'Guts',
                'creation_date'=>'1989',
                'manga_name'=>'Berserk',
                'drawer'=>'Kentaro Miura'
            ],
            [
                'name'=>'Erwin Smith',
                'creation_date'=>'2011',
                'manga_name'=>'Shingeki No Kyojin',
                'drawer'=>'Hajime Isayama'
            ]
        ]);
    }
}


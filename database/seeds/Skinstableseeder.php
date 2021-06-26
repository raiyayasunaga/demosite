<?php

use Illuminate\Database\Seeder;

class Skinstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skins')->insert([
            [
                'name' => 'guitar',
            ],
            [
                'name' => 'ayanami',
            ],
            [
                'name' => 'syogouki',
            ],
            [
                'name' => 'NERV',
            ],
        ]);
    }
}

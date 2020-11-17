<?php

use App\EscopoModel;
use Illuminate\Database\Seeder;

class EscopoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EscopoModel::create([
            'escopo' => 'Japanese Culture',
        ]);
        EscopoModel::create([
            'escopo' => 'Video Games',
        ]);
        EscopoModel::create([
            'escopo' => 'Interests',
        ]);
        EscopoModel::create([
            'escopo' => 'Creative',
        ]);
        EscopoModel::create([
            'escopo' => 'Other',
        ]);
    }
}

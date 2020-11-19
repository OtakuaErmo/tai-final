<?php

use App\AssuntoModel;
use Illuminate\Database\Seeder;

class AssuntoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     //maximo para manter na mesma linha >> 17char
    public function run()
    {

        //--------------------------------------------------------assunto1

        AssuntoModel::create([
            'escopo_id' => '1',
            'assunto' => 'Anime & Manga',
        ]);
        AssuntoModel::create([
            'escopo_id' => '1',
            'assunto' => 'Anime/Wallpapers',
        ]);
        AssuntoModel::create([
            'escopo_id' => '1',
            'assunto' => 'Mecha',
        ]);
        AssuntoModel::create([
            'escopo_id' => '1',
            'assunto' => 'Otaku Culture',
        ]);
        //--------------------------------------------------------assunto2

        AssuntoModel::create([
            'escopo_id' => '2',
            'assunto' => 'Game Generals',
        ]);
        AssuntoModel::create([
            'escopo_id' => '2',
            'assunto' => 'Games/Multiplayer',
        ]);
        AssuntoModel::create([
            'escopo_id' => '2',
            'assunto' => 'Games/Mobile',
        ]);
        AssuntoModel::create([
            'escopo_id' => '2',
            'assunto' => 'Retro Games',
        ]);
        AssuntoModel::create([
            'escopo_id' => '2',
            'assunto' => 'Video Games/RPG',
        ]);
        AssuntoModel::create([
            'escopo_id' => '2',
            'assunto' => 'Games/Strategy',
        ]);
        //--------------------------------------------------------assunto3

        AssuntoModel::create([
            'escopo_id' => '3',
            'assunto' => 'Comics & Cartoons',
        ]);
        AssuntoModel::create([
            'escopo_id' => '3',
            'assunto' => 'Technology',
        ]);
        AssuntoModel::create([
            'escopo_id' => '3',
            'assunto' => 'Weapons',
        ]);
        AssuntoModel::create([
            'escopo_id' => '3',
            'assunto' => 'Auto',
        ]);
        AssuntoModel::create([
            'escopo_id' => '3',
            'assunto' => 'Sports',
        ]);
        AssuntoModel::create([
            'escopo_id' => '3',
            'assunto' => 'Traditional Games',
        ]);
        AssuntoModel::create([
            'escopo_id' => '3',
            'assunto' => 'International',
        ]);
        //--------------------------------------------------------assunto4

        AssuntoModel::create([
            'escopo_id' => '4',
            'assunto' => 'Papercraft',
        ]);
        AssuntoModel::create([
            'escopo_id' => '4',
            'assunto' => 'Photography',
        ]);
        AssuntoModel::create([
            'escopo_id' => '4',
            'assunto' => 'Food & Cooking',
        ]);
        AssuntoModel::create([
            'escopo_id' => '4',
            'assunto' => 'Artwork/Critique',
        ]);
        AssuntoModel::create([
            'escopo_id' => '4',
            'assunto' => 'Wallpapers/Gen',
        ]);
        AssuntoModel::create([
            'escopo_id' => '4',
            'assunto' => 'Literature',
        ]);
        AssuntoModel::create([
            'escopo_id' => '4',
            'assunto' => 'Music',
        ]);
        AssuntoModel::create([
            'escopo_id' => '4',
            'assunto' => 'Do-It-Yourself',
        ]);
        //--------------------------------------------------------assunto5

        AssuntoModel::create([
            'escopo_id' => '5',
            'assunto' => 'Business&Finance',
        ]);
        AssuntoModel::create([
            'escopo_id' => '5',
            'assunto' => 'Travel',
        ]);
        AssuntoModel::create([
            'escopo_id' => '5',
            'assunto' => 'Fitness',
        ]);
        AssuntoModel::create([
            'escopo_id' => '5',
            'assunto' => 'Current News',
        ]);
    }
}

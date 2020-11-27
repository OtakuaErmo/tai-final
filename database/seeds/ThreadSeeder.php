<?php

use App\ThreadsModel;
use Illuminate\Database\Seeder;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        ThreadsModel::create([
            'assunto_id' => '',
            'user_id' => '',
            'title' => '',
            'image' => '',
            'desc' => '',
        ]);
        */
        ThreadsModel::create([
            'assunto_id' => '11',
            'user_id' => '2',
            'title' => 'yourwellcome',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_6oOkLdMG5_PKXLuAwF4n1FmGmh-Puuab40bRKkL46kJp4A-Aox5LxDmzkMSLkM8oIzIVBU2ZZ3D3_Eze5ehl4uZKNxtXIgI&usqp=CAU&ec=45732304',
            'desc' => 'simple description',
        ]);
        ThreadsModel::create([
            'assunto_id' => '1',
            'user_id' => '5',
            'title' => 'simple image',
            'image' => 'https://store-images.s-microsoft.com/image/apps.14591.9a19b1cb-7ffc-4b32-bf97-25ef75ec69a3.753de052-0f07-4e5e-a20d-e4d5688136af.e2247862-7caa-44e8-8915-ca934ab9b663.png',
            'desc' => 'aliquam tempor ac in. vulputate tempus curae, congue blandit',
        ]);
        ThreadsModel::create([
            'assunto_id' => '4',
            'user_id' => '3',
            'title' => 'post about steins;gate',
            'image' => 'https://d2skuhm0vrry40.cloudfront.net/2020/articles/2020-01-27-11-00/medium_ezgif_6_21afab4b699d.jpg/EG11/thumbnail/750x422/format/jpg/quality/60',
            'desc' => 'aliquam tempor ac in. accumsan porta',
        ]);
        ThreadsModel::create([
            'assunto_id' => '2',
            'user_id' => '4',
            'title' => 'mad scientist',
            'image' => 'https://www.siliconera.com/wp-content/uploads/2020/01/Steins-Gate-0-Elite-Siliconera.jpg',
            'desc' => 'iquam tempor ac in. accumsan porta at sollicitudin litora ',
        ]);
        ThreadsModel::create([
            'assunto_id' => '3',
            'user_id' => '2',
            'title' => 'more steins;gate',
            'image' => 'https://cdn.myanimelist.net/images/anime/1375/93521.jpg',
            'desc' => 'litora vulputate tempus curae',
        ]);
        ThreadsModel::create([
            'assunto_id' => '5',
            'user_id' => '4',
            'title' => 'another gate',
            'image' => 'https://store-images.s-microsoft.com/image/apps.14591.9a19b1cb-7ffc-4b32-bf97-25ef75ec69a3.753de052-0f07-4e5e-a20d-e4d5688136af.e2247862-7caa-44e8-8915-ca934ab9b663.png',
            'desc' => 'aliquam tempor ac in. accumsan porta at s, congue blandit etiam tincidunt praesent congue ',
        ]);
        ThreadsModel::create([
            'assunto_id' => '6',
            'user_id' => '5',
            'title' => 'sakurasou mashiro',
            'image' => 'https://i.pinimg.com/originals/70/dc/b1/70dcb1b6e4a6199ac0304b77b053ab69.jpg',
            'desc' => 'accumsan porta at sollicitudin litora vulputate, idunt praesent congue',
        ]);
        ThreadsModel::create([
            'assunto_id' => '27',
            'user_id' => '2',
            'title' => 'this is mayushi',
            'image' => 'https://cupulatrovao.com.br/wp-content/uploads/2020/01/Mayuri-de-Steins-Gate-1.jpg',
            'desc' => 'ongue blandit etiam tincidunt praesent congue donec blandit, et turpis ligula accumsan ornar',
        ]);
        ThreadsModel::create([
            'assunto_id' => '6',
            'user_id' => '4',
            'title' => 'is this',
            'image' => 'https://d2skuhm0vrry40.cloudfront.net/2020/articles/2020-01-27-11-00/medium_ezgif_6_21afab4b699d.jpg/EG11/thumbnail/750x422/format/jpg/quality/60',
            'desc' => 'aliquam tempor ac in. accumsan porta',
        ]);
        ThreadsModel::create([
            'assunto_id' => '5',
            'user_id' => '5',
            'title' => 'one more',
            'image' => 'https://www.siliconera.com/wp-content/uploads/2020/01/Steins-Gate-0-Elite-Siliconera.jpg',
            'desc' => 'iquam tempor ac in. accumsan porta at sollicitudin litora ',
        ]);
        ThreadsModel::create([
            'assunto_id' => '4',
            'user_id' => '3',
            'title' => 'again',
            'image' => 'https://cdn.myanimelist.net/images/anime/1375/93521.jpg',
            'desc' => 'litora vulputate tempus curae',
        ]);
    }
}

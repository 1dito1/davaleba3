<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\youtube;

class YoutubeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        youtube::create([
            "title"=> "BEST ADC MOMENTS 2022 (Chinese Ezreal, 1v9 Aphelios, High APM Vayne...)", 
            "description"=> 'cool montage of league',
            "channel name"=>'Protatomonster',
            "link"=>'https://www.youtube.com/watch?v=LwqLP4fn5uU',
            "rate"=>9
        ]);
        youtube::create([
            "title"=> "Top 15 Best Game of Thrones Fighters | 2017)", 
            "description"=> 'game of thrones',
            "channel name"=>'Hydra OG',
            "link"=>'https://www.youtube.com/watch?v=KN3SPsdAcm4',
            "rate"=>10
        ]);
        youtube::create([
            "title"=> "Most Badass Movie Moments Pt.2", 
            "description"=> 'movie moments that will blow your mind',
            "channel name"=>'Benjy',
            "link"=>'https://www.youtube.com/watch?v=9DuPnyqc_k0',
            "rate"=>10
        ]); 
        youtube::create([
            "title"=> "Warrior: Tommy shows his skills", 
            "description"=> 'great movie of all time review',
            "channel name"=>'Binge Society',
            "link"=>'https://www.youtube.com/watch?v=WJijXS4EsqM',
            "rate"=>7
        ]);
        youtube::create([
            "title"=> "Am I scary?", 
            "description"=> 'Speeds is really scary omg..',
            "channel name"=>'IShowSpeed',
            "link"=>'https://www.youtube.com/watch?v=JTnjhsD7GCo',
            "rate"=>8
        ]);
    }
}

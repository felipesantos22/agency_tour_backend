<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Card::create([
            "name" => "Italia",
            "description" => "Italia",
            "content" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum",
            "image" => "https://images.pexels.com/photos/19226143/pexels-photo-19226143/free-photo-of-castelo-palacio-italia-ponto-de-referencia.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        ]);
    }
}

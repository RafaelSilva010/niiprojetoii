<?php

namespace Database\Seeders;

use App\Models\Nutritionist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NutritionistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nutritionists')->truncate();

        Nutritionist::create([
            'name' => 'Rafael Silva',
            'website' => 'https://aeg1.pt/',
            'email' => 'a115856@aeg1.pt',
            'image' => 'rafael_silva.jpg',
            'description' => 'Especialista n.º 1 na dieta dos computadores'
        ]);

        Nutritionist::create([
            'name' => 'César Domingues',
            'website' => 'https://aeg1.pt/',
            'email' => '007@aeg1.pt',
            'image' => 'cesar_domingues.jpg',
            'description' => 'Especialista n.º 2 na dieta dos computadores'
        ]);
    }

}

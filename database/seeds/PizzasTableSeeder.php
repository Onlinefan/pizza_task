<?php

use App\Models\Pizza;
use Illuminate\Database\Seeder;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pizzasList = json_decode(file_get_contents(public_path('assets/pizza/list.json')), true);
        Pizza::insert($pizzasList);
    }
}

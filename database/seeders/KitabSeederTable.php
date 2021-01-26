<?php

namespace Database\Seeders;

use App\Models\Kitab;
use Illuminate\Database\Seeder;

class KitabSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kitab::create(['nama'=>'Abu Dawud']);
        Kitab::create(['nama'=>'al-Musnad atau Musnad Ahmad']);
        Kitab::create(['nama'=>'Muhammad bin Ismail al-Bukhari']);
        Kitab::create(['nama'=>'Ad-Darimi']);
        Kitab::create(['nama'=>'Imam Ibnu Majah']);
        Kitab::create(['nama'=>'Al-Muwatta, Al-Muwaththa atau Muwatta Malik']);
        Kitab::create(['nama'=>'Muslim']);
        Kitab::create(['nama'=>"Sunan An-Nasa'i atau Al-Mujtaba"]);
        Kitab::create(['nama'=>'Muhammad bin Isa at-Tirmidzi']);
    }
}

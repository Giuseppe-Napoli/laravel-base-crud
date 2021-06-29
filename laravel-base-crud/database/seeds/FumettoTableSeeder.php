<?php

use App\Fumetto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FumettoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_fumetto = config('fumetto');
        
        foreach ($array_fumetto as $fumetto_item) {
            
            $new_fumetto = new Fumetto();
            $new_fumetto->title = $fumetto_item['title'];
            $new_fumetto->slug = Str::slug($new_fumetto->title, '-');
            $new_fumetto->description = $fumetto_item['description'];
            $new_fumetto->thumb = $fumetto_item['thumb'];
            $new_fumetto->price = $fumetto_item['price'];
            $new_fumetto->series = $fumetto_item['series'];
            $new_fumetto->sale_date = $fumetto_item['sale_date'];
            $new_fumetto->type = $fumetto_item['type'];
            $new_fumetto->save();

        } 
        
    }
}
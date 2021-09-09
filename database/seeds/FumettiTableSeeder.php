<?php

use Illuminate\Database\Seeder;
use App\Fumetto;

class FumettiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = config('comics');

        foreach($array as $item){
            $newFumetto = new Fumetto();

            $newFumetto->title=$item['title'];
            $newFumetto->description=$item['description'];
            $newFumetto->thumb=$item['thumb'];
            $newFumetto->price=$item['price'];
            $newFumetto->series=$item['series'];
            $newFumetto->sale_date=$item['sale_date'];
            $newFumetto->type=$item['type'];

            $newFumetto->save();
        }




    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [];
        
        for ($i = 1; $i <= 5; $i++){
            $brands[] = [
                'name' => 'brand'.$i
            ] ;
        }
        \DB::table('brands') -> insert($brands);
    }
}

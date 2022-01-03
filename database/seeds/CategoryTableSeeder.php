<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'laptop',
                'image' => 'Icon\laptop.svg'
            ],

            [  
                'name' => 'processor',
                'image' => 'Icon\processor.svg'
            ],

            [
                'name' => 'motherboard',
                'image' => 'Icon\motherboard.svg'
            ],

            [
                'name' => 'vga',
                'image' => 'Icon\vga.svg'
            ],

            [
                'name' => 'ssd',
                'image' => 'Icon\ssd.svg'
            ],

            [
                'name' => 'hard disk',
                'image' => 'Icon\hdd.svg'
            ],

            [
                'name' => 'ram',
                'image' => 'Icon\ram.svg'
            ],

            [
                'name' => 'monitor',
                'image' => 'Icon\desktop 1.svg'
            ],
            [
                'name' => 'mouse',
                'image' => 'Icon\computer-mouse.svg'
            ],
            [
                'name' => 'keyboard',
                'image' => 'Icon\headset 1.svg'
            ],  

            [
                'name' => 'headset',
                'image' => 'Icon\keyboard.svg'
            ],  
        ]);
    }
}

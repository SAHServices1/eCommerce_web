<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Redmi Note 9pro',
                'price' => '25,000',
                'category' => 'mobile phone',
                'gallery' => 'https://fdn.gsmarena.com/imgroot/news/20/04/redmi-note-9-note-9-pro-ofic/-727/gsmarena_005.jpg',
                'description' => 'A smart Phone with 48mega pixel Camera'
            ],
            [
                'name' => 'Redmi POCO',
                'price' => '25,000',
                'category' => 'mobile phone',
                'gallery' => 'https://fdn.gsmarena.com/imgroot/news/20/04/redmi-note-9-note-9-pro-ofic/-727/gsmarena_005.jpg',
                'description' => 'A smart Phone with 48mega pixel Camera'
            ],
            [
                'name' => 'Redmi Note 15',
                'price' => '25,000',
                'category' => 'mobile phone',
                'gallery' => 'https://fdn.gsmarena.com/imgroot/news/20/04/redmi-note-9-note-9-pro-ofic/-727/gsmarena_005.jpg',
                'description' => 'A smart Phone with 48mega pixel Camera'
            ],
            [
                'name' => 'Redmi Note 11',
                'price' => '25,000',
                'category' => 'mobile phone',
                'gallery' => 'https://fdn.gsmarena.com/imgroot/news/20/04/redmi-note-9-note-9-pro-ofic/-727/gsmarena_005.jpg',
                'description' => 'A smart Phone with 48mega pixel Camera'
            ],
            [
                'name' => 'Redmi Note X',
                'price' => '25,000',
                'category' => 'mobile phone',
                'gallery' => 'https://fdn.gsmarena.com/imgroot/news/20/04/redmi-note-9-note-9-pro-ofic/-727/gsmarena_005.jpg',
                'description' => 'A smart Phone with 48mega pixel Camera'
            ],
            [
                'name' => 'Redmi Note 9',
                'price' => '25,000',
                'category' => 'mobile phone',
                'gallery' => 'https://fdn.gsmarena.com/imgroot/news/20/04/redmi-note-9-note-9-pro-ofic/-727/gsmarena_005.jpg',
                'description' => 'A smart Phone with 48mega pixel Camera'
            ],
            [
                'name' => 'Redmi Note 10',
                'price' => '25,000',
                'category' => 'mobile phone',
                'gallery' => 'https://fdn.gsmarena.com/imgroot/news/20/04/redmi-note-9-note-9-pro-ofic/-727/gsmarena_005.jpg',
                'description' => 'A smart Phone with 48mega pixel Camera'
            ],
        ]);
    }
}

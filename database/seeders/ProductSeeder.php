<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Apple MacBook Pro',
                'details' => 'Enjoy clear calling with high functional 3-mic system',
                'descriptions' => 'The most powerful MacBook Pro ever is here. With the blazing-fast M1 Pro or M1 Max chip — the first Apple silicon designed for pros — you get groundbreaking performance and amazing battery life. Add to that a stunning Liquid Retina XDR display, the best camera and audio ever in a Mac notebook, and all the ports you need. The first notebook of its kind, this MacBook Pro is a beas',
                'brand' => 'Apple',
                'price' => 2499,
                'shipping_cost' => 25,
                'image_path' => 'storage/product.png',
            ],
            [
                'name' => 'Samsung Galaxy Buds Pro',
                'details' => 'Control Active Noise Canceling level for immersive sound experience',
                'descriptions' => 'These are true wireless earbuds, with pro-grade technology for immersive sound like never before. While Intelligent ANC lets you seamlessly switch between noise canceling and fully adjustable ambient sound. So let the outside in - or keep it out. It s your world. Galaxy Buds Pro let you hear the best of it.',
                'brand' => 'Samsung',
                'price' => 1400,
                'shipping_cost' => 25,
                'image_path' => 'storage/product2.png',
            ],

        ];
        
        foreach($products as $row => $value) {

            Product::create($value);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Coffee;
use Illuminate\Database\Seeder;

class CoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Coffee::create([
            'coffee_name'=>'Coffee Latte',
            'category_id'=>'1',
            'coffee_image'=>'image/coffeelatte.jpg',
            'price'=>'50000',
            'star_reward'=>'25'
        ]);

        Coffee::create([
            'coffee_name'=>'Cappuccino',
            'category_id'=>'1',
            'coffee_image'=>'image/cappuccino.jpg',
            'price'=>'55000',
            'star_reward'=>'22'
        ]);

        Coffee::create([
            'coffee_name'=>'Caramel Macchiato',
            'category_id'=>'1',
            'coffee_image'=>'image/caramelmacchiato.jpg',
            'price'=>'60000',
            'star_reward'=>'30'
        ]);

        Coffee::create([
            'coffee_name'=>'Americano',
            'category_id'=>'1',
            'coffee_image'=>'image/americano.jpg',
            'price'=>'40000',
            'star_reward'=>'20'
        ]);

        Coffee::create([
            'coffee_name'=>'Freshly Brewed Coffee',
            'category_id'=>'2',
            'coffee_image'=>'image/freshlybrewedcoffee.jpg',
            'price'=>'50000',
            'star_reward'=>'25'
        ]);

        Coffee::create([
            'coffee_name'=>'Misto',
            'category_id'=>'2',
            'coffee_image'=>'image/misto.jpg',
            'price'=>'70000',
            'star_reward'=>'35'
        ]);

        Coffee::create([
            'coffee_name'=>'Cold Brew',
            'category_id'=>'2',
            'coffee_image'=>'image/coldbrew.jpg',
            'price'=>'50000',
            'star_reward'=>'25'
        ]);

        Coffee::create([
            'coffee_name'=>'Vanilla Sweet Cream Cold Brew',
            'category_id'=>'2',
            'coffee_image'=>'image/vanillasweetcreamcoldbrew.jpg',
            'price'=>'90000',
            'star_reward'=>'45'
        ]);

        Coffee::create([
            'coffee_name'=>'Mango Passion Frappuccino',
            'category_id'=>'3',
            'coffee_image'=>'image/mangopassionfrappuccino.jpg',
            'price'=>'60000',
            'star_reward'=>'30'
        ]);

        Coffee::create([
            'coffee_name'=>'Raspberry Currant Frappuccino',
            'category_id'=>'3',
            'coffee_image'=>'image/raspberrycurrantfrappuccino.jpg',
            'price'=>'60000',
            'star_reward'=>'30'
        ]);

        Coffee::create([
            'coffee_name'=>'Caramel Frappuccino',
            'category_id'=>'3',
            'coffee_image'=>'image/caramelfrappuccino.jpg',
            'price'=>'50000',
            'star_reward'=>'25'
        ]);

        Coffee::create([
            'coffee_name'=>'Hazelnut Frappuccino',
            'category_id'=>'3',
            'coffee_image'=>'image/hazelnutfrappucino.jpg',
            'price'=>'50000',
            'star_reward'=>'25'
        ]);

        Coffee::create([
            'coffee_name'=>'Signature Chocolate',
            'category_id'=>'4',
            'coffee_image'=>'image/signaturechocolate.jpg',
            'price'=>'60000',
            'star_reward'=>'30'
        ]);

        Coffee::create([
            'coffee_name'=>'Green Tea Latte',
            'category_id'=>'4',
            'coffee_image'=>'image/greentealatte.jpg',
            'price'=>'65000',
            'star_reward'=>'32'
        ]);

        Coffee::create([
            'coffee_name'=>'Chai Tea Latte',
            'category_id'=>'4',
            'coffee_image'=>'image/chaitealatte.jpg',
            'price'=>'60000',
            'star_reward'=>'30'
        ]);

        Coffee::create([
            'coffee_name'=>'TEAVANA English Breakfast Hot Tea',
            'category_id'=>'4',
            'coffee_image'=>'image/TEAVANAenglishbreakfasthottea.jpg',
            'price'=>'50000',
            'star_reward'=>'25'
        ]);

        Coffee::create([
            'coffee_name'=>'TEAVANA Earl Grey Hot Tea',
            'category_id'=>'4',
            'coffee_image'=>'image/TEAVANAearlgreyhottea.jpg',
            'price'=>'50000',
            'star_reward'=>'25'
        ]);

        Coffee::create([
            'coffee_name'=>'TEAVANA Mint Blend Hot Tea',
            'category_id'=>'4',
            'coffee_image'=>'image/TEAVANAmintblendhottea.jpg',
            'price'=>'50000',
            'star_reward'=>'25'
        ]);
    }
}

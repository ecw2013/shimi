<?php

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
        Product::query()->create([
            'title' => '1-Methoxy-2-propanol',
            'picture_path' => 'images/product.jpg',
            'text'=>'1-Methoxy-2-propanol
65692
5ML
FLUKA',
            'keywords' => 'محیط کشت , کیت , فروش ، مواد ، داروئی ، دستگاه های ،آزمایشگاهی , وارد کننده , سلول ، آنزیم ، مرک ، آنتی بادی ، سیگما ، گیبکو ، ترمو',
            'description' => 'some description',
        ]);

        Product::query()->create([
            'title' => '1-Methoxy-2-propanol',
            'picture_path' => 'images/product.jpg',
            'text'=>'1-Methoxy-2-propanol
65692
5ML
FLUKA',
            'keywords' => 'محیط کشت , کیت , فروش ، مواد ، داروئی ، دستگاه های ،آزمایشگاهی , وارد کننده , سلول ، آنزیم ، مرک ، آنتی بادی ، سیگما ، گیبکو ، ترمو',
            'description' => 'some description',
        ]);
    }
}

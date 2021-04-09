<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
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
       DB::table('products')->insert([
       	[
            'name'=>'LG Mobile',
            "price"=>"10000",
            "category"=>"mobile",
            "gallery"=>"https://www.lg.com/in/images/mobile-phones/md06155757/gallery/01-1600-V3.jpg",
            "descritaion"=>"a smartphone with 4gb ram and much more feature",
        ],
       	[
            'name'=>'OPPO Mobile',
            "price"=>"12000",
            "category"=>"mobile",
            "gallery"=>"https://www.oppo.com/content/dam/oppo/product-asset-library/reno/reno4/highlights7/product/assets/images-highlights-kv-in-pc-0_1920@d5-67354e.jpg",
            "descritaion"=>"a smartphone with 8gb ram and much more feature",
        ],
       	[
            'name'=>'Sumsung TV',
            "price"=>"19000",
            "category"=>"TV",
            "gallery"=>"https://images.samsung.com/is/image/samsung/in-hd-tv-t4700-ua32t4700akxxl-ua--r----auxxl-227094357?$684_547_PNG$",
            "descritaion"=>"a smart TV with 8gb ram and much more feature",
        ],
        [
            'name'=>'LG TV',
            "price"=>"15000",
            "category"=>"TV",
            "gallery"=>"https://www.lg.com/in/images/tvs/md07519763/gallery/43NANO79TND-DZ-01.jpg",
            "descritaion"=>"a smart TV with 4gb ram and much more feature",
        ],
        [
            'name'=>'LG Fridge',
            "price"=>"13000",
            "category"=>"mobile",
            "gallery"=>"https://www.lg.com/in/images/refrigerators/md07526023/gallery/GL-B191KPGB-Refrigerators-Front-View-DZ-01.jpg",
            "descritaion"=>"a smart Fridge with 4gb ram and much more feature",
        ]
       ]);
    
    }
}

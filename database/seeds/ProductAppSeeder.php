<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        DB::table('products')->delete();
        DB::table('relations')->delete();

//        categories
        $processors = \App\Category::create(array(
            'name' => 'Processors',
            'slug' => 'Processors'
        ));
        $video_cards = \App\Category::create(array(
            'name' => 'Video Cards',
            'slug' => 'Video'
        ));
        $motherboards = \App\Category::create(array(
            'name' => 'Motherboards',
            'slug' => 'Motherboards'
        ));
        $hard_disks = \App\Category::create(array(
            'name' => 'Hard Disks',
            'slug' => 'Hard'
        ));

        $this->command->info('categories finished');

//        products  $processors
        $AMD_Sempron = \App\Product::create(array(
            'brand' => 'AMD',
            'name' => 'AMD Sempron 2650 BOX',
            'image' => 'img/amd_sempron.jpg',
            'description' => 'Kabini, 2 ядра, частота 1.45 ГГц, кэш 1 МБ, техпроцесс 28 нм, сокет AM1, TDP 25W',
            'category_id' => $processors->id
        ));
        $AMD_Athlon = \App\Product::create(array(
            'brand' => 'AMD',
            'name' => 'AMD Athlon X2 340 (AD340XOKA23HJ)',
            'image' => 'img/amd_athlon.jpg',
            'description' => 'Trinity, 2 ядра, частота 3.2 ГГц, кэш 1 МБ, техпроцесс 32 нм, сокет FM2, TDP 65W',
            'category_id' => $processors->id
        ));
        $Intel_Pentium = \App\Product::create(array(
            'brand' => 'Intel',
            'name' => 'Intel Pentium G4400',
            'image' => 'img/intel_pentium.jpg',
            'description' => 'Skylake, 2 ядра, частота 3.3 ГГц + 3 МБ, техпроцесс 14 нм, сокет LGA1151, TDP 54W',
            'category_id' => $processors->id
        ));
        $Intel_Core = \App\Product::create(array(
            'brand' => 'Intel',
            'name' => 'Intel Core i3-7100',
            'image' => 'img/intel_core.jpg',
            'description' => 'Kaby Lake, 2 ядра, частота 3.9 ГГц + 3 МБ, техпроцесс 14 нм, сокет LGA1151, TDP 51W',
            'category_id' => $processors->id
        ));

        //        products  $video_cards
        $GTX_1050 = \App\Product::create(array(
            'brand' => 'Gigabyte',
            'name' => 'Gigabyte GeForce GTX 1050 Windforce OC 2GB GDDR5 [GV-N1050WF2OC-2GD]',
            'image' => 'img/gtx_1050.jpg',
            'description' => 'GPU 1392 МГц, RAM 1752 МГц 128 бит, DirectX 12, DVI, HDMI, DisplayPort',
            'category_id' => $video_cards->id
        ));
        $RX_550 = \App\Product::create(array(
            'brand' => 'Sapphire',
            'name' => 'Sapphire RX 550 4G 11268-09-20G',
            'image' => 'img/rx_550.jpg',
            'description' => 'DVI: 1, HDMI: 1, Охлаждение: активное, Ширина шины памяти: 128 бит, Тип видеопамяти: DDR5, Видеопамять: 4 Гб',
            'category_id' => $video_cards->id
        ));
        $GTX_750 = \App\Product::create(array(
            'brand' => 'Gigabyte',
            'name' => 'Gigabyte GeForce GTX 750 Ti 4GB GDDR5 (GV-N75TWF2OC-4GI)',
            'image' => 'img/gtx_750.jpg',
            'description' => 'GPU 1059 МГц (640sp), RAM 1350 МГц 128 бит, DirectX 12, DVI, HDMI',
            'category_id' => $video_cards->id
        ));
        $RX_560 = \App\Product::create(array(
            'brand' => 'Sapphire',
            'name' => 'Sapphire RX 560 4G 11267-20-20G',
            'image' => 'img/rx_560.jpg',
            'description' => 'DVI: 1, HDMI: 1, Охлаждение: активное, Ширина шины памяти: 128 бит, Тип видеопамяти: GDDR5 , Видеопамять: 4 Гб',
            'category_id' => $video_cards->id
        ));

        //        products  $motherboards
        $h110 = \App\Product::create(array(
            'brand' => 'Asus',
            'name' => 'ASUS H110M-R / C / SI',
            'image' => 'img/h110.jpg',
            'description' => 'mATX, сокет Intel LGA1151, чипсет Intel H110, память 2xDDR4, слоты: 1xPCIe x16, 2xPCIe x1',
            'category_id' => $motherboards->id
        ));
        $a320 = \App\Product::create(array(
            'brand' => 'Asus',
            'name' => 'ASUS Prime A320M-A',
            'image' => 'img/a320.jpg',
            'description' => 'mATX, сокет AMD AM4, чипсет AMD A320, память 4xDDR4, слоты: 1xPCIe x16, 1xPCIe x8, 2xPCIe x1',
            'category_id' => $motherboards->id
        ));
        $b250 = \App\Product::create(array(
            'brand' => 'MSI',
            'name' => 'MSI B250M PRO-VDH',
            'image' => 'img/b250.jpg',
            'description' => 'mATX, сокет Intel LGA1151, чипсет Intel B250, память 4xDDR4, слоты: 1xPCIe x16, 2xPCIe x1',
            'category_id' => $motherboards->id
        ));
        $b350 = \App\Product::create(array(
            'brand' => 'MSI',
            'name' => 'MSI B350M Gaming PRO',
            'image' => 'img/b350.jpg',
            'description' => 'mATX, сокет AMD AM4, чипсет AMD B350, память 2xDDR4, слоты: 1xPCIe x16, 2xPCIe x1',
            'category_id' => $motherboards->id
        ));

        //        products  $hard_disks
        $wd500 = \App\Product::create(array(
            'brand' => 'WD',
            'name' => 'WD 500GB (WD5000LPCX-24C6HT0)',
            'image' => 'img/wd500.jpg',
            'description' => '2.5", SATA 3.0 (6Gbps), 5400 об/мин',
            'category_id' => $hard_disks->id
        ));
        $s500 = \App\Product::create(array(
            'brand' => 'Seagate',
            'name' => 'Seagate Barracuda 500GB [ST500LM030]',
            'image' => 'img/s500.jpg',
            'description' => '2.5", SATA 3.0 (6Gbps), 5400 об/мин, буфер 128 МБ, время доступа 13 мс',
            'category_id' => $hard_disks->id
        ));
        $wd2000 = \App\Product::create(array(
            'brand' => 'WD',
            'name' => 'WD Purple 2TB [WD20PURZ]',
            'image' => 'img/wd2000.jpg',
            'description' => '3.5", SATA 3.0 (6Gbps), 5400 об/мин, буфер 64 МБ',
            'category_id' => $hard_disks->id
        ));
        $s2000 = \App\Product::create(array(
            'brand' => 'Seagate',
            'name' => 'Seagate BarraCuda 2TB [ST2000DM006]',
            'image' => 'img/s2000.jpg',
            'description' => '3.5", SATA 3.0 (6Gbps), 7200 об/мин, буфер 64 МБ, время доступа 4.2 мс',
            'category_id' => $hard_disks->id
        ));
        $this->command->info('product finished');

        //        relations $processors
        \App\Relation::create(array(
            'product_id' => $AMD_Sempron->id,
            'recommended_id' => $AMD_Athlon->id
        ));
        \App\Relation::create(array(
            'product_id' => $AMD_Sempron->id,
            'recommended_id' => $Intel_Pentium->id
        ));
        \App\Relation::create(array(
            'product_id' => $AMD_Sempron->id,
            'recommended_id' => $Intel_Core->id
        ));

        \App\Relation::create(array(
            'product_id' => $AMD_Athlon->id,
            'recommended_id' => $AMD_Sempron->id
        ));
        \App\Relation::create(array(
            'product_id' => $AMD_Athlon->id,
            'recommended_id' => $Intel_Pentium->id
        ));
        \App\Relation::create(array(
            'product_id' => $AMD_Athlon->id,
            'recommended_id' => $Intel_Core->id
        ));

        \App\Relation::create(array(
            'product_id' => $Intel_Pentium->id,
            'recommended_id' => $AMD_Sempron->id
        ));
        \App\Relation::create(array(
            'product_id' => $Intel_Pentium->id,
            'recommended_id' => $AMD_Athlon->id
        ));
        \App\Relation::create(array(
            'product_id' => $Intel_Pentium->id,
            'recommended_id' => $Intel_Core->id
        ));

        \App\Relation::create(array(
            'product_id' => $Intel_Core->id,
            'recommended_id' => $AMD_Sempron->id
        ));
        \App\Relation::create(array(
            'product_id' => $Intel_Core->id,
            'recommended_id' => $AMD_Athlon->id
        ));
        \App\Relation::create(array(
            'product_id' => $Intel_Core->id,
            'recommended_id' => $Intel_Pentium->id
        ));

        //        relations $video_cards
        \App\Relation::create(array(
            'product_id' => $GTX_1050->id,
            'recommended_id' => $RX_550->id
        ));
        \App\Relation::create(array(
            'product_id' => $GTX_1050->id,
            'recommended_id' => $GTX_750->id
        ));
        \App\Relation::create(array(
            'product_id' => $GTX_1050->id,
            'recommended_id' => $RX_560->id
        ));

        \App\Relation::create(array(
            'product_id' => $RX_550->id,
            'recommended_id' => $GTX_1050->id
        ));
        \App\Relation::create(array(
            'product_id' => $RX_550->id,
            'recommended_id' => $GTX_750->id
        ));
        \App\Relation::create(array(
            'product_id' => $RX_550->id,
            'recommended_id' => $RX_560->id
        ));

        \App\Relation::create(array(
            'product_id' => $GTX_750->id,
            'recommended_id' => $GTX_1050->id
        ));
        \App\Relation::create(array(
            'product_id' => $GTX_750->id,
            'recommended_id' => $RX_550->id
        ));
        \App\Relation::create(array(
            'product_id' => $GTX_750->id,
            'recommended_id' => $RX_560->id
        ));

        \App\Relation::create(array(
            'product_id' => $RX_560->id,
            'recommended_id' => $GTX_1050->id
        ));
        \App\Relation::create(array(
            'product_id' => $RX_560->id,
            'recommended_id' => $RX_550->id
        ));
        \App\Relation::create(array(
            'product_id' => $RX_560->id,
            'recommended_id' => $GTX_750->id
        ));

        //        relations $motherboards
        \App\Relation::create(array(
            'product_id' => $h110->id,
            'recommended_id' => $a320->id
        ));
        \App\Relation::create(array(
            'product_id' => $h110->id,
            'recommended_id' => $b250->id
        ));
        \App\Relation::create(array(
            'product_id' => $h110->id,
            'recommended_id' => $b350->id
        ));

        \App\Relation::create(array(
            'product_id' => $a320->id,
            'recommended_id' => $h110->id
        ));
        \App\Relation::create(array(
            'product_id' => $a320->id,
            'recommended_id' => $b250->id
        ));
        \App\Relation::create(array(
            'product_id' => $a320->id,
            'recommended_id' => $b350->id
        ));

        \App\Relation::create(array(
            'product_id' => $b250->id,
            'recommended_id' => $h110->id
        ));
        \App\Relation::create(array(
            'product_id' => $b250->id,
            'recommended_id' => $a320->id
        ));
        \App\Relation::create(array(
            'product_id' => $b250->id,
            'recommended_id' => $b350->id
        ));

        \App\Relation::create(array(
            'product_id' => $b350->id,
            'recommended_id' => $h110->id
        ));
        \App\Relation::create(array(
            'product_id' => $b350->id,
            'recommended_id' => $a320->id
        ));
        \App\Relation::create(array(
            'product_id' => $b350->id,
            'recommended_id' => $b250->id
        ));

        //        relations $hard_disks
        \App\Relation::create(array(
            'product_id' => $wd500->id,
            'recommended_id' => $s500->id
        ));
        \App\Relation::create(array(
            'product_id' => $wd500->id,
            'recommended_id' => $wd2000->id
        ));
        \App\Relation::create(array(
            'product_id' => $wd500->id,
            'recommended_id' => $s2000->id
        ));

        \App\Relation::create(array(
            'product_id' => $s500->id,
            'recommended_id' => $wd500->id
        ));
        \App\Relation::create(array(
            'product_id' => $s500->id,
            'recommended_id' => $wd2000->id
        ));
        \App\Relation::create(array(
            'product_id' => $s500->id,
            'recommended_id' => $s2000->id
        ));

        \App\Relation::create(array(
            'product_id' => $wd2000->id,
            'recommended_id' => $wd500->id
        ));
        \App\Relation::create(array(
            'product_id' => $wd2000->id,
            'recommended_id' => $s500->id
        ));
        \App\Relation::create(array(
            'product_id' => $wd2000->id,
            'recommended_id' => $s2000->id
        ));

        \App\Relation::create(array(
            'product_id' => $s2000->id,
            'recommended_id' => $wd500->id
        ));
        \App\Relation::create(array(
            'product_id' => $s2000->id,
            'recommended_id' => $s500->id
        ));
        \App\Relation::create(array(
            'product_id' => $s2000->id,
            'recommended_id' => $wd2000->id
        ));
        $this->command->info('relation finished');
    }
}

<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([

            // LAPTOP
            [
                'name' => 'Apple Macbook Air 2020',
                'category_id' => 1,
                'price' => 15999000,
                'sold' => 125,
                'stock' => 10,
                'color' => 'Black',
                'weight' => 2500,
                'rating' => 4,
                'desc' => 'Intel Dual Core i3 10th gen/ 8GB / 256GB SSD/ 13inch',
                'image' => 'products/laptop/macbookair1.jpg'
            ],

            [
                'name' => 'Apple MacbookPro 2020',
                'category_id' => 1,
                'price' => 35499000,
                'sold' => 150,
                'stock' => 15,
                'color' => 'Black',
                'weight' => 3000,
                'rating' => 4,
                'desc' => 'Intel Core i5/ 16GB/ 1TBSSD/ 16inch',
                'image' => 'products/laptop/macbookpro1.jpg'
            ],

            [
                'name' => 'Asus Zenbook Pro UX481FL',
                'category_id' => 1,
                'price' => 23999000,
                'sold' => 130,
                'stock' => 12,
                'color' => 'White',
                'weight' => 3000,
                'rating' => 4,
                'desc' => 'Intel Core i7/ 16GB/ 1TBSSD/ 14inch',
                'image' => 'products/laptop/asuszenbookpro1.jpg'
            ],

            [
                'name' => 'Asus ROG Zephyrus G14',
                'category_id' => 1,
                'price' => 17470000,
                'sold' => 200,
                'stock' => 25,
                'color' => 'Gold',
                'weight' => 2500,
                'rating' => 4,
                'desc' => 'AMDRyzen5 4600H/ 8GB/ 512GB SSD/ GTX 1650Ti 4GB',
                'image' => 'products/laptop/asusrogzephyrus1.jpg'
            ],

            [
                'name' => 'Asus TUF A15 FX506II',
                'category_id' => 1,
                'price' => 15099000,
                'sold' => 140,
                'stock' => 18,
                'color' => 'Black',
                'weight' => 3000,
                'rating' => 5,
                'desc' => 'AMD Ryzen 7 4800H/ 8GB/ 512GB SSD/ GTX 1650Ti 4GB',
                'image' => 'products/laptop/asusrogzephyrus1.jpg'
            ],

            [
                'name' => 'Lenovo Legion 5',
                'category_id' => 1,
                'price' => 15099000,
                'sold' => 140,
                'stock' => 17,
                'color' => 'Black',
                'weight' => 2000,
                'rating' => 3,
                'desc' => 'Intel Core i7/ 16GB/ 512GB SSD/ GTX 1650Ti 4GB',
                'image' => 'products/laptop/lenovolegion3.jpg'
            ],

            [
                'name' => 'Lenovo Yoga Slim 7',
                'category_id' => 1,
                'price' => 13299000,
                'sold' => 142,
                'stock' => 21,
                'color' => 'Blue',
                'weight' => 2500,
                'rating' => 5,
                'desc' => 'AMD Ryzen 5 4500U/ 16GB/ 512GB SSD/ 14 inch',
                'image' => 'products/laptop/lenovoyogaslim1.jpg'
            ],

            [
                'name' => 'Acer Predator Helios 700',
                'category_id' => 1,
                'price' => 40599000,
                'sold' => 123,
                'stock' => 25,
                'color' => 'Black',
                'weight' => 3000,
                'rating' => 5,
                'desc' => 'Intel Core i7/ 2 x 16GB/ 512GB SSD + 1 TB HDD/ RTX 2080',
                'image' => 'products/laptop/acerpredatorhelios1.jpg'
            ],

            [
                'name' => 'Acer Swift SF313-52-72PM',
                'category_id' => 1,
                'price' => 16999000,
                'sold' => 103,
                'stock' => 27,
                'color' => 'Black',
                'weight' => 2000,
                'rating' => 4,
                'desc' => 'intel Core i7/ 16GB/ 512GB SSD/ 13,5 inch',
                'image' => 'products/laptop/acerswift1.jpg'
            ],

            [
                'name' => 'MSI SUmmit E15',
                'category_id' => 1,
                'price' => 25999000,
                'sold' => 103,
                'stock' => 5,
                'color' => 'Black',
                'weight' => 3000,
                'rating' => 5,
                'desc' => 'Intel Core i7/ 16GB/ 1TB SSD/ GTX 1650Ti 4GB',
                'image' => 'products/laptop/msisummit2.jpg'
            ],


            // PROCESSOR
            [
                'name' => 'Intel Core i5-10600KF Unlocked',
                'category_id' => 2,
                'price' => 3685000,
                'sold' => 520,
                'stock' => 58,
                'color' => 'None',
                'weight' => 250,
                'rating' => 5,
                'desc' => '4.1Ghz up to 4.8Ghz Socket LGA 1200',
                'image' => 'products/processor/i5Unlocked.jpg'
            ],

            [
                'name' => 'Intel Core i9-10900X X-Series',
                'category_id' => 2,
                'price' => 9191000,
                'sold' => 203,
                'stock' => 42,
                'color' => 'None',
                'weight' => 250,
                'rating' => 5,
                'desc' => '3.7Ghz up to 4.5Ghz Socket LGA 2066',
                'image' => 'products\processor\i9XSeries.jpg'
            ],

            [
                'name' => 'Intel Core i9-10900KF Unlocked',
                'category_id' => 2,
                'price' => 7422000,
                'sold' => 173,
                'stock' => 48,
                'color' => 'None',
                'weight' => 250,
                'rating' => 4,
                'desc' => '3.7Ghx up to 5.3Ghz Socket LGA 1200',
                'image' => 'products\processor\i9Unlocked.jpg'
            ],

            [
                'name' => 'Intel Core i7-10700',
                'category_id' => 2,
                'price' => 5049000,
                'sold' => 123,
                'stock' => 32,
                'color' => 'None',
                'weight' => 250,
                'rating' => 5,
                'desc' => '2.9Ghz up to 4.8Ghz',
                'image' => 'products\processor\i7.jpg'
            ],

            [
                'name' => 'Intel Pentium Gold G6400',
                'category_id' => 2,
                'price' => 807000,
                'sold' => 153,
                'stock' => 52,
                'color' => 'None',
                'weight' => 250,
                'rating' => 4,
                'desc' => '4.0Ghz Socket LGA 1200',
                'image' => 'products\processor\pentiumgold.jpg'
            ],

            [
                'name' => 'AMD Ryzen 7 3800XT',
                'category_id' => 2,
                'price' => 6201000,
                'sold' => 133,
                'stock' => 51,
                'color' => 'None',
                'weight' => 250,
                'rating' => 5,
                'desc' => '3.9Ghx up to 4.7Ghz Socket AM4',
                'image' => 'products\processor\ryzen7.jpg'
            ],

            [
                'name' => 'AMD Ryzen 9 3950X',
                'category_id' => 2,
                'price' => 12423000,
                'sold' => 133,
                'stock' => 51,
                'color' => 'None',
                'weight' => 250,
                'rating' => 5,
                'desc' => '3.5Ghz up to 4.7Ghz Socket AM4',
                'image' => 'products\processor\ryzen9.jpg'
            ],

            [
                'name' => 'AMD Ryzen 5 3500X',
                'category_id' => 2,
                'price' => 2574000,
                'sold' => 103,
                'stock' => 21,
                'color' => 'None',
                'weight' => 250,
                'rating' => 5,
                'desc' => '3.6Ghz up to 4.1Ghz Socket AM4',
                'image' => 'products\processor\ryzen5.jpg'
            ],

            [
                'name' => 'AMD Ryzen Threadripper 3970X',
                'category_id' => 2,
                'price' => 30706000,
                'sold' => 121,
                'stock' => 21,
                'color' => 'None',
                'weight' => 250,
                'rating' => 4,
                'desc' => '3.7Ghz up to 4.5Ghz Socket sTRX4',
                'image' => 'products\processor\ryzen5.jpg'
            ],

            [
                'name' => 'AMD Ryzen 3 3300X',
                'category_id' => 2,
                'price' => 2423000,
                'sold' => 101,
                'stock' => 81,
                'color' => 'None',
                'weight' => 250,
                'rating' => 4,
                'desc' => '3.8Ghz up to 4.3Ghz',
                'image' => 'products\processor\ryzen3.jpg'
            ],


            // MOTHERBOARD
            [
                'name' => 'Gigabyte X299X Aorus Master',
                'category_id' => 3,
                'price' => 7575000,
                'sold' => 83,
                'stock' => 50,
                'color' => 'None',
                'weight' => 400,
                'rating' => 4,
                'desc' => 'LGA 2066, X299, DDR4',
                'image' => 'products\motherboard\GAM1.jpg'
            ],

            [
                'name' => 'MSI MEG Z490I Unify',
                'category_id' => 3,
                'price' => 4828000,
                'sold' => 103,
                'stock' => 23,
                'color' => 'None',
                'weight' => 400,
                'rating' => 5,
                'desc' => 'LGA 1200, Z490, DDR4, USB3.2, SATA3',
                'image' => 'products\motherboard\MSIU1.jpg'
            ],

            [
                'name' => 'ASRock Z490 Taichi',
                'category_id' => 3,
                'price' => 4828000,
                'sold' => 120,
                'stock' => 40,
                'color' => 'None',
                'weight' => 400,
                'rating' => 5,
                'desc' => 'LGA 1200, Z490, DDR4, USB3.2, SATA3',
                'image' => 'products\motherboard\AT1.png'
            ],

            [
                'name' => 'Asus PRIME X299-A II',
                'category_id' => 3,
                'price' => 6545000,
                'sold' => 130,
                'stock' => 60,
                'color' => 'None',
                'weight' => 400,
                'rating' => 5,
                'desc' => 'LGA 2066, X299, DDR4',
                'image' => 'products\motherboard\AsusPrime1.jpg'
            ],

            [
                'name' => 'ASRock X299 Creator',
                'category_id' => 3,
                'price' => 8080000,
                'sold' => 112,
                'stock' => 70,
                'color' => 'None',
                'weight' => 400,
                'rating' => 5,
                'desc' => 'LGA 2066, X299, DDR4, USB3.4, SATA3',
                'image' => 'products\motherboard\ASRockCreator1.png'
            ],

            [
                'name' => 'Asus ROG Maximus XII Extreme',
                'category_id' => 3,
                'price' => 13212000,
                'sold' => 122,
                'stock' => 73,
                'color' => 'None',
                'weight' => 400,
                'rating' => 5,
                'desc' => 'LGA 1200, Z490, DDR4, USB3.2, SATA3',
                'image' => 'products\motherboard\AsusROGMaximus1.jpg'
            ],

            [
                'name' => 'Gigabyte Z490 Aorus Elite AC',
                'category_id' => 3,
                'price' => 4098000,
                'sold' => 110,
                'stock' => 23,
                'color' => 'None',
                'weight' => 400,
                'rating' => 5,
                'desc' => 'LGA 1200, Z490, DDR4, USB3.2, SATA3',
                'image' => 'products\motherboard\GAE1.jpg'
            ],

            [
                'name' => 'MSI MAG B460M Bazooka',
                'category_id' => 3,
                'price' => 1899000,
                'sold' => 121,
                'stock' => 23,
                'color' => 'None',
                'weight' => 400,
                'rating' => 5,
                'desc' => 'LGA 1200, Z490, DDR4, USB3.2, SATA3',
                'image' => 'products\motherboard\MSIBazooka1.jpg'
            ],

            [
                'name' => 'ASRock Z490 Extreme4',
                'category_id' => 3,
                'price' => 3099000,
                'sold' => 121,
                'stock' => 31,
                'color' => 'None',
                'weight' => 400,
                'rating' => 5,
                'desc' => 'LGA 1200, Z490, DDR4, USB3.2, SATA3',
                'image' => 'products\motherboard\asrockExtreme1.jpg'
            ],

            [
                'name' => 'Asus ROG STRIX B460-F Gaming',
                'category_id' => 3,
                'price' => 3193000,
                'sold' => 101,
                'stock' => 21,
                'color' => 'None',
                'weight' => 400,
                'rating' => 5,
                'desc' => 'LGA 1200, B460, DDR4, USB3.2, SATA3',
                'image' => 'products\motherboard\AsusStrix1.jpg'
            ],


            // VGA
            [
                'name' => 'Asus GeForce RTX 3070',
                'category_id' => 4,
                'price' => 11108000,
                'sold' => 90,
                'stock' => 13,
                'color' => 'Black',
                'weight' => 900,
                'rating' => 5,
                'desc' => '8GB GDDR6',
                'image' => 'products\vga\ARTX1.jpg'
            ],

            [
                'name' => 'iGame GeForce GTX 1660 SUPER-Ultra',
                'category_id' => 4,
                'price' => 3894000,
                'sold' => 221,
                'stock' => 34,
                'color' => 'Black',
                'weight' => 800,
                'rating' => 5,
                'desc' => '6GB GDDR6',
                'image' => 'products\vga\igGTX1.jpg'
            ],

            [
                'name' => 'MSI GeForce RTX 3070 - Ventus 2X OC',
                'category_id' => 4,
                'price' => 9694000,
                'sold' => 138,
                'stock' => 8,
                'color' => 'Black',
                'weight' => 800,
                'rating' => 5,
                'desc' => '8GB GDDR6',
                'image' => 'products\vga\msiRTX30701.jpg'
            ],

            [
                'name' => 'Zotac GeForce RTX 3080 AMP Holo',
                'category_id' => 4,
                'price' => 14241000,
                'sold' => 68,
                'stock' => 31,
                'color' => 'Gray',
                'weight' => 1200,
                'rating' => 5,
                'desc' => '10GB GDDR6x',
                'image' => 'products\vga\zotacRTX1.jpg'
            ],

            [
                'name' => 'Gigabyte GeForce GTX 1660 GV',
                'category_id' => 4,
                'price' => 4012000,
                'sold' => 245,
                'stock' => 16,
                'color' => 'Black',
                'weight' => 1000,
                'rating' => 5,
                'desc' => '6GB DDR5 Gaming',
                'image' => 'products\vga\GigabyeGTX1.png'
            ],

            [
                'name' => 'XFX Radeon RX 6800 RX',
                'category_id' => 4,
                'price' => 12800000,
                'sold' => 87,
                'stock' => 28,
                'color' => 'Black',
                'weight' => 1200,
                'rating' => 5,
                'desc' => '16GB DDR6 SPEEDSTER MERC',
                'image' => 'products\vga\xfxradeon1.jpg'
            ],

            [
                'name' => 'MSI Radeon RX 5600 XT - Gaming MAX',
                'category_id' => 4,
                'price' => 5352000,
                'sold' => 281,
                'stock' => 13,
                'color' => 'Black',
                'weight' => 800,
                'rating' => 5,
                'desc' => '6GB DDR6',
                'image' => 'products\vga\MSIRadeon1.jpg'
            ],

            [
                'name' => 'ASRock Radeon RX 5500 XT - Challenger',
                'category_id' => 4,
                'price' => 3430000,
                'sold' => 212,
                'stock' => 7,
                'color' => 'Black',
                'weight' => 800,
                'rating' => 5,
                'desc' => '8GB DDR6',
                'image' => 'products\vga\asrockRadeon1.jpg'
            ],

            [
                'name' => 'Gigabyte Radeon RX 5600 XT - GV',
                'category_id' => 4,
                'price' => 5227000,
                'sold' => 170,
                'stock' => 27,
                'color' => 'Black',
                'weight' => 900,
                'rating' => 5,
                'desc' => '6GB DDR6',
                'image' => 'products\vga\gbradeon1.jpg'
            ],

            [
                'name' => 'HIS RX 570 - IceQ X2',
                'category_id' => 4,
                'price' => 2025000,
                'sold' => 351,
                'stock' => 20,
                'color' => 'Black',
                'weight' => 800,
                'rating' => 5,
                'desc' => '4GB DDR5',
                'image' => 'products\vga\hisrx1.jpg'
            ],


            // SSD
            [
                'name' => 'Lexar SSD 2.5" SATA III Lite 240GB',
                'category_id' => 5,
                'price' => 494000,
                'sold' => 427,
                'stock' => 138,
                'color' => 'Gray',
                'weight' => 500,
                'rating' => 5,
                'desc' => '250GB Internal SSD',
                'image' => 'products\ssd\lexar.jpg'
            ],

            [
                'name' => 'Samsung SSD 850 PRO 1TB',
                'category_id' => 5,
                'price' => 4021000,
                'sold' => 281,
                'stock' => 99,
                'color' => 'Black',
                'weight' => 600,
                'rating' => 5,
                'desc' => '1tb Internal SSD',
                'image' => 'products\ssd\samsung1tb.jpg'
            ],

            [
                'name' => 'KIOXIA SSD Exceria 960GB',
                'category_id' => 5,
                'price' => 1564000,
                'sold' => 336,
                'stock' => 142,
                'color' => 'Black',
                'weight' => 500,
                'rating' => 5,
                'desc' => '960GB Internal SSD',
                'image' => 'products\ssd\kioxia1.jpg'
            ],

            [
                'name' => 'Team EX2 Elite 2TB',
                'category_id' => 5,
                'price' => 3282000,
                'sold' => 414,
                'stock' => 231,
                'color' => 'White',
                'weight' => 600,
                'rating' => 5,
                'desc' => '2TB Internal SSD',
                'image' => 'products\ssd\teamelite1.jpg'
            ],

            [
                'name' => 'WDC Blue PC SSD 2TB M.2',
                'category_id' => 5,
                'price' => 3968000,
                'sold' => 351,
                'stock' => 192,
                'color' => 'None',
                'weight' => 300,
                'rating' => 5,
                'desc' => '2TB Internal SSD M.2',
                'image' => 'products\ssd\wdblue.jpg'
            ],

            [
                'name' => 'ADATA SU800 SATA III 2TB',
                'category_id' => 5,
                'price' => 3459000,
                'sold' => 278,
                'stock' => 125,
                'color' => 'Black',
                'weight' => 500,
                'rating' => 5,
                'desc' => '2TB Internal SSD',
                'image' => 'products\ssd\adata2tb1.jpg'
            ],

            [
                'name' => 'Seagate Firecuda Gaming SSD 1TB',
                'category_id' => 5,
                'price' => 4393000,
                'sold' => 128,
                'stock' => 60,
                'color' => 'Black',
                'weight' => 900,
                'rating' => 5,
                'desc' => '1TB External SSD',
                'image' => 'products\ssd\firecuda.jpg'
            ],

            [
                'name' => 'Seagate One Touch SSD 1TB',
                'category_id' => 5,
                'price' => 2540000,
                'sold' => 299,
                'stock' => 121,
                'color' => 'White',
                'weight' => 800,
                'rating' => 5,
                'desc' => '1TB External SSD',
                'image' => 'products\ssd\onetouch.jpg'
            ],

            [
                'name' => 'Seagate Barracuda Fast SSD 500GB',
                'category_id' => 5,
                'price' => 1919000,
                'sold' => 313,
                'stock' => 74,
                'color' => 'Black',
                'weight' => 600,
                'rating' => 5,
                'desc' => '500GB External SSD',
                'image' => 'products\ssd\barracuda.jpg'
            ],

            [
                'name' => 'Samsung T7 Portable SSD 500GB',
                'category_id' => 5,
                'price' => 1565000,
                'sold' => 581,
                'stock' => 79,
                'color' => 'Red',
                'weight' => 600,
                'rating' => 5,
                'desc' => '500GB External SSD',
                'image' => 'products\ssd\samsungt71.jpg'
            ],


            // Hard Disk
            [
                'name' => 'Toshiba X3000 SATA3 6TB',
                'category_id' => 6,
                'price' => 2491000,
                'sold' => 234,
                'stock' => 162,
                'color' => 'None',
                'weight' => 1000,
                'rating' => 5,
                'desc' => '6TB 7200RPM Internal HDD',
                'image' => 'products\hard disk\TX30002.jpg'
            ],

            [
                'name' => 'Seagate Enterprise HDD 16TB',
                'category_id' => 6,
                'price' => 10555000,
                'sold' => 128,
                'stock' => 87,
                'color' => 'None',
                'weight' => 1500,
                'rating' => 5,
                'desc' => '16TB Internal HDD',
                'image' => 'products\hard disk\seagateE1.jpg'
            ],

            [
                'name' => 'Seagate Surveillance SkyHawk 3TB',
                'category_id' => 6,
                'price' => 1429000,
                'sold' => 201,
                'stock' => 91,
                'color' => 'None',
                'weight' => 1000,
                'rating' => 5,
                'desc' => '3TB Internal HDD',
                'image' => 'products\hard disk\seagateskyhawk.jpg'
            ],

            [
                'name' => 'Hitachi Ultrastar HDD 2TB',
                'category_id' => 6,
                'price' => 2045000,
                'sold' => 364,
                'stock' => 61,
                'color' => 'None',
                'weight' => 1000,
                'rating' => 5,
                'desc' => '2TB 7200RPM Internal HDD',
                'image' => 'products\hard disk\htiachiultrastar.jpg'
            ],

            [
                'name' => 'WDC Red SATA3 HDD 10TB',
                'category_id' => 6,
                'price' => 4656000,
                'sold' => 312,
                'stock' => 288,
                'color' => 'None',
                'weight' => 1200,
                'rating' => 5,
                'desc' => '10TB Internal HDD',
                'image' => 'products\hard disk\wdcred.jpg'
            ],

            [
                'name' => 'WD My Passport 5TB',
                'category_id' => 6,
                'price' => 2019000,
                'sold' => 298,
                'stock' => 102,
                'color' => 'Red',
                'weight' => 800,
                'rating' => 5,
                'desc' => '5TB External HDD',
                'image' => 'products\hard disk\wdmp1.jpg'
            ],

            [
                'name' => 'Seagate Backup Plus Ultra Touch 2TB',
                'category_id' => 6,
                'price' => 1186000,
                'sold' => 267,
                'stock' => 139,
                'color' => 'White',
                'weight' => 800,
                'rating' => 5,
                'desc' => '2TB External HDD',
                'image' => 'products\hard disk\seagateUT2.jpg'
            ],

            [
                'name' => 'Seagate Expansion Portable HDD 5TB',
                'category_id' => 6,
                'price' => 1868000,
                'sold' => 475,
                'stock' => 176,
                'color' => 'Black',
                'weight' => 1000,
                'rating' => 5,
                'desc' => '5TB External HDD',
                'image' => 'products\hard disk\expansion.jpg'
            ],

            [
                'name' => 'ADATA RGB HDD 1TB',
                'category_id' => 6,
                'price' => 850000,
                'sold' => 461,
                'stock' => 89,
                'color' => 'Red',
                'weight' => 800,
                'rating' => 5,
                'desc' => '1TB RGB External HDD',
                'image' => 'products\hard disk\adatargb1.jpg'
            ],

            [
                'name' => 'Transcend Storejet C3S HDD 2TB',
                'category_id' => 6,
                'price' => 1191000,
                'sold' => 351,
                'stock' => 109,
                'color' => 'Black',
                'weight' => 900,
                'rating' => 5,
                'desc' => '2TB External HDD',
                'image' => 'products\hard disk\transcendsj2.jpg'
            ],


            //RAM
            [
                'name' => 'VenomRX DDR4 PC25600 Super RGB 8GB',
                'category_id' => 7,
                'price' => 992000,
                'sold' => 289,
                'stock' => 11,
                'color' => 'Black',
                'weight' => 500,
                'rating' => 5,
                'desc' => '3200Mhz 8GB (2x4GB)',
                'image' => 'products\ram\venomRX.jpg'
            ],

            [
                'name' => 'Apacer DDR4 PC25600 NOX RGB Aura2 32GB',
                'category_id' => 7,
                'price' => 2221000,
                'sold' => 196,
                'stock' => 84,
                'color' => 'Black',
                'weight' => 600,
                'rating' => 5,
                'desc' => '3200Mhz 32GB (2x16GB)',
                'image' => 'products\ram\apacerNOX.jpg'
            ],

            [
                'name' => 'Team Elite Plus Black DDR4 PC25600 64GB',
                'category_id' => 7,
                'price' => 3444000,
                'sold' => 178,
                'stock' => 42,
                'color' => 'Black',
                'weight' => 600,
                'rating' => 5,
                'desc' => '3200Mhz 64GB (2x32GB)',
                'image' => 'products\ram\TeamElitePlusBlack.jpg'
            ],

            [
                'name' => 'Corsair DDR4 Vengeance LPX PC28800 8GB',
                'category_id' => 7,
                'price' => 739000,
                'sold' => 89,
                'stock' => 31,
                'color' => 'Black',
                'weight' => 500,
                'rating' => 5,
                'desc' => '3600Mhz 8GB',
                'image' => 'products\ram\CorsairVengeance.jpg'
            ],

            [
                'name' => 'Gskill DDR4 Flare X PC25600 32GB',
                'category_id' => 7,
                'price' => 1886000,
                'sold' => 198,
                'stock' => 56,
                'color' => 'Gray',
                'weight' => 600,
                'rating' => 5,
                'desc' => '3200Mhz 32GB',
                'image' => 'products\ram\gskillFlare.jpg'
            ],

            [
                'name' => 'V-GeN Tsunami DDR4 PC21000 64GB',
                'category_id' => 7,
                'price' => 3503000,
                'sold' => 241,
                'stock' => 89,
                'color' => 'Black',
                'weight' => 500,
                'rating' => 5,
                'desc' => '2666Mhz 64GB (2x32GB)',
                'image' => 'products\ram\vgentsunami.jpg'
            ],

            [
                'name' => 'Team Delta DDR4 RGB PC25600 32GB',
                'category_id' => 7,
                'price' => 2085000,
                'sold' => 138,
                'stock' => 92,
                'color' => 'Black',
                'weight' => 600,
                'rating' => 5,
                'desc' => '3200Mhz 32GB (2x16GB)',
                'image' => 'products\ram\teamdeltargb.jpg'
            ],

            [
                'name' => 'Team T-Force Zeus DDR4 PC25600 64GB',
                'category_id' => 7,
                'price' => 3858000,
                'sold' => 241,
                'stock' => 59,
                'color' => 'Red',
                'weight' => 600,
                'rating' => 5,
                'desc' => '3200Mhz 64GB (2x32GB)',
                'image' => 'products\ram\TeamTForceZeus.jpg'
            ],

            [
                'name' => 'Gigabyte DDR4 Aorus RGB PC28800 16GB',
                'category_id' => 7,
                'price' => 1707000,
                'sold' => 64,
                'stock' => 76,
                'color' => 'Silver',
                'weight' => 500,
                'rating' => 5,
                'desc' => '3600Mhz 16GB (2x8GB)',
                'image' => 'products\ram\gigabyteaorus.jpg'
            ],

            [
                'name' => 'ADATA DDR4 XPG SPECTRIX D50 PC28800',
                'category_id' => 7,
                'price' => 2600000,
                'sold' => 87,
                'stock' => 43,
                'color' => 'White',
                'weight' => 600,
                'rating' => 5,
                'desc' => '3600Mhz 32GB (2x16GB)',
                'image' => 'products\ram\adataxpg.jpg'
            ],


            // MONITOR
            [
                'name' => 'MSI Optix AG32CV 32"',
                'category_id' => 8,
                'price' => 6060000,
                'sold' => 67,
                'stock' => 23,
                'color' => 'Black',
                'weight' => 3000,
                'rating' => 5,
                'desc' => '32" Curved Gaming Monitor AMD Freesync',
                'image' => 'products\monitor\msioptixag32.png'
            ],

            [
                'name' => 'LG LED Gaming UltraGear 32"',
                'category_id' => 8,
                'price' => 4292000,
                'sold' => 43,
                'stock' => 17,
                'color' => 'Black',
                'weight' => 3200,
                'rating' => 5,
                'desc' => '32" 165Hz Response Time 1ms',
                'image' => 'products\monitor\lgultragear.jpg'
            ],

            [
                'name' => 'ASUS TUF Gaming VG32VQ',
                'category_id' => 8,
                'price' => 7221000,
                'sold' => 89,
                'stock' => 41,
                'color' => 'Black',
                'weight' => 3500,
                'rating' => 5,
                'desc' => '32" LED Curved - Monitor Gaming',
                'image' => 'products\monitor\asustufgaming.png'
            ],

            [
                'name' => 'BenQ ZOWIE XL2746S 27"',
                'category_id' => 8,
                'price' => 12121000,
                'sold' => 31,
                'stock' => 59,
                'color' => 'Black',
                'weight' => 4000,
                'rating' => 5,
                'desc' => '27" Gaming LED',
                'image' => 'products\monitor\benqzowie.jpg'
            ],

            [
                'name' => 'Lenovo L24i-10 23.8"',
                'category_id' => 8,
                'price' => 2020000,
                'sold' => 145,
                'stock' => 86,
                'color' => 'Black',
                'weight' => 2500,
                'rating' => 5,
                'desc' => '23.8" LED Monitor',
                'image' => 'products\monitor\lenovol24i.jpg'
            ],

            [
                'name' => 'DELL P2419HC LED 24"',
                'category_id' => 8,
                'price' => 3106000,
                'sold' => 59,
                'stock' => 74,
                'color' => 'Black',
                'weight' => 3000,
                'rating' => 5,
                'desc' => '24" LED Gaming Monitor',
                'image' => 'products\monitor\dellled.jpg'
            ],

            [
                'name' => 'ASUS XG438Q 43"',
                'category_id' => 8,
                'price' => 17585000,
                'sold' => 24,
                'stock' => 56,
                'color' => 'Black',
                'weight' => 4000,
                'rating' => 5,
                'desc' => '43" Gaming Monitor 120Hz',
                'image' => 'products\monitor\asusxg.jpg'
            ],

            [
                'name' => 'LG UltraWide IPS LED 29"',
                'category_id' => 8,
                'price' => 3560000,
                'sold' => 36,
                'stock' => 34,
                'color' => 'Silver',
                'weight' => 3500,
                'rating' => 5,
                'desc' => '29" IPS Gaming Monitor AMD Freesync',
                'image' => 'products\monitor\lgultrawide.jfif'
            ],

            [
                'name' => 'Acer KG241QS 23.6"',
                'category_id' => 8,
                'price' => 2676000,
                'sold' => 66,
                'stock' => 12,
                'color' => 'Black',
                'weight' => 2500,
                'rating' => 5,
                'desc' => '23.6" 165Hz Gaming Monitor',
                'image' => 'products\monitor\acerkg.jpg'
            ],

            [
                'name' => 'Samsung 49HG90D Gaming LED',
                'category_id' => 8,
                'price' => 17373000,
                'sold' => 73,
                'stock' => 7,
                'color' => 'Silver',
                'weight' => 3500,
                'rating' => 5,
                'desc' => '49" Gaming LED',
                'image' => 'products\monitor\samsunggamingled.jpg'
            ],


            // MOUSE
            [
                'name' => 'MSI Clutch GM08',
                'category_id' => 9,
                'price' => 252000,
                'sold' => 141,
                'stock' => 78,
                'color' => 'Black',
                'weight' => 600,
                'rating' => 5,
                'desc' => 'Gaming Mouse',
                'image' => 'products\mouse\msiclutch.jpg'
            ],

            [
                'name' => 'Tecware Impluse+ RGB',
                'category_id' => 9,
                'price' => 282000,
                'sold' => 247,
                'stock' => 73,
                'color' => 'Black',
                'weight' => 600,
                'rating' => 5,
                'desc' => 'Gaming Mouse',
                'image' => 'products\mouse\tecwareimpluse.jfif'
            ],

            [
                'name' => 'Razer Basilisk Ultimate',
                'category_id' => 9,
                'price' => 2649000,
                'sold' => 89,
                'stock' => 31,
                'color' => 'Black',
                'weight' => 700,
                'rating' => 5,
                'desc' => 'Wireless Gaming Mouse',
                'image' => 'products\mouse\razerbasilisk.jpg'
            ],

            [
                'name' => 'Rexus X13 Xierra',
                'category_id' => 9,
                'price' => 151000,
                'sold' => 269,
                'stock' => 81,
                'color' => 'Black',
                'weight' => 600,
                'rating' => 5,
                'desc' => 'Gaming Mouse',
                'image' => 'products\mouse\rexusxiera.jpg'
            ],

            [
                'name' => 'Logitech Lightspeed G604',
                'category_id' => 9,
                'price' => 1312000,
                'sold' => 61,
                'stock' => 29,
                'color' => 'Black',
                'weight' => 600,
                'rating' => 5,
                'desc' => 'Wireless Gaming Mouse',
                'image' => 'products\mouse\logitechlightspeed.jfif'
            ],

            [
                'name' => 'Logitech M238 Cordless',
                'category_id' => 9,
                'price' => 186000,
                'sold' => 250,
                'stock' => 100,
                'color' => 'Red',
                'weight' => 500,
                'rating' => 5,
                'desc' => 'Notebook Mouse Marvel Edition',
                'image' => 'products\mouse\logitechcordless.jpg'
            ],

            [
                'name' => 'Logitech M337 Bluetooth',
                'category_id' => 9,
                'price' => 267000,
                'sold' => 197,
                'stock' => 103,
                'color' => 'Blue',
                'weight' => 500,
                'rating' => 5,
                'desc' => 'Notebook mouse',
                'image' => 'products\mouse\logitechbluetooth.jpg'
            ],

            [
                'name' => 'Powerlogic Air DUO 2',
                'category_id' => 9,
                'price' => 101000,
                'sold' => 347,
                'stock' => 145,
                'color' => 'Black',
                'weight' => 500,
                'rating' => 5,
                'desc' => 'Mouse Bluetooth',
                'image' => 'products\mouse\powerlogicair.jpg'
            ],

            [
                'name' => 'Patriot Viper Laser',
                'category_id' => 9,
                'price' => 606000,
                'sold' => 81,
                'stock' => 64,
                'color' => 'Black',
                'weight' => 600,
                'rating' => 5,
                'desc' => 'RGB Gaming Mouse',
                'image' => 'products\mouse\patriotviper.jpg'
            ],

            [
                'name' => 'SteelSeries Sensei Ten Neon Rider',
                'category_id' => 9,
                'price' => 1100000,
                'sold' => 92,
                'stock' => 78,
                'color' => 'Blue',
                'weight' => 600,
                'rating' => 5,
                'desc' => 'Gaming Mouse',
                'image' => 'products\mouse\steelseriessensei.jfif'
            ],


            // KEYBOARD
            [
                'name' => 'Digital Alliance Gaming Meca Fighter',
                'category_id' => 10,
                'price' => 499000,
                'sold' => 89,
                'stock' => 41,
                'color' => 'Ice White',
                'weight' => 900,
                'rating' => 5,
                'desc' => 'Ice RGB Blue Switch',
                'image' => 'products\keyboard\damecafighter.jpg'
            ],

            [
                'name' => 'MSI Vigor GK70',
                'category_id' => 10,
                'price' => 1666000,
                'sold' => 49,
                'stock' => 59,
                'color' => 'Black',
                'weight' => 1000,
                'rating' => 5,
                'desc' => 'Gaming Keyboard CR US',
                'image' => 'products\keyboard\msivigor.jpg'
            ],

            [
                'name' => 'Corsair K100 Mechanical Gaming',
                'category_id' => 10,
                'price' => 3389000,
                'sold' => 31,
                'stock' => 29,
                'color' => 'Black',
                'weight' => 1000,
                'rating' => 5,
                'desc' => 'RGB Cherry MX Speed',
                'image' => 'products\keyboard\corsairk100.jpg'
            ],

            [
                'name' => 'Razer Pikachu Edition',
                'category_id' => 10,
                'price' => 1749000,
                'sold' => 83,
                'stock' => 17,
                'color' => 'Yellow',
                'weight' => 800,
                'rating' => 5,
                'desc' => 'Gaming Keyboard Limited',
                'image' => 'products\keyboard\razerpikachu.jpg'
            ],

            [
                'name' => 'Dareu A-87 Swallow',
                'category_id' => 10,
                'price' => 1227000,
                'sold' => 136,
                'stock' => 64,
                'color' => 'Blue-White',
                'weight' => 800,
                'rating' => 5,
                'desc' => 'Mechanical Gaming Keyboard',
                'image' => 'products\keyboard\dareuswallow.jpg'
            ],


            // HEADSET
            [
                'name' => 'DBE GM160',
                'category_id' => 11,
                'price' => 186000,
                'sold' => 264,
                'stock' => 56,
                'color' => 'Black',
                'weight' => 700,
                'rating' => 5,
                'desc' => 'Gaming Headset',
                'image' => 'products\headset\dbegm160.jpg'
            ],

            [
                'name' => 'Razer Kraken X',
                'category_id' => 11,
                'price' => 899000,
                'sold' => 147,
                'stock' => 83,
                'color' => 'White',
                'weight' => 900,
                'rating' => 5,
                'desc' => 'Wired Gaming Headset Mercury Edition',
                'image' => 'products\headset\razerkrakenx.jpg'
            ],

            [
                'name' => 'ASUS ROG Delta',
                'category_id' => 11,
                'price' => 3141000,
                'sold' => 68,
                'stock' => 22,
                'color' => 'White',
                'weight' => 900,
                'rating' => 5,
                'desc' => 'Gaming Headset',
                'image' => 'products\headset\asusrogdelta.jfif'
            ],

            [
                'name' => 'ADATA XPG PRECOG',
                'category_id' => 11,
                'price' => 1350000,
                'sold' => 124,
                'stock' => 86,
                'color' => 'Black',
                'weight' => 800,
                'rating' => 5,
                'desc' => 'Gaming Headset Hi Res Audio 7.1 Surround',
                'image' => 'products\headset\adataxpg.jpg'
            ],

            [
                'name' => 'Kingston HyperX CloudX Stinger Core',
                'category_id' => 11,
                'price' => 505000,
                'sold' => 95,
                'stock' => 51,
                'color' => 'Black',
                'weight' => 800,
                'rating' => 5,
                'desc' => 'Gaming Headset',
                'image' => 'products\headset\kingstonhyperX.jfif'
            ],



        ]);
    }
}

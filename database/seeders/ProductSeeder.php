<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::where('isSeller', true)->inRandomOrder()->first();
        $categories = Category::all();

        $products = [
            [
                'name' => 'Iphone 13 Pro Max',
                'price' => 20999000,
                'specification' => 'Layar: Layar Super Retina XDR dengan ProMotion, OLED seluruhnya, ukuran 6,7 inci, resolusi 2778 x 1284 piksel pada 458 ppi, dan dukungan HDR.\r\nChipset: Chip A15 Bionic dengan CPU 6-core dan GPU 5-core.\r\nKamera: Sistem kamera Pro 12 MP dengan kamera Telefoto, Wide, dan Ultra Wide. Fitur zoom optik hingga 3x dan mode Malam.\r\nVideo: Perekaman video HDR dengan Dolby Vision hingga 4K pada 60 fps.\r\nBaterai: Kapasitas baterai 4352 mAh.\r\nPenyimpanan: Tersedia dalam kapasitas 128 GB hingga 1 TB.\r\nBerat: 238 gram',
                'description' => 'Bagian depan Ceramic Shield, bagian belakang dengan kaca matte dan desain baja tahan karat. Tersedia dalam empat varian warna: Sierra Blue, Silver, Gold, dan Graphite Grey',
                'photo' => 'images/products/iphone.jpg',
                'rating' => 2,
                'user_id' => User::where('isSeller', true)->inRandomOrder()->first()->id,
                'category_id' => $categories->where('name', 'Smartphones')->first()->id,
            ],
            [
                'name' => 'Iphone 14 Pro Max',
                'price' => 21999000,
                'specification' => 'Layar: LTPO Super Retina XDR OLED, 1290 x 2796 piksel, 120Hz, HDR10, Dolby Vision.\r\nKamera Utama: 48 MP (wide), 12 MP (telefoto), 12 MP (ultrawide), TOF 3D LiDAR scanner.\r\nKamera Selfie: 12 MP (wide).\r\nChipset: Apple A16 Bionic (4 nm).\r\nBaterai: Li-Ion 4323 mAh, pengisian kabel PD2.0 (50% dalam 30 menit), pengisian nirkabel MagSafe (15W).\r\nFitur: Face ID, accelerometer, gyro, proximity, compass, barometer, Ultra Wideband (UWB) support, Emergency SOS via satellite.\r\nWarna: Space Black, Silver, Gold, Deep Purple.',
                'description' => 'Desain tahan lama dengan Ceramic Shield glass dan ketahanan terhadap air dan debu (IP68).',
                'photo' => 'images/products/iphone1.jpg',
                'rating' => 3,
                'user_id' => User::where('isSeller', true)->inRandomOrder()->first()->id,
                'category_id' => $categories->where('name', 'Smartphones')->first()->id,
            ],
            [
                'name' => 'Iphone 15 Pro Max',
                'price' => 24999000,
                'specification' => 'Layar: Super Retina XDR OLED 6,7 inci, 1290 x 2796 piksel, 120Hz, HDR10, Dolby Vision.\r\nKamera Utama: 48 MP (wide), 12 MP (telefoto), 12 MP (ultrawide), TOF 3D LiDAR scanner (depth).\r\nChipset: Apple A17 Pro (3 nm).\r\nBaterai: Li-Ion 4441 mAh, pengisian kabel PD2.0 (50% dalam 30 menit), pengisian nirkabel MagSafe (15W).\r\nFitur: Face ID, accelerometer, gyro, proximity, compass, barometer, Ultra Wideband (UWB) support, Emergency SOS via satellite.',
                'description' => 'iPhone 15 Pro Max hadir dengan desain titanium yang kuat dan ringan, serta bagian belakang kaca matte bertekstur.',
                'photo' => 'images/products/iphone2.jpg',
                'rating' => 4,
                'user_id' => User::where('isSeller', true)->inRandomOrder()->first()->id,
                'category_id' => $categories->where('name', 'Smartphones')->first()->id,
            ],
            [
                'name' => 'Iphone 16 Pro Max',
                'price' => 28999000,
                'specification' => 'Layar: Super Retina XDR OLED 6,7 inci, 1290 x 2796 piksel, 120Hz, HDR10, Dolby Vision.\r\nKamera Utama: 48 MP (wide), 12 MP (telefoto), 12 MP (ultrawide), TOF 3D LiDAR scanner (depth).\r\nChipset: Apple A17 Pro (3 nm).\r\nBaterai: Li-Ion 4441 mAh, pengisian kabel PD2.0 (50% dalam 30 menit), pengisian nirkabel MagSafe (15W).\r\nFitur: Face ID, accelerometer, gyro, proximity, compass, barometer, Ultra Wideband (UWB) support, Emergency SOS via satellite.',
                'description' => 'iPhone 16 Pro Max hadir dengan desain titanium yang kuat dan ringan, serta bagian belakang kaca matte bertekstur.',
                'photo' => 'images/products/iphone3.jpg',
                'rating' => 5,
                'user_id' => User::where('isSeller', true)->inRandomOrder()->first()->id,
                'category_id' => $categories->where('name', 'Smartphones')->first()->id,
            ],
            [
                'name' => 'Ipad Air 1',
                'price' => 14999000,
                'specification' => 'Dimensi: 247,6 x 178,5 x 6,1 mm\r\nBerat: 458 g (Wi-Fi) / 460 g (3G/LTE)\r\nLayar: 10,9 inci, resolusi 1640 x 2360 piksel, 500 nits kecerahan\r\nMemori: Tersedia dalam dua varian: 64GB (4GB RAM) dan 256GB (4GB RAM)\r\nKamera Utama: 12 MP, f/1.8, PDAF, HDR, video 4K@24/30/60fps\r\nKamera Selfie: 7 MP, f/2.0, HDR, video 1080p@30/60fps\r\nBaterai: Li-Ion 7606 mAh (non-removable)\r\nSistem Operasi: iPadOS 14.1 (dapat ditingkatkan hingga iPadOS 17.5.1)\r\nWarna Tersedia: Space Gray, Silver, Rose Gold, Green, Sky Blue',
                'description' => 'iPad Air (2020) adalah tablet yang dirilis oleh Apple pada Oktober 2020. Tablet ini memiliki desain tipis dengan bingkai aluminium dan layar Liquid Retina IPS LCD berukuran 10,9 inci. Ditenagai oleh chipset Apple A14 Bionic, iPad Air (2020) memiliki kinerja yang tangguh dan fitur-fitur canggih.',
                'photo' => 'images/products/ipad1.jpg',
                'rating' => 3,
                'user_id' => User::where('isSeller', true)->inRandomOrder()->first()->id,
                'category_id' => $categories->where('name', 'Tablets')->first()->id,
            ],
            [
                'name' => 'Ipad Pro',
                'price' => 18999000,
                'specification' => 'Dimensi: 247,6 x 178,5 x 5,9 mm\r\nBerat: 466 g (Wi-Fi), 470 g (5G)\r\nLayar: 11 inci, resolusi 1668 x 2388 piksel, 120Hz refresh rate, HDR10, Dolby Vision, 600 nits kecerahan\r\nMemori: Tersedia dalam beberapa varian: 128GB (8GB RAM), 256GB (8GB RAM), 512GB (8GB RAM), 1TB (16GB RAM), dan 2TB (16GB RAM)\r\nKamera Utama: Dual 12 MP (wide) + 10 MP (ultrawide), TOF 3D LiDAR scanner (depth)\r\nKamera Selfie: 12 MP (ultrawide)\r\nBaterai: Li-Po 7538 mAh (non-removable)\r\nSistem Operasi: iPadOS 14.5.1 (dapat ditingkatkan hingga iPadOS 17.5.1)\r\nWarna Tersedia: Silver, Space Gray',
                'description' => 'iPad Pro 11 (2021) adalah tablet yang dirilis oleh Apple pada Mei 2021. Tablet ini memiliki desain tipis dengan bingkai aluminium dan layar Liquid Retina IPS LCD berukuran 11 inci. Ditenagai oleh chipset Apple M1, iPad Pro 11 (2021) memiliki kinerja yang sangat tangguh dan fitur-fitur canggih.',
                'photo' => 'images/products/ipad2.jpg',
                'rating' => 5,
                'user_id' => User::where('isSeller', true)->inRandomOrder()->first()->id,
                'category_id' => $categories->where('name', 'Tablets')->first()->id,
            ],
            [
                'name' => 'Ipad',
                'price' => 30999000,
                'specification' => 'Dimensi: 250,6 x 174,1 x 7,5 mm\r\nBerat: 498 g (Wi-Fi) / 498 g (LTE)\r\nLayar: 10,2 inci, resolusi 1620 x 2160 piksel, 500 nits kecerahan\r\nMemori: Tersedia dalam dua varian: 64GB (3GB RAM) dan 256GB (3GB RAM)\r\nKamera Utama: 8 MP, f/2.4, HDR, video 1080p@25/30fps\r\nKamera Selfie: 12 MP (ultrawide), HDR, video 1080p@25/30/60fps\r\nBaterai: Li-Ion 8557 mAh (non-removable)\r\nSistem Operasi: iPadOS 15 (dapat ditingkatkan hingga iPadOS 17.5.1)\r\nWarna Tersedia: Silver, Space Gray',
                'description' => 'iPad 9th Generation (2021) adalah tablet yang dirilis oleh Apple pada September 2021. Tablet ini memiliki desain tipis dengan bingkai aluminium dan layar Retina IPS LCD berukuran 10,2 inci. Ditenagai oleh chipset Apple A13 Bionic, iPad 9th Generation (2021) menawarkan kinerja yang baik dan fitur-fitur yang memadai.',
                'photo' => 'images/products/ipad3.jpg',
                'rating' => 4,
                'user_id' => User::where('isSeller', true)->inRandomOrder()->first()->id,
                'category_id' => $categories->where('name', 'Tablets')->first()->id,
            ],
            [
                'name' => 'Airtag',
                'price' => 212999,
                'specification' => 'AirTag menggunakan sinyal Bluetooth yang aman dan dapat terdeteksi oleh perangkat di jaringan Find My.\r\nTeknologi Ultra Wideband memungkinkan Anda menemukan AirTag dengan presisi tinggi.\r\nAirTag dirancang untuk melindungi privasi Anda, dan data lokasi tidak disimpan pada perangkat itu sendiri.',
                'description' => 'AirTag adalah cara yang sangat mudah untuk melacak barang-barang Anda. Cukup pasang satu pada kunci Anda atau masukkan ke dalam tas. Kemudian, Anda dapat melacaknya melalui aplikasi Find My di perangkat Apple Anda. AirTag juga memungkinkan Anda melacak perangkat Apple lainnya dan berkomunikasi dengan teman dan keluarga.',
                'photo' => 'images/products/acc1.jpg',
                'rating' => 2,
                'user_id' => User::where('isSeller', true)->inRandomOrder()->first()->id,
                'category_id' => $categories->where('name', 'Accessories')->first()->id,
            ],
            [
                'name' => 'Kepala Charger',
                'price' => 25999,
                'specification' => 'Desain mini dan mudah dibawa.\r\nPerlindungan keamanan ganda.\r\nDapat mengisi daya tiga perangkat secara bersamaan. Mendukung pengisian cepat hingga 30W.\r\nTiga port: dua USB dan satu port Type-C.',
                'description' => 'AirTag adalah cara yang sangat mudah untuk melacak barang-barang Anda. Cukup pasang satu pada kunci Anda atau masukkan ke dalam tas. Kemudian, Anda dapat melacaknya melalui aplikasi Find My di perangkat Apple Anda. AirTag juga memungkinkan Anda melacak perangkat Apple lainnya dan berkomunikasi dengan teman dan keluarga.',
                'photo' => 'images/products/acc2.jpg',
                'rating' => 1,
                'user_id' => User::where('isSeller', true)->inRandomOrder()->first()->id,
                'category_id' => $categories->where('name', 'Accessories')->first()->id,
            ], 
            [
                'name' => 'Apple Watch',
                'price' => 12999000,
                'specification' => 'Layar Lebih Besar: Area layar hampir 20% lebih besar daripada Apple Watch Series 6.\r\nOksigen Darah: Anda dapat mengukur kadar oksigen darah Anda.\r\nPemberitahuan Detak Jantung: Pantau detak jantung rendah dan tinggi.\r\nTahan Debu: Dengan sertifikasi IP6X.\r\nKetahanan Air: Siap dipakai berenang di laut atau kolam dengan ketahanan air WR50.\r\nPengisian Daya Cepat: Hingga 33% lebih cepat daripada Series 6.',
                'description' => 'Apple Watch Series 7 hadir dengan layar Retina yang lebih besar, daya tahan yang ditingkatkan, dan pengisian daya 33% lebih cepat.',
                'photo' => 'images/products/acc3.jpg',
                'rating' => 4,
                'user_id' => User::where('isSeller', true)->inRandomOrder()->first()->id,
                'category_id' => $categories->where('name', 'Accessories')->first()->id,
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}

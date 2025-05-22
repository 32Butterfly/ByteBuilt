<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'PC | AMD Ryzen 7 7700, 32GB 6000MHz, SSD NVME M.2 2TB, RTX 4070',
            'specs' => [
                'Manufacturer' => 'GameRoom',
                'Processor (CPU)' => 'AMD Ryzen 7 7700',
                'CPU Cooler' => 'DEEPCOOL AG500 BK ARGB',
                'Motherboard' => 'GIGABYTE B650 AX',
                'RAM' => '32GB DDR5 6000MHz RGB',
                'GPU' => 'NVIDIA GeForce RTX 4070 12GB',
                'Storage' => '2TB M.2 NVME PCIe Gen3x4',
                'Case' => 'APNX C1 Mid-Tower',
                'PSU' => 'Fully Modular 750W 80+ GOLD',
                'Warranty' => '24 months for individuals, 12 months for companies',
            ],
            'price' => 1499.99,
            'currency' => '€',
            'image' => 'images/listing1.jpg',
        ]);

        Product::create([
            'name' => 'Desktop Computer | Intel I5-14400F, 32GB 6000MHz, SSD NVME M.2 2TB, RTX 4070',
            'specs' => [
                'Manufacturer' => 'GameRoom',
                'Processor (CPU)' => 'Intel I5-14400F',
                'Motherboard' => 'ASROCK B760M GAMING',
                'RAM' => '32GB (DDR5, 6000 MHz) RGB',
                'GPU' => 'Nvidia GeForce RTX™ 4070 12GB',
                'Storage' => '2TB M.2 NVME PCIe Gen3x4 3500/3000 MB/s',
                'Case' => 'GENESIS Irid 503 ARGB V2',
                'PSU' => '650W 80+ GOLD',
                'Warranty' => '24 months for individuals, 12 months for companies',
            ],
            'price' => 1349.00,
            'currency' => '€',
            'image' => 'images/listing2.jpg',
        ]);

        Product::create([
            'name' => 'PC | AMD Ryzen 9 9950X3D, 64GB 6400MHz, NVME M.2 SSD 4TB, RTX 5090 32GB',
            'specs' => [
                'Manufacturer' => 'GameRoom',
                'Processor (CPU)' => 'AMD Ryzen 9 9950X3D 16-Core, 32-Thread (4.3 GHz – 5.7 GHz)',
                'CPU Cooler' => 'LIAN LI GA II TRINITY 360 (Liquid Cooling, ARGB Fans, White)',
                'Motherboard' => 'GIGABYTE X870E AORUS PRO ICE (Wi-Fi 7, Bluetooth 5.3, USB4)',
                'RAM' => 'G.SKILL ROYAL RGB 64GB DDR5 6400 MHz CL32',
                'GPU' => 'MSI RTX 5090 SUPRIM SOC 32GB GDDR7 512bit',
                'Storage' => 'ADATA 4TB SSD M.2 2280 (Read 7400 MB/s, Write 6600 MB/s) - PCIe Gen4',
                'Case' => 'LIAN LI O11 EVO RGB DYNAMIC WHITE',
                'PSU' => 'BEQUIET STRAIGHT POWER 12 ATX 3.1 80+ PLATINUM 1200W (Fully Modular)',
                'Warranty' => '24 months for individuals, 12 months for companies',
                'Additional Info' => '2X WHITE CABLE STRIMER WIRELESS RGB (24 PIN + 16 PIN)',
            ],
            'price' => 6179.00,
            'currency' => '€',
            'image' => 'images/listing3.jpg',
        ]);

        Product::create([
            'name' => 'PC | AMD Ryzen 5 9600X, 32GB DDR5 6400MHz, NVME M.2 SSD 2TB, RX 7800 XT',
            'specs' => [
                'Manufacturer' => 'GameRoom',
                'Processor (CPU)' => 'AMD Ryzen 5 9600X',
                'CPU Cooler' => 'LIAN LI GA II TRINITY 240 (White)',
                'Motherboard' => 'AMD B850 GAMING PLUS WIFI (Wi-Fi 6Eaxe + Bluetooth 5.4)',
                'RAM' => '32GB DDR5 6400 MHz RGB (White)',
                'GPU' => 'Sapphire PURE RX 7800 XT 16GB GDDR6X 256bit (White)',
                'Storage' => '2TB M.2 NVME PCIe Gen4x4 7400/7000 MB/s',
                'Case' => 'FRACTAL DESIGN POP AIR RGB (Tempered Glass, White)',
                'PSU' => 'GIGABYTE ATX 3.0 80+ GOLD 850W (Fully Modular, White)',
                'Warranty' => '24 months for individuals, 12 months for companies',
            ],
            'price' => 1729.00,
            'currency' => '€',
            'image' => 'images/listing4.jpg',
        ]);

        Product::create([
            'name' => 'PC | AMD Ryzen 7 7800X3D, DDR5 32GB 6400MHz, SSD NVME M.2 2TB, RTX 4070 SUPER',
            'specs' => [
                'Manufacturer' => 'GameRoom',
                'Processor (CPU)' => 'AMD Ryzen 7 7800X3D',
                'CPU Cooler' => 'DEEPCOOL LT240 ARGB (WHITE)',
                'Motherboard' => 'AMD B650-A GAMING WIFI (WIFI 6E + BT 5.2)',
                'RAM' => '2x16GB DDR-6400 RGB CL30 (WHITE)',
                'GPU' => 'MSI GAMING X SLIM RTX 4070 SUPER 12 GB (WHITE)',
                'Storage' => '2 TB M.2 NVME PCIe Gen4x4 7400/6500 MB/s',
                'Case' => 'DEEPCOOL CK560 ARGB (WHITE)',
                'PSU' => '850 W 80 Plus Gold (ATX 3.0) (WHITE)',
                'Warranty' => '24 months for individuals, 12 months for companies',
            ],
            'price' => 2199.00,
            'currency' => '€',
            'image' => 'images/listing5.jpg',
        ]);

        Product::create([
            'name' => 'PC | AMD Ryzen 5 5600X, 16GB 3200MHz, SSD NVME M.2 2TB, RTX 4060',
            'specs' => [
                'Manufacturer' => 'GameRoom',
                'Processor (CPU)' => 'AMD Ryzen 5 5600X',
                'Motherboard' => 'AMD GIGABYTE A520M',
                'RAM' => '16GB (DDR4, 3200 MHz) RGB',
                'GPU' => 'Nvidia GeForce RTX™ 4060 8GB',
                'Storage' => '2TB M.2 NVME PCIe Gen3x4 3500/3000 MB/s',
                'Case' => 'Deepcool CC360 ARGB WHITE',
                'PSU' => '650W 80+ Bronze',
                'Warranty' => '24 months for individuals, 12 months for companies',
            ],
            'price' => 919.00,
            'currency' => '€',
            'image' => 'images/listing6.jpg',
        ]);

        Product::create([
            'name' => 'PC | RYZEN 7 7800X3D, DDR5 32GB 6400MHz, SSD NVME M.2 2TB, RTX 4070 SUPER',
            'specs' => [
                'Manufacturer' => 'GameRoom',
                'Processor (CPU)' => 'AMD Ryzen 7 7800X3D',
                'Cpu cooler' => 'DEEPCOOL LT520 (WHITE)',
                'Motherboard' => 'ASROCK B650 PRO RS (WHITE)',
                'Random Access Memory (RAM)' => '2x16GB DDR-6400 RGB CL30 (WHITE)',
                'Graphics card (GPU)' => 'GIGABYTE RTX 4070 SUPER 12 GB (WHITE)',
                'Storage (SSD)' => '2 TB M.2 NVME PCIe Gen4x4 7400/6500 MB/s',
                'Computer case' => 'GENESIS IRID 505 V2 ARGB (WHITE)',
                'Power Supply Unit (PSU)' => '850 W 80 Plus Gold (ATX 3.0) (WHITE)',
                'Warranty' => '24 months for individuals, 12 months for companies',
            ],
            'price' => 2149.00,
            'currency' => '€',
            'image' => 'images/listing7.jpg',
        ]);

        Product::create([
            'name' => 'PC | RYZEN 7 7800X3D, DDR5 32GB 6000MHz, NVME M.2 SSD 2TB, RTX 4070',
            'specs' => [
                'Manufacturer' => 'GameRoom',
                'Processor (CPU)' => 'AMD Ryzen 7 7800X3D',
                'Cpu cooler' => 'DEEPCOOL AG620 ARGB (WHITE)',
                'Motherboard' => 'ASROCK B650M (INTEGRATED Intel® Wi-Fi 6E and Bluetooth 5.2) (WHITE)',
                'Random Access Memory (RAM)' => 'ADATA XPG LANCER RGB DDR5 2x16 RGB DDR-6000 (WHITE)',
                'Graphics card (GPU)' => 'GEFORCE RTX 4070 12 GB RGB (WHITE)',
                'Storage (SSD)' => '2 TB M.2 NVME PCIe Gen4x4 7400/6500 MB/s',
                'Computer case' => 'FRACTAL DESIGN POP MINI AIR RGB (WHITE)',
                'Power Supply Unit (PSU)' => 'MSI MAG 850 W 80 Plus Gold (WHITE) (ATX 3.0)',
                'Warranty' => '24 months for individuals, 12 months for companies',
            ],
            'price' => 2049.00,
            'currency' => '€',
            'image' => 'images/listing8.jpg',
        ]);

        Product::create([
            'name' => 'PC | I5-14600KF, DDR5 32GB 6000MHz, SSD NVME M.2 2TB, RX 7800 XT',
            'specs' => [
                'Manufacturer' => 'GameRoom',
                'Processor (CPU)' => 'Intel I5-14600KF',
                'Cpu cooler' => 'DEEPCOOL LS520 ARGB',
                'Motherboard' => 'INTEL B760 GAMING PLUS (INTEGRATED Intel® Wi-Fi 6E and Bluetooth 5.3)',
                'Random Access Memory (RAM)' => 'G.SKILL 2x16GB DDR-6000 RGB CL36',
                'Graphics card (GPU)' => 'AMD RADEON 7800 XT 16 GB (SAPPHIRE NITRO+)',
                'Storage (SSD)' => '2 TB M.2 NVME PCIe Gen4x4 7400/6500 MB/s',
                'Computer case' => 'GENESIS IRID 505 V2 ARGB',
                'Power Supply Unit (PSU)' => 'GIGABYTE 750 W 80 Plus Gold (ATX 3.0)',
                'Warranty' => '24 months for individuals, 12 months for companies',
            ],
            'price' => 1799.00,
            'currency' => '€',
            'image' => 'images/listing9.jpg',
        ]);

        Product::create([
            'name' => 'PC | I5-14600KF, DDR5 32GB 6000MHz, SSD NVME M.2 2TB, RTX 4070 SUPER',
            'specs' => [
                'Manufacturer' => 'GameRoom',
                'Processor (CPU)' => 'Intel I5-14600KF',
                'Cpu cooler' => 'DEEPCOOL LS520 ARGB',
                'Motherboard' => 'MSI B760 GAMING PLUS (INTEGRATED Intel® Wi-Fi 6E and Bluetooth 5.3)',
                'Random Access Memory (RAM)' => 'G.SKILL 2x16GB DDR-6000 RGB CL36',
                'Graphics card (GPU)' => 'GEFORCE RTX 4070 SUPER 12 GB',
                'Storage (SSD)' => '2 TB M.2 NVME PCIe Gen4x4 7400/6500 MB/s',
                'Computer case' => 'GENESIS IRID 505 V2 ARGB',
                'Power Supply Unit (PSU)' => '750 W 80 Plus Gold (ATX 3.0)',
                'Warranty' => '24 months for individuals, 12 months for companies',
            ],
            'price' => 1899.00,
            'currency' => '€',
            'image' => 'images/listing10.jpg',
        ]);

        Product::create([
            'name' => 'PC | I5-14600KF, DDR5 32GB 6000MHz, SSD NVME M.2 2TB, RTX 4070 SUPER',
            'specs' => [
                'Manufacturer' => 'GameRoom',
                'Processor (CPU)' => 'Intel I5-14600KF',
                'Cpu cooler' => 'DEEPCOOL LS520 ARGB',
                'Motherboard' => 'MSI B760 GAMING PLUS (INTEGRATED Intel® Wi-Fi 6E and Bluetooth 5.3)',
                'Random Access Memory (RAM)' => 'G.SKILL 2x16GB DDR-6000 RGB CL36',
                'Graphics card (GPU)' => 'GEFORCE RTX 4070 SUPER 12 GB',
                'Storage (SSD)' => '2 TB M.2 NVME PCIe Gen4x4 7400/6500 MB/s',
                'Computer case' => 'GENESIS IRID 505 V2 ARGB',
                'Power Supply Unit (PSU)' => '750 W 80 Plus Gold (ATX 3.0)',
                'Warranty' => '24 months for individuals, 12 months for companies',
            ],
            'price' => 1899.00,
            'currency' => '€',
            'image' => 'images/listing11.jpg',
        ]);

        Product::create([
            'name' => 'Desktop Computer | I5-14400F, 32GB 6000MHz, SSD NVME M.2 2TB, RTX 4070',
            'specs' => [
                'Manufacturer' => 'GameRoom',
                'Processor (CPU)' => 'Intel I5-14400F',
                'Motherboard' => 'ASROCK B760M GAMING',
                'Random Access Memory (RAM)' => '32GB (DDR5, 6000 MHz) RGB',
                'Graphics card (GPU)' => 'Nvidia GeForce RTX™ 4070 12GB',
                'Storage (SSD)' => '2TB M.2 NVME PCIe Gen3x4 3500/3000 MB/s',
                'Computer case' => 'GENESIS Irid 503 ARGB V2',
                'Power Supply Unit (PSU)' => '650W 80+ GOLD',
                'Warranty' => '24 months for individuals, 12 months for companies',
            ],
            'price' => 1349.00,
            'currency' => '€',
            'image' => 'images/listing12.jpg',
        ]);

        Product::create([
            'name' => 'Desktop Computer | I5-12400F, 16GB 3200MHz, SSD NVME M.2 2TB, RTX 4060',
            'specs' => [
                'Manufacturer' => 'GameRoom',
                'Processor (CPU)' => 'Intel I5-12400F',
                'Motherboard' => 'INTEL H610M',
                'Random Access Memory (RAM)' => '16GB (DDR4, 3200 MHz) RGB',
                'Graphics card (GPU)' => 'Nvidia GeForce RTX™ 4060 8GB',
                'Storage (SSD)' => '2TB M.2 NVME PCIe Gen3x4 3500/3000 MB/s',
                'Computer case' => 'Deepcool CC360 ARGB',
                'Power Supply Unit (PSU)' => '650W 80+ Silver',
                'Warranty' => '24 months for individuals, 12 months for companies',
            ],
            'price' => 1049.00,
            'currency' => '€',
            'image' => 'images/listing13.jpg',
        ]);

        Product::create([
            'name' => 'Desktop Computer | Ryzen 5 5600X, 16GB 3200MHz, SSD NVME M.2 2TB, RTX 4060',
            'specs' => [
                'Manufacturer' => 'GameRoom',
                'Processor (CPU)' => 'AMD Ryzen 5 5600X',
                'Motherboard' => 'AMD GIGABYTE A520M',
                'Random Access Memory (RAM)' => '16GB (DDR4, 3200 MHz) RGB',
                'Graphics card (GPU)' => 'Nvidia GeForce RTX™ 4060 8GB',
                'Storage (SSD)' => '2TB M.2 NVME PCIe Gen3x4 3500/3000 MB/s',
                'Computer case' => 'Deepcool CC360 ARGB',
                'Power Supply Unit (PSU)' => '650W 80+ Bronze',
                'Warranty' => '24 months for individuals, 12 months for companies',
            ],
            'price' => 999.00,
            'currency' => '€',
            'image' => 'images/listing14.jpg',
        ]);

        Product::create([
            'name' => 'Desktop Computer | Ryzen 5 7600, 16GB 6000MHz, SSD NVME M.2 2TB, RTX 4060',
            'specs' => [
                'Manufacturer' => 'GameRoom',
                'Processor (CPU)' => 'AMD Ryzen 5 7600',
                'Motherboard' => 'AMD B650M GAMING',
                'Random Access Memory (RAM)' => '16GB (DDR5, 6000 MHz) RGB',
                'Graphics card (GPU)' => 'Nvidia GeForce RTX™ 4060 8GB',
                'Storage (SSD)' => '2TB M.2 NVME PCIe Gen3x4 3500/3000 MB/s',
                'Computer case' => 'MSI MAG FORGE M100R RGB BLACK',
                'Power Supply Unit (PSU)' => '650W 80+ Silver',
                'Warranty' => '24 months for individuals, 12 months for companies',
            ],
            'price' => 1099.00,
            'currency' => '€',
            'image' => 'images/listing15.jpg',
        ]);
    }
}

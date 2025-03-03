<?php
function getLangParam()
{
    return isset($_SESSION['lang']) ? '?lang=' . $_SESSION['lang'] : '';
}

function getAllProducts()
{
    return [
        'heavy_duty' => [
            'truck-lowbed',
            'mobil-towing-with-crane-hyva',
            'mini-self-loader',
            'tangki-air',
            'arm-roll-with-kontainer',
            'dump-truck-aero',
            'dump-truck-standar',
            'arm-roll-with-kontainer-hijau',
            'mini-dump-hyva',
            'sky-lift-traga',
            'dump-truck-stainless',
            'tangki-air-biru',
            'mobil-towing',
            'mini-roller',
            'tangki-vacuum-10000-liter'
        ],
        'special_purpose' => [
            'mobil-layanan-dapur-umum-bencana',
            'mobil-dapur-umum',
            'mobil-dapur-badan-pangan-nasional',
            'mobil-videotron',
            'mobil-konseling',
            'mobil-pelayanan-e-ktp',
            'mobil-imigration',
            'mobil-tahanan',
            'mobil-tahanan-imigrasi',
            'mobil-angkutan-personil',
            'mobil-angkutan-personil-dalmas',
            'mobil-patroli',
            'mobil-promosi-kesehatan',
            'compactor-12m3',
            'compactor',
            'compactor-6m3',
            'vacuum-jetting-s777a',
            'vacuum-jetting',
            'arm-roll-hyva-underground',
            'unit-crane-hyva-12t',
            'derek-with-crane-hyva',
            'truck-sky-lift-23m',
            'mobil-toilet',
            'mobil-toilet-portable',
            'derek-double-cabin',
            'angkutan-personil-dalmas'
        ],
        'ambulance' => ['ambulance-emergency', 'mobil-pelayanan-kesehatan'],
        'bus' => ['medium-bus', 'bus-pelayanan', 'mobil-training-unit'],
        'heavy_equipment' => [
            'excavator-develon-dx220a-2',
            'sd16-crawler-dozer',
            'rc904-wheeled-tractor',
            'backhoe-loader-jcb-3cx',
            'tractor-cat-d6-gc',
            'hitachi-zx210f-5g',
            'wheel-loader-hitachi-zw140',
            'mini-excavator-nsl-hd55',
            'develon-sd200-wheel-loaders',
            'hitachi-zx65usb-5a',
            'motor-grader-sg14-b5',
        ]
    ];
}

function getPartners()
{
    return [
        ["slug" => "hino", "title" => "Hino"],
        ["slug" => "armindo", "title" => "Armindo"],
        ["slug" => "cemaco", "title" => "Cemaco"],
        ["slug" => "auto2000", "title" => "Auto2000"],
        ["slug" => "arista", "title" => "Arista"],
        ["slug" => "indomobil", "title" => "Indomobil"],
        ["slug" => "nasmoco", "title" => "Nasmoco"],
        ["slug" => "tejaberlian", "title" => "Teja Berlian"]
    ];
}

function getCustomers()
{
    return [
        ["slug" => "dlh", "title" => "Dinas Lingkungan Hidup"],
        ["slug" => "pupr", "title" => "Kementerian PUPR"],
        ["slug" => "imigrasi", "title" => "Rumah Detensi Imigrasi"],
        ["slug" => "humbang_hasundutan", "title" => "Dinas Perhubungan Kabupaten Humbang Hasundutan"],
        ["slug" => "batubara", "title" => "Dinas Perumahan Kawasan Permukiman dan Lingkungan Hidup Kabupaten Batubara"],
        ["slug" => "kemenhub", "title" => "Kementerian Perhubungan"],
        ["slug" => "jember", "title" => "DLH Kabupaten Jember"],
        ["slug" => "tapanuli_utara", "title" => "DLH Kabupaten Tapanuli Utara"],
        ["slug" => "batu", "title" => "DLH Kota Batu"],
        ["slug" => "malang", "title" => "DLH Kota Malang"],
        ["slug" => "tangerang", "title" => "DLH Kota Tangerang"],
        ["slug" => "bulukumba", "title" => "DLHK Kabupaten Bulukumba"],
        ["slug" => "sumedang", "title" => "DLHK Kabupaten Sumedang"],
        ["slug" => "depok", "title" => "DLHK Kota Depok"],
        ["slug" => "tegal", "title" => "DPUPR Kota Tegal"]
    ];
}

function getInstagramPosts()
{
    return [
        ["slug" => "img-01", "alt" => "A featured product from our Instagram feed"],
        ["slug" => "img-02", "alt" => "A featured product from our Instagram feed"],
        ["slug" => "img-03", "alt" => "A featured product from our Instagram feed"],
        ["slug" => "img-04", "alt" => "A featured product from our Instagram feed"],
        ["slug" => "img-05", "alt" => "A featured product from our Instagram feed"]
    ];
}

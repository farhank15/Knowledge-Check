<?php
header('Content-Type: application/json');

$merchant = [
    [
        'id' => 1,
        'name' => 'RM Madang Geden'
    ],
    [
        'id' => 2,
        'name' => 'RM Pokwe'
    ]
];
$product = [
    [
        'category' => 'food',
        'created_at' => '2023-10-30 13:39:49',
        'name' => 'Baso Aci',
        'merchant_id' => 1
    ],
    [
        'category' => 'drink',
        'created_at' => '2023-10-12 13:30:49',
        'name' => 'Es Jeruk',
        'merchant_id' => 2
    ],
    [
        'category' => 'desert',
        'created_at' => '2023-11-30 13:39:49',
        'name' => 'ice cream',
        'merchant_id' => 1
    ],
    [
        'category' => 'food',
        'created_at' => '2023-10-11 13:39:49',
        'name' => 'Mie Ayam',
        'merchant_id' => 1
    ],
    [
        'category' => 'drink',
        'created_at' => '2023-05-30 13:39:49',
        'name' => 'Teh',
        'merchant_id' => 2
    ],
    [
        'category' => 'food',
        'created_at' => '2023-01-02 13:39:49',
        'name' => 'Nasi Goreng',
        'merchant_id' => 2
    ]
];

$response = [
    'merchants' => $merchant,
    'products' => $product
];

echo json_encode($response);
?>
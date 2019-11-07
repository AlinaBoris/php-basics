<?php
$product = [
    'top_layer' => [
        'products'=> [
            1 => [
                    'name' => 'Kiausiniai',
                    'quantity' => 3,
            ],
            2 => [
                    'name' => 'Grietine',
                    'quantity' => 1,
            ],
            3 => [
                    'name' => 'Jogurtas',
                    'quantity' => 1,
            ],
            4 => [
                    'name' => 'Zuvis',
                    'quantity' => 0,
            ]
        ]
    ],
    'bottom_layer' => [
        'products'=> [
            1 => [
                'name' => 'Pienas',
                'quantity' => 1,
            ],
            2 => [
                'name' => 'Kefyras',
                'quantity' => 0,
            ],
            3 => [
                'name' => 'Degtine',
                'quantity' => 2,
            ],
            4 => [
                'name' => 'Keciupas',
                'quantity' => 2,
            ]
        ]
    ]   
]; 

var_dump($product);

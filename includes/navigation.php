<?php
require_once __DIR__ . '/../constans/constans.php';
// Navigáció
$navItems = [
    [
        'label' => 'A Méhek Világa',
        'url' => '#',
        'submenu' => [
            [
                'label' => 'Méhpopulációk és Veszélyek',
                'url' => BASE_URL . '#'
            ],
            [
                'label' => 'Méhmentés és Megőrzés',
                'url' => BASE_URL . '#'
            ],
            [
                'label' => 'Beporzás és Ökoszisztéma',
                'url' => BASE_URL . '#'
            ],
            [
                'label' => 'Méhek és Mezőgazdaság',
                'url' => BASE_URL . '#'
            ]
        ]
    ],
    [
        'label' => 'Városi Méhészet',
        
    ],
    [
        'label' => 'Oktatás és Tudatosság',
        'url' => BASE_URL . '#'
    ],
    [
        'label' => 'Fórum',
        'url' => BASE_URL . 'forum.php'
    ],
];
// Aktuális oldal lekérése, ellenőrzés
function isActive($url) {
    $currentUrl = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    return strpos($currentUrl, $url) !== false ? 'active' : '';
}
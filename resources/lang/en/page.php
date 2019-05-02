<?php
/**
 * Created by PhpStorm.
 * User: A.K.A
 * Date: 27/04/2019
 * Time: 09:25
 */

return [
    'menu' => [
        'home' => 'Home',
        'about' => 'About',
        'product' => 'Products',
        'service' => 'Services',
        'team' => 'Teams',
        'contact' => 'Contact',
        'consult' => 'Ask for a quote',
    ],
    'home-wrapper' => [
        'title' => 'SOCOGHAF',
        'description' => 'Construction materials',
    ],
    'footer' => [
        'contact' => [
            'phone' => 'Phone',
            'email' => 'Email',
            'address' => 'Address',
        ],
        'copyright' => "<p>Copyright © 2019. All rights reserved. Realized by <a href=\"#\" target=\"_blank\">RDASERVICE</a></p>"
    ],
    'home' => [
        'about' => [
            'title' => 'ABOUT',
            'origin' => [
                'title' => 'ORIGIN',
                'content' => "<strong>SOCOGHAF</strong> is a company specializing in the distribution of ferrous and non-ferrous Steel, founded in 1989 in <strong>Bobo-Dioulasso</strong> in <strong>BURKINA-FASO</strong>.
                        It continues to grow and its notoriety is no longer in doubt in the field of building materials.",
            ],
            'parc' => [
                'title' => "STEEL PARK",
                'content' => "Our steel park meets all the needs for the professionals of the industry of the mines, the buildings and the private individuals, having a unit of transformation of plate vat.",
            ],
            'label' => [
                'title' => "LABELS",
                'content' => "<b>SOCOGHAF</b> draws on its 30-year experience to advise and guide its professional and private clients. It is also a boilermaking workshop at the forefront of tech, label, <b>HARDOX WEAR PART</b>.",
            ],
        ],
        'product' => [
            'title' => 'PRODUCTS',
            'products' => [
                [
                    'name' => "Black plates",
                    'description' => "6/10 to 50 mm in any size",
                    'image' => asset('assets/img/tole_noire4.jpg'),
                    'href' => route('category.show', 'tole-noires'),
                    'slug' => 'tole-noires',
                ],
                [
                    'name' => "Stainless steel sheets",
                    'description' => "7/10 to 10mm in 304L or 316L",
                    'image' => asset('assets/img/tole_inox4.jpg'),
                    'href' => route('category.show', 'tole-inox'),
                    'slug' => 'tole-inox',
                ],
                [
                    'name' => "Hardox brand wear plates",
                    'description' => "4-50mm in any size",
                    'image' => asset('assets/img/tole_hardox2.jpg'),
                    'href' => route('category.show', 'tole-hardox'),
                    'slug' => 'tole-hardox',
                ],
                [
                    'name' => "Tray plates",
                    'description' => "aluzinc, galva, aluminum, prelace of 35-70 / 100",
                    'image' => asset('assets/img/tole_bac1.jpg'),
                    'href' => route('category.show', 'tole-bac'),
                    'slug' => 'tole-bac',
                ],
                [
                    'name' => "Beams",
                    'description' => "U, I, H in any size",
                    'image' => asset('assets/img/poutrelle1.jpg'),
                    'href' => route('category.show', 'poutrelles'),
                    'slug' => 'poutrelles',
                ],
                [
                    'name' => "Flat iron",
                    'description' => "20-100 mm",
                    'image' => asset('assets/img/fer_plat1.jpg'),
                    'href' => route('category.show', 'fer-plat'),
                    'slug' => 'fer-plat',
                ],
                [
                    'name' => "Tubing",
                    'description' => "round, square, rectangle in any dimension",
                    'image' => asset('assets/img/tubes_rond.jpg'),
                    'href' => route('category.show', 'tubes'),
                    'slug' => 'tubes',
                ],
                [
                    'name' => "Round tubes",
                    'description' => "in any dimension",
                    'image' => asset('assets/img/tube_rond1.jpg'),
                    'href' => route('category.show', 'tubes'),
                    'slug' => 'tubes',
                ],
                [
                    'name' => "Square tubes",
                    'description' => "in any dimension",
                    'image' => asset('assets/img/tubes_carre.jpg'),
                    'href' => route('category.show', 'tubes'),
                    'slug' => 'tubes',
                ],
                [
                    'name' => "Rectangular tubes",
                    'description' => "in any dimension",
                    'image' => asset('assets/img/tubes_carre_rectangle.jpg'),
                    'href' => route('category.show', 'tubes'),
                    'slug' => 'tubes',
                ],
                [
                    'name' => "Duckboard",
                    'description' => "",
                    'image' => asset('assets/img/caillebotis1.jpg'),
                    'href' => route('category.show', 'caillebotis'),
                    'slug' => 'caillebotis',
                ],
                [
                    'name' => "Concrete iron",
                    'description' => "diameter of 6-32 mm in FEe 500 or 400",
                    'image' => asset('assets/img/fer-a-beton2.jpg'),
                    'href' => route('category.show', 'fer-a-betons'),
                    'slug' => 'fer-a-betons',
                ],
                [
                    'name' => "Galva tubes",
                    'description' => "from 20/27 to 102/114 in diameter",
                    'image' => asset('assets/img/tube_galva2.jpg'),
                    'href' => route('category.show', 'tubes-galva'),
                    'slug' => 'tubes-galva',
                ],
            ]
        ],
        'service' => [
            'title' => 'SERVICES',
            'services' => [
                [
                    'title' => "HARDOX WEAR PART",
                    'description' => "Boiler workshop",
                ],
                [
                    'title' => "FOLDING",
                    'description' => "Press brake 1-3 m, Press brake 3-9 m, Press brake 9-12 m",
                ],
                [
                    'title' => "ROLLING",
                    'description' => "",
                ],
                [
                    'title' => "PLASMA CUP",
                    'description' => "Oxy, plasma cuts of 0-20 mm, 20-40mm and more than 40 mm",
                ],
            ]
        ],
        'feature' => [
            'title' => 'Why choose us',
            'description' => "<b>SOCGHAF</b> draws on its 30-year experience to advise and guide its professional and private clients. It is also a boilermaking workshop at the forefront of tech, label, <b>HARDOX WEAR PART</b>.",
            'features' => [
                ["<b>Labeliser HARDOX WEART PLATES.</b>"],
                ["<b>Sheet metal transformation.</b>"],
            ],
        ],
        'personal' => [
            'title' => 'Team',
            'items' => [
				[
					'avatar' => asset('assets/img/dg.jpg'),
					'name' => 'M. Charbel GHOUSSOUB',
					'post' => 'CEO',
				],
				[
					'avatar' => asset('assets/img/team5.jpg'),
					'name' => 'STAFF',
					'post' => 'Administration',
				],
				[
					'avatar' => asset('assets/img/team4.jpg'),
					'name' => 'STAFF',
					'post' => 'Factory',
				],
			],
        ],
        'contact' => [
            'title' => 'Contact us',
            'contact-form' => [
                'name' => 'Name',
                'email' => 'Email',
                'subject' => 'Object',
                'msg' => 'Message',
                'send' => 'Send message',
            ],
        ],
    ],
    'contact' => [
        'title' => "Ask for a quote",
        'form' => [
            'name' => 'Nom',
            'email' => 'Email',
            'subject' => 'Object',
            'phone' => 'Phone',
            'msg' => 'Message',
            'send' => 'Send',
        ],
		'alert' => [
			'success' => 'you submition is pass'
		],
    ],
    'product' => [],
];
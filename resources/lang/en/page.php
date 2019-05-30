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
		'title' => 'Home',
        'about' => [
            'title' => 'ABOUT',
            'origin' => [
                'title' => 'ORIGIN',
                'content' => "<strong>SOCOGHAF</strong> is a company specializing in the distribution of ferrous and non-ferrous steel, founded in 1989 in <strong>Bobo-Dioulasso</strong> in <strong>BURKINA-FASO</strong>.
                        It continues to grow and its notoriety is no longer in doubt in the field of building materials.",
            ],
            'parc' => [
                'title' => "STEEL PARK",
                'content' => "Our steel fleet meets all the needs of professionals in the mining, building and private sector. We are a representation of the brand name <b style = 'color: #a50a2e;'> HARDOX® </b> wear plate.. There is also a tray sheet processing unit.",
            ],
            'label' => [
                'title' => "LABELS",
                'content' => "<b>SOCOGHAF</b> draws on its 30 years of experience to advise and guide its professional and private clients. It is also a state-of-the-art boilermaking workshop, labeled <b style='color: #a50a2e;'>HARDOX® WEARPARTS</b>.",
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
                    'description' => "4 to 50mm in any size",
                    'image' => asset('assets/img/tole_hardox2.jpg'),
                    'href' => route('category.show', 'tole-hardox'),
                    'slug' => 'tole-hardox',
                ],
                [
                    'name' => "Tray plates",
                    'description' => "aluzinc, galva, aluminum, prepainted of 35 to 70/100",
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
                    'description' => "20 to 100 mm",
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
                    'name' => "Duckboard",
                    'description' => "",
                    'image' => asset('assets/img/caillebotis1.jpg'),
                    'href' => route('category.show', 'caillebotis'),
                    'slug' => 'caillebotis',
                ],
                [
                    'name' => "Concrete iron",
                    'description' => "diameter of 6 to 32 mm in FEe 500 or 400",
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
                [
                    'name' => "Full iron",
                    'description' => "round, square, rectangle in any dimension",
                    'image' => asset('assets/img/fer_plat1.jpg'),
                    'href' => route('category.show', 'fer-plein'),
                    'slug' => 'fer-plein',
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
                    'description' => "Roller from 1 to 3 m",
                ],
                [
                    'title' => "PLASMA CUP",
                    'description' => "Oxy cuts, plasma cuts from 0 to 20 mm, from 20 to 40 mm and over 40 mm",
                ],
                [
                    'title' => "DRILLING",
                    'description' => "drilling and milling cnc <500 Hb,> 500 Hb",
                ],
            ]
        ],
        'feature' => [
            'title' => 'Why choose us',
            'description' => "<b>SOCOGHAF</b> draws on its 30 years of experience to advise and guide its professional and private clients. It is also a state-of-the-art boilermaking workshop, labeled <b style='color: #a50a2e;'>HARDOX® WEARPARTS</b>.",
            'features' => [
                ["<b> Wear Sheet Representative <span style = 'color: #a50a2e' class = 'text-capitalize'> HARDOX® WEAR PLATE </span> </b>."],
                ["<b>Sheet metal transformation.</b>"],
            ],
        ],
        'personal' => [
            'title' => 'Team',
            'items' => [
				[
					'avatar' => asset('assets/img/dg.jpg'),
                    'name' => 'Charbel GHOUSSOUB',
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

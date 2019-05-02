<?php
/**
 * Created by PhpStorm.
 * User: A.K.A
 * Date: 27/04/2019
 * Time: 09:25
 */

return [
    'menu' => [
        'home' => 'Accueil',
        'about' => 'A propos',
        'product' => 'Produits',
        'service' => 'Services',
        'team' => 'Personnels',
        'contact' => 'Contact',
        'consult' => 'Demandez un devis',
    ],
    'home-wrapper' => [
        'title' => 'SOCOGHAF',
        'description' => 'Matériaux de construction',
    ],
    'footer' => [
        'contact' => [
            'phone' => 'Téléphone',
            'email' => 'Email',
            'address' => 'Adresse',
        ],
        'copyright' => "<p>Copyright © 2019. Tout droit réservé. Réalisé par <a href=\"#\" target=\"_blank\">RDASERVICE</a></p>"
    ],
    'home' => [
        'about' => [
            'title' => 'A PROPOS',
            'origin' => [
                'title' => 'ORIGINE',
                'content' => "<strong>SOCOGHAF</strong> est une entreprise spécialisée dans la distribution de l'acier ferreux et non ferreux,
                        fondée depuis 1989 à <strong>BOBO-DIOULASSO</strong> au <strong>BURKINA-FASO</strong>.
                        Elle ne cesse de s'accroitre et sa notorieté ne fait plus aucun doute dans le domaine des matériaux de construction.",
            ],
            'parc' => [
                'title' => "PARC D'ACIER",
                'content' => "Notre parc d'acier repond a tous les besoins pour les professionels de l'industrie des mines, 
                        du batiments et des particuliers, disposant d'une unitée de transformation de tôle bac.",
            ],
            'label' => [
                'title' => "LABELS",
                'content' => "<b>Socgohaf</b> s'appuie sur son expérience de 30 ans, pour conseiller et orienter ses clients professionnels et particuliers.
                        C'est en outre un atelier de chaudronnerie à la pointe de la tech, labeliser, <b>HARDOX WEAR PART</b>.",
            ],
        ],
        'product' => [
            'title' => 'PRODUITS',
            'products' => [
                [
                    'name' => "Tôles noires",
                    'description' => "6/10 à 50 mm en toute dimension",
                    'image' => asset('assets/img/tole_noire4.jpg'),
                    'slides' => [],
                    'href' => route('category.show', 'tole-noires'),
                    'slug' => 'tole-noires',
                ],
                [
                    'name' => "Tôles inox",
                    'description' => "7/10 au 10mm en 304L ou 316L",
                    'image' => asset('assets/img/tole_inox4.jpg'),
                    'href' => route('category.show', 'tole-inox'),
                    'slug' => 'tole-inox',
                ],
                [
                    'name' => "Tôles d'usure marque hardox",
                    'description' => "4-50mm en toute dimension",
                    'image' => asset('assets/img/tole_hardox2.jpg'),
                    'href' => route('category.show', 'tole-hardox'),
                    'slug' => 'tole-hardox',
                ],
                [
                    'name' => "Tôles bac",
                    'description' => "aluzinc, galva, aluminium, prelace du 35-70/100",
                    'image' => asset('assets/img/tole_bac1.jpg'),
                    'href' => route('category.show', 'tole-bac'),
                    'slug' => 'tole-bac',
                ],
                [
                    'name' => "Poutrelles",
                    'description' => "U, I, H en toute dimension",
                    'image' => asset('assets/img/poutrelle1.jpg'),
                    'href' => route('category.show', 'poutrelles'),
                    'slug' => 'poutrelles',
                ],
                [
                    'name' => "Fer Plat",
                    'description' => "20-100 mm",
                    'image' => asset('assets/img/fer_plat1.jpg'),
                    'href' => route('category.show', 'fer-plat'),
                    'slug' => 'fer-plat',
                ],
                [
                    'name' => "Tubes",
                    'description' => "rond, carré, rectangle en toute dimension",
                    'image' => asset('assets/img/tubes_rond.jpg'),
                    'href' => route('category.show', 'tubes'),
                    'slug' => 'tubes',
                ],
                [
                    'name' => "Tubes ronds",
                    'description' => "en toute dimension",
                    'image' => asset('assets/img/tube_rond1.jpg'),
                    'href' => route('category.show', 'tubes'),
                    'slug' => 'tubes',
                ],
                [
                    'name' => "Tubes carrées",
                    'description' => "en toute dimension",
                    'image' => asset('assets/img/tubes_carre.jpg'),
                    'href' => route('category.show', 'tubes'),
                    'slug' => 'tubes',
                ],
                [
                    'name' => "Tubes rectangles",
                    'description' => "en toute dimension",
                    'image' => asset('assets/img/tubes_carre_rectangle.jpg'),
                    'href' => route('category.show', 'tubes'),
                    'slug' => 'tubes',
                ],
                [
                    'name' => "Caillebotis",
                    'description' => "Caillebotis",
                    'image' => asset('assets/img/caillebotis1.jpg'),
                    'href' => route('category.show', 'caillebotis'),
                    'slug' => 'caillebotis',
                ],
                [
                    'name' => "Fer à bétons",
                    'description' => "diamètre 6-32 mm en FEe 500 ou 400",
                    'image' => asset('assets/img/fer-a-beton2.jpg'),
                    'href' => route('category.show', 'fer-a-betons'),
                    'slug' => 'fer-a-betons',
                ],
                [
                    'name' => "Tubes Galva",
                    'description' => "20/27 au 102/114 de diamètre",
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
                    'description' => "Atelier de chaudronnerie",
                ],
                [
                    'title' => "PLIAGE",
                    'description' => "Presse plieuse 1-3 m, Presse plieuse 3-9 m, Presse plieuse 9-12 m",
                ],
                [
                    'title' => "ROULAGE",
                    'description' => "",
                ],
                [
                    'title' => "COUPE PLASMA",
                    'description' => "Oxy, des coupes plasma de 0-20 mm , de 20-40mm  et plus de 40 mm",
                ],
            ]
        ],
        'feature' => [
            'title' => 'Pourquoi nous Choisir',
            'description' => "<b>Socgohaf</b> s'appuie sur son expérience de 30ans, pour conseiller et orienter ses clients professionnels et particuliers.
                    C'est en outre un atelier de chaudronnerie à la pointe de la tech, labeliser, <b>HARDOX WEAR PART</b>.",
            'features' => [
                ["<b>Labelliser HARDOX WEART PLATES</b>."],
                ["<b>Transformation de tôle bac</b>."]
//                ["<b>Construction d'un département HARDOX</b>."]
            ],
        ],
        'personal' => [
            'title' => 'Personnels',
            'items' => [
				[
					'avatar' => asset('assets/img/dg.jpg'),
					'name' => 'Mr Charbel GHOUSSOUB',
					'post' => 'Directeur Général',
				],
				[
					'avatar' => asset('assets/img/team5.jpg'),
					'name' => 'STAFF',
					'post' => 'Administration',
				],
				[
					'avatar' => asset('assets/img/team4.jpg'),
					'name' => 'STAFF',
					'post' => 'Usine',
				],
			],
        ],
        'contact' => [
            'title' => 'Contactez nous',
            'contact-form' => [
                'name' => 'Nom',
                'email' => 'Email',
                'subject' => 'Objet',
                'msg' => 'Message',
                'send' => 'Envoyer message',
            ],
        ],
    ],
    'contact' => [
        'title' => "Demandez un devis",
        'form' => [
            'name' => 'Nom',
            'email' => 'Email',
            'subject' => 'Objet',
            'phone' => 'Téléphone',
            'msg' => 'Message',
            'send' => 'Soumettre',
        ],
		'alert' => [
			'success' => 'Votres devis a été envoyer'
		],
    ],
    'product' => [],
];
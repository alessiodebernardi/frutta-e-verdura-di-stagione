<?php

$isProd = $_SERVER["HTTP_HOST"] == "www.fruttaeverduradistagione.com";
$imageBaseUrl = $isProd ? "https://www.fruttaeverduradistagione.com/" : "./";

$months = [
    "Gennaio",
    "Febbraio",
    "Marzo",
    "Aprile",
    "Maggio",
    "Giugno",
    "Luglio",
    "Agosto",
    "Settembre",
    "Ottobre",
    "Novembre",
    "Dicembre"
];

$data = [
    "1" => [
        "name" => $months[0],
        "frutta" => [
            "Arance","Clementine","Kiwi","Limoni","Mandarini","Mele","Pere","Pompelmi"
        ],
        "verdura" => [
            "Carciofi","Broccoli","Cavolfiori","Finocchi","Patate","Rape","Spinaci","Zucche"
        ]
    ],
    "2" => [
        "name" => $months[1],
        "frutta" => [
            "Arance","Clementine","Kiwi","Limoni","Mandarini","Mele","Pere","Pompelmi"
        ],
        "verdura" => [
            "Carciofi","Broccoli","Cavolfiori","Finocchi","Patate","Rape","Spinaci","Zucche"
        ]
    ],
    "3" => [
        "name" => "Marzo",
        "frutta" => [
            "Arance","Kiwi","Limoni","Mele","Pere","Pompelmi"
        ],
        "verdura" => [
            "Asparagi","Carciofi","Broccoli","Cavolfiori","Cipolle","Finocchi","Insalate","Patate","Rape","Spinaci"
        ]
    ],
    "4" => [
        "name" => "Aprile",
        "frutta" => [
            "Arance","Fragole","Kiwi","Limoni","Mele","Pere","Pompelmi"
        ],
        "verdura" => [
            "Asparagi","Carciofi","Cavolfiori","Cipolle","Finocchi","Insalate","Patate","Ravanelli","Spinaci"
        ]
    ],
    "5" => [
        "name" => "Maggio",
        "frutta" => [
            "Ciliegie","Fragole","Kiwi","Lamponi","Mele","Meloni","Pere","Pompelmi"
        ],
        "verdura" => [
            "Asparagi","Cipolle","Fagioli","Fagiolini","Fave","Finocchi","Insalate","Patate","Piselli","Pomodori","Ravanelli","Spinaci"
        ]
    ],
    "6" => [
        "name" => "Giugno",
        "frutta" => [
            "Albicocche","Amarene","Ciliegie","Fichi","Fragole","Lamponi","Meloni","Pesche"
        ],
        "verdura" => [
            "Asparagi","Carciofi","Cetrioli","Fagioli","Fagiolini","Fave","Insalate","Melanzane","Patate","Peperoni","Piselli","Pomodori","Ravanelli","Zucchine"
        ]
    ],
    "7" => [
        "name" => "Luglio",
        "frutta" => [
            "Albicocche","Amarene","Angurie","Ciliegie","Fichi","Fragole","Lamponi","Meloni","Mirtilli","Pesche","Prugne"
        ],
        "verdura" => [
            "Cetrioli","Fagioli","Fagiolini","Fave","Insalate","Melanzane","Patate","Peperoni","Pomodori","Ravanelli","Zucchine"
        ]
    ],
    "8" => [
        "name" => "Agosto",
        "frutta" => [
            "Angurie","Fichi","Fragole","Lamponi","Mele","Meloni","Mirtilli","Pere","Pesche","Prugne","Uva"
        ],
        "verdura" => [
            "Cetrioli","Fagioli","Fagiolini","Insalate","Melanzane","Patate","Peperoni","Pomodori","Ravanelli","Zucche","Zucchine"
        ]
    ],
    "9" => [
        "name" => "Settembre",
        "frutta" => [
            "Fichi","Lamponi","Mele","Meloni","Mirtilli","Pere","Pesche","Prugne","Uva"
        ],
        "verdura" => [
            "Broccoli","Cetrioli","Fagioli","Fagiolini","Insalate","Melanzane","Patate","Peperoni","Pomodori","Ravanelli","Spinaci","Zucche","Zucchine"
        ]
    ],
    "10" => [
        "name" => "Ottobre",
        "frutta" => [
            "Castagne","Clementine","Cachi","Lamponi","Limoni","Mele","Pere","Uva"
        ],
        "verdura" => [
            "Broccoli","Cavolfiori","Finocchi","Insalate","Melanzane","Patate","Peperoni","Rape","Ravanelli","Spinaci","Zucche"
        ]
    ],
    "11" => [
        "name" => "Novembre",
        "frutta" => [
            "Arance","Castagne","Clementine","Cachi","Kiwi","Limoni","Mandarini","Mele","Pere","Pompelmi","Uva"
        ],
        "verdura" => [
            "Broccoli","Cavolfiori","Finocchi","Insalate","Patate","Rape","Spinaci","Zucche"
        ]
    ],
    "12" => [
        "name" => "Dicembre",
        "frutta" => [
            "Arance","Castagne","Clementine","Cachi","Kiwi","Limoni","Mandarini","Mele","Pere","Pompelmi","Uva"
        ],
        "verdura" => [
            "Broccoli","Cavolfiori","Finocchi","Insalate","Patate","Rape","Spinaci","Zucche"
        ]
    ],
];

$verduraTuttoAnno = [
    "Aglio", "Bietole", "Carote", "Cavoli", "Radicchio", "Sedano"
];

$fruttaTuttoAnno = [
    "Banane"
];

$fruits = [
    "Albicocche" => [
        "image" => "assets/img/fruit/apricot.jpeg"
    ],
    "Amarene" => [
        "image" => "assets/img/fruit/sour_cherries.jpg"
    ],
    "Angurie" => [
        "image" => "assets/img/fruit/watermelon.jpeg"
    ],
    "Banane" => [
        "image" => "assets/img/fruit/banana.jpg"
    ],
    "Ciliegie" => [
        "image" => "assets/img/fruit/cherries.jpeg"
    ],
    "Fichi" => [
        "image" => "assets/img/fruit/figs.jpg"
    ],
    "Fragole" => [
        "image" => "assets/img/fruit/strawberries.jpeg"
    ],
    "Lamponi" => [
        "image" => "assets/img/fruit/Raspberries.jpeg"
    ],
    "Meloni" => [
        "image" => "assets/img/fruit/melons.jpg"
    ],
    "Mirtilli" => [
        "image" => "assets/img/fruit/blueberries.jpeg"
    ],
    "Pesche" => [
        "image" => "assets/img/fruit/peaches.jpeg"
    ],
    "Prugne" => [
        "image" => "assets/img/fruit/Plums.jpeg"
    ],
    "Mele" => [
        "image" => "assets/img/fruit/apples.jpeg"
    ],
    "Pere" => [
        "image" => "assets/img/fruit/pears.jpeg"
    ],
    "Uva" => [
        "image" => "assets/img/fruit/grapes.jpeg"
    ],
    "Castagne" => [
        "image" => "assets/img/fruit/chestnuts.jpg"
    ],
    "Clementine" => [
        "image" => "assets/img/fruit/clementines.jpeg"
    ],
    "Limoni" => [
        "image" => "assets/img/fruit/lemons.jpeg"
    ],
    "Arance" => [
        "image" => "assets/img/fruit/oranges.jpeg"
    ],
    "Kiwi" => [
        "image" => "assets/img/fruit/kiwi.jpeg"
    ],
    "Mandarini" => [
        "image" => "assets/img/fruit/tangerines.jpg"
    ],
    "Pompelmi" => [
        "image" => "assets/img/fruit/grapefruits.jpeg"
    ],
    "Cachi" => [
        "image" => "assets/img/fruit/kaki.jpg"
    ]
];

$vegetables = [
    "Aglio" => [
        "image" => "assets/img/vegetable/Garlic.jpeg"
    ],
    "Bietole" => [
        "image" => "assets/img/vegetable/beetroot.jpg"
    ],
    "Carote" => [
        "image" => "assets/img/vegetable/carrots.jpeg"
    ],
    "Cavoli" => [
        "image" => "assets/img/vegetable/cabbage.jpeg"
    ],
    "Cetrioli" => [
        "image" => "assets/img/vegetable/Cucumbers.jpg"
    ],
    "Fagioli" => [
        "image" => "assets/img/vegetable/beans.jpeg"
    ],
    "Fagiolini" => [
        "image" => "assets/img/vegetable/Green_beans.jpeg"
    ],
    "Fave" => [
        "image" => "assets/img/vegetable/fava_beans.jpg"
    ],
    "Insalate" => [
        "image" => "assets/img/vegetable/Salads.jpeg"
    ],
    "Melanzane" => [
        "image" => "assets/img/vegetable/eggplant.jpg"
    ],
    "Patate" => [
        "image" => "assets/img/vegetable/Potatoes.jpeg"
    ],
    "Peperoni" => [
        "image" => "assets/img/vegetable/peppers.jpeg"
    ],
    "Pomodori" => [
        "image" => "assets/img/vegetable/tomatoes.jpg"
    ],
    "Radicchio" => [
        "image" => "assets/img/vegetable/chicory.jpg"
    ],
    "Ravanelli" => [
        "image" => "assets/img/vegetable/radishes.jpeg"
    ],
    "Sedano" => [
        "image" => "assets/img/vegetable/Celery.jpg"
    ],
    "Zucchine" => [
        "image" => "assets/img/vegetable/Zucchini.jpeg"
    ],
    "Carciofi" => [
        "image" => "assets/img/vegetable/artichokes.jpeg"
    ],
    "Broccoli" => [
        "image" => "assets/img/vegetable/broccoli.jpeg"
    ],
    "Cavolfiori" => [
        "image" => "assets/img/vegetable/cauliflower.jpeg"
    ],
    "Finocchi" => [
        "image" => "assets/img/vegetable/fennel.jpeg"
    ],
    "Zucche" => [
        "image" => "assets/img/vegetable/pumpkin.jpeg"
    ],
    "Asparagi" => [
        "image" => "assets/img/vegetable/asparagus.jpeg"
    ],
    "Cipolle" => [
        "image" => "assets/img/vegetable/onions.jpeg"
    ],
    "Piselli" => [
        "image" => "assets/img/vegetable/peas.jpeg"
    ],
    "Spinaci" => [
        "image" => "assets/img/vegetable/spinach.jpg"
    ],
    "Rape" => [
        "image" => "assets/img/vegetable/turnips.jpg"
    ]
];

$currentMonth = date("n");

$googleAnalyticsCode = "UA-xxxxxxx-x";
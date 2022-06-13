<?php

namespace Config;

const TEMPLATES = [
    "home" => "templates/accueil.php",
    "devisEnLigne" => "templates/devis_en_ligne.php",
    "peintureVille" => "templates/peintureVille.php",
    "carrelageVille" => "templates/carrelageVille.php",
    "plomberieVille" => "templates/plomberieVille.php",
    "notFound" => "templates/not_found.html"
];


const VILLES = [
    "lille" => [
        "codePostal" => "59000", "nom" => "Lille"
    ],
    "paris" => [
        "codePostal" => "78000", "nom" => "Paris"
    ]
];


const FROM_MAIL = ["nom" => "Uber Dépannage", "email" => "uber.artisans@gmail.com"];

const MAILS_LIST = [
    [
        "nom" => "Victor Dehem", "email" => "dehem.victor.pro@gmail.com"
    ],
    [
        "nom" => "Uber Artisan", "email" => "uber.artisans@gmail.com"
    ]
];



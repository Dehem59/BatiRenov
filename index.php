<?php

namespace Index;

require_once "src/views/index.php";
require_once "config.php";
require __DIR__ . '/vendor/autoload.php';

use View\ContactView;
use View\PlomberieVilleView;
use const Config\VILLES;
use View\HomeView;
use View\CarrelageVilleView;
use View\PeintureVilleView;
use View\NotFoundView;


$ROUTES = [
    [
        "pattern" => "/^\/carrelage\/carreleur-(?<ville>[\w\-]+)\/$/", "class" => CarrelageVilleView::class
    ],
    [
        "pattern" => "/^\/peinture\/peintre-(?<ville>[\w\-]+)\/$/", "class" => PeintureVilleView::class
    ],
    [
        "pattern" => "/^\/plomberie\/plombier-(?<ville>[\w\-]+)\/$/", "class" => PlomberieVilleView::class
    ],
    [
        "pattern" => "/^\/plomberie\/urgence-(?<ville>[\w\-]+)\/$/", "class" => PeintureVilleView::class
    ],
    [
        "pattern" => "/^\/plomberie\/debouchage-(?<ville>[\w\-]+)\/$/", "class" => PeintureVilleView::class
    ],
    [
        "pattern" => "/^\/serrurerie\/serrurier-(?<ville>[\w\-]+)\/$/", "class" => PeintureVilleView::class
    ],
    [
        "pattern" => "/contact/", "class" => ContactView::class
    ]
];

//use Latitude\QueryBuilder\Engine\CommonEngine;
//use Latitude\QueryBuilder\QueryFactory;
//use function Latitude\QueryBuilder\field;
//$factory = new QueryFactory(new CommonEngine());
//$query = $factory
//    ->select()
//    ->from('users')
//    ->where(field('id')->gt(1))
//    ->orWhere(field('login_at')->isNull())
//    ->orWhere(field('is_inactive')->eq(1))
//    ->compile();
//
//echo($query->sql());

$url = explode("?gclid", $_SERVER["REQUEST_URI"])[0];

if ($url == "" || $url == "/"){
    $homeView = new HomeView();
    $homeView->render();
}

foreach ($ROUTES as $index => $information){
    $matches = [];
    preg_match($information["pattern"], $url, $matches);
    if (count($matches) > 0){
        if (array_key_exists("ville", $matches)){
            $concernedCity = $matches["ville"];
            if (array_key_exists($concernedCity, VILLES)){
                $view = new $information["class"](VILLES[$concernedCity]);
                $view->render();
            } else{
                $notFound = new NotFoundView();
                $notFound->render();
            }
        }
        else{
            $view = new $information["class"];
            $view->render();
        }
    }
}
$notFound = new NotFoundView();
$notFound->render();


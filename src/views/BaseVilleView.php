<?php

namespace View;
include_once "BaseView.php";
include_once "src/core/controllers/VilleFileController.php";

use core\controllers\VilleFileController;
use const Config\TEMPLATES;
use const Config\VILLES;


class BaseVilleView implements BaseViewInterface
{

    public array $cityInformation = [];
    protected string $templateKeyName = "";
    protected VilleFileController $controller;

    public function __construct($villeSlug){
        $this->controller = new VilleFileController(VILLES);
        try{
            $this->cityInformation = $this->controller->getVilleBySlug($villeSlug);
        }
        catch (\Exception $ex){
            exit();
        }
        return $this;
    }

    public function render()
    {
        $codePostal = $this->cityInformation["code_postal"];
        $ville = $this->cityInformation["ville"];
        require_once TEMPLATES[$this->templateKeyName];
        exit();
    }
}
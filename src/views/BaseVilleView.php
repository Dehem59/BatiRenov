<?php

namespace View;
include_once "BaseView.php";
use const Config\TEMPLATES;


class BaseVilleView implements BaseViewInterface
{

    public array $cityInformation = [];
    protected string $templateKeyName = "";

    public function __construct($cityInformation){
        $this->cityInformation = $cityInformation;
        return $this;
    }

    public function render()
    {
        $codePostal = $this->cityInformation["codePostal"];
        $ville = $this->cityInformation["nom"];
        require_once TEMPLATES[$this->templateKeyName];
        exit();
    }
}
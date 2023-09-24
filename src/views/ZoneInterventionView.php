<?php

namespace View;
include_once "BaseView.php";
use const Config\TEMPLATES;

class ZoneInterventionView implements BaseViewInterface
{

    function render(){
        require_once(TEMPLATES["zone"]);
        exit();
    }
}
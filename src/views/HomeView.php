<?php

namespace View;
include_once "BaseView.php";
use const Config\TEMPLATES;


class HomeView implements BaseViewInterface
{

    function render(){
        require_once(TEMPLATES["home"]);
        exit();
    }

}
<?php

namespace View;
include_once "BaseView.php";
use const Config\TEMPLATES;

class NotFoundView implements BaseViewInterface
{

    function render(){
        http_response_code(404);
        require_once(TEMPLATES["notFound"]);
        exit();
    }
}
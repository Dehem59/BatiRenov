<?php

namespace View;
include_once "BaseView.php";

use View\BaseViewInterface;
use const Config\TEMPLATES;


class DevisEnLigneView implements BaseViewInterface
{
    public function render()
    {
        require_once TEMPLATES["devisEnLigne"];
        exit();
    }
}
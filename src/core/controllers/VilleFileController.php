<?php

namespace core\controllers;

include_once "config.php";
include_once "src/core/controllers/BaseControllerVille.php";
use Exception;

use core\controllers\BaseControllerVille;
use const Config\VILLES;

class VilleFileController implements BaseControllerVille
{
    private array $villes;
    protected VilleFileController $_instance;

    public function __construct($villes)
    {
        $this->villes = $villes;
        $this->_instance = $this;
    }

    /**
     * @throws Exception
     */
    public function getVilleBySlug($slugVille){
         if (array_key_exists($slugVille, $this->villes)){
             return $this->villes[$slugVille];
         }
         throw new Exception("$slugVille does not exists");
    }


}



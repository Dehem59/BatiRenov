<?php

namespace Core;

require_once "CommonMailSender.php";


class FormMailSender extends CommonMailSender
{
    protected string $baseMessage = "Nouveau Prospect du Formulaire de Contact";
    protected string $sujet = "Nouveau Prospect";
    protected array $notRequired = [
        "email"
    ];

    public function validate($parameters): bool
    {
        foreach ($parameters as $name => $value){
            if (!in_array($name, $this->notRequired) && ($value == "" || $value == null)){
                return False;
            }
        }
        return True;
    }
}
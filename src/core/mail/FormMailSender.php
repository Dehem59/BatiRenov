<?php

namespace Core;

require_once "CommonMailSender.php";


class FormMailSender extends CommonMailSender
{
    protected string $baseMessage = "Nouveau Prospect du Formulaire de Contact";
    protected string $sujet = "Nouveau Prospect";

    public function validate($parameters): bool
    {
        foreach ($parameters as $name => $value){
            if ($value == "" || $value == null){
                return False;
            }
        }
        return True;
    }
}
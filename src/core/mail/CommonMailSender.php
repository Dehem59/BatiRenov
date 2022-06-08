<?php

namespace Core;
include_once "config.php";
include_once "BaseMailSender.php";
use const Config\{MAILS_LIST, FROM_MAIL};


class CommonMailSender implements BaseMailSender
{

    protected string $baseMessage = "";
    protected string $sujet = "";

    public function prepareMailTemplate($parameters): string
    {
        $html = <<<EOD
                <h2>$this->baseMessage</h2>
                <ul>
        EOD;

        foreach ($parameters as $paramName => $value){
            $html .= "<li>$paramName: $value</li>";
        }
        return $html."</ul>";
    }

    static function prepareHeaders(): array {
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // Additional headers
        $headers .= 'From: '.FROM_MAIL["nom"].'<'.FROM_MAIL["email"].'>' . "\r\n";
        $to = "";
        foreach (MAILS_LIST as $index => $info){
            if (array_key_last(MAILS_LIST) == $index){
                $to .= $info["nom"] . '<' . $info["email"] . '>';
            }
            else{
                $to .= $info["nom"] . '<' . $info["email"] . '>,';
            }
        }
        return [
            "headers" => $headers, "to" => $to
        ];
    }

    protected function getSubject(): string {
        return $this->sujet;
    }

    public function sendMail($parameters)
    {
        if ($this->validate($parameters)){
            $mailElements = $this->prepareHeaders();
            $mailTemplate = $this->prepareMailTemplate($parameters);
            $sujet = $this->getSubject();
            if (mail($mailElements["to"], $sujet, $mailTemplate, $mailElements["headers"])){
                return True;
            }
            else{
                return False;
            }
        }
        return False;
    }

    public function validate($parameters)
    {
        // TODO: Implement validate() method.
        return True;
    }
}
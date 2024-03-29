<?php

namespace Core;
include_once "config.php";
include_once "BaseMailSender.php";

use const Config\{MAIL_TO, MAILS_LIST, FROM_MAIL};


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
        $html .= "</ul>";
        return $html;
    }

    static function prepareHeaders(): array {
        $headers = "From: Uber Artisan<uber.artisans@gmail.com>\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 

        return [
            "headers" => $headers, "to" => "uber.artisans@gmail.com"
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
            if (mail($mailElements["to"], $sujet, $mailTemplate, $mailElements["info"])){
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
<?php

namespace View;
require_once "src/core/mail/FormMailSender.php";
require_once "BaseAPIView.php";

use Core\FormMailSender;

class ContactView extends BaseAPIView
{

    public function render()
    {
        parent::render();
        if (ContactView::isAuthorized()){
            $contact = new FormMailSender();
            $params = [
                "nom" => $_POST["nom"], "telephone" => $_POST["tel"], "email" => $_POST["email"],
                "message" => $_POST["message"], "url" => $_POST["url"]
            ];
            $result = $contact->sendMail($params);
            if ($result){
                echo json_encode([
                    "detail" => "Le mail a bien été envoyé"
                ]);
            }
            else{
                http_response_code(400);
                echo json_encode([
                    "detail" => "Le mail n'a pas été envoyé"
                ]);
            }

        }
        else {
            http_response_code(403);
            echo json_encode([
                "detail" => "Forbidden"
            ]);
        }
        exit();
    }
}
<?php

namespace Core;

interface BaseMailSender
{

    function prepareMailTemplate($parameters);
    static function prepareHeaders();
    public function sendMail($parameters);
    function validate($parameters);
}
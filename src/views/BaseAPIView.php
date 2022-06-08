<?php

namespace View;


class BaseAPIView implements BaseViewInterface
{

    static function isAjax(): bool{
        return !empty($_SERVER['HTTP_X_REQUESTED_WITH'])
            && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';

    }

    static function isSameOrigin(): bool{
        $myDomain       = $_SERVER['HTTP_HOST'];
        $requestsSource = $_SERVER['HTTP_REFERER'];
        return parse_url($myDomain, PHP_URL_HOST) == parse_url($requestsSource, PHP_URL_HOST);
    }

    static function isAuthorized(): bool{
        return BaseAPIView::isAjax() && BaseAPIView::isSameOrigin();
    }

    public function setHeaders(){
        header('Content-Type: application/json; charset=utf-8');
    }

    public function render()
    {
        $this->setHeaders();
    }

}
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
        $requestsSource = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);
        return $myDomain == $requestsSource;
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
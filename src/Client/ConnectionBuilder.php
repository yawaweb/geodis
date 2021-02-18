<?php


namespace Geodis\Client;


class ConnectionBuilder
{
    public $login;
    public $secretKey;
    public $lang;

    public function __construct($login, $secretKey, $lang = 'fr')
    {
        $this->login    = $login;
        $this->secretKey = $secretKey;
        $this->lang = $lang;
    }
}
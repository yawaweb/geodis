<?php


namespace Geodis\Client;


class ConnectionBuilder
{
    public $login;
    public $secretKey;
    public $sandbox;
    public $lang;

    public function __construct($login, $secretKey, $sandbox = false, $lang = 'fr')
    {
        $this->login    = $login;
        $this->secretKey = $secretKey;
        $this->sandbox = $sandbox;
        $this->lang = $lang;
    }
}

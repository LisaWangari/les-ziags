<?php

require_once '../model/Client.php';

/**
 * Created by PhpStorm.
 * User: evan_suau
 */
class LoginController
{
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }
}
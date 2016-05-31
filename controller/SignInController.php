<?php

/**
 * Created by PhpStorm.
 * User: evan_suau
 */
class SignInController
{
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    // Displays details on client
    public function client($username)
    {
        $client_infos = $this->client->get_client_info($username);
        return $client_infos;
    }

    public function client_login($username, $password)
    {
        if ($this->client->get_client_id($username, $password)->rowCount() == 1)
        {
            $_SESSION['login_user'] = $username;

            // Set cookie to last 1 year
            setcookie('username', $username, time()+60*60*24*365);
            setcookie('password', md5($password), time()+60*60*24*365);
            header("location: /account/profile");
        }
        else
        {
            header("location: /403");
        }
    }

}
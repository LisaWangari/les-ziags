<?php

require_once 'Model.php';

/**
 * Created by PhpStorm.
 * User: evan_suau
 */
class Client extends Model
{
    public function get_client_info($username)
    {
        $sql = "SELECT * FROM `client` WHERE `client_clientlogin` = '$username'";
        $client_info = $this->execute_request($sql);
        return $client_info;
    }

    public function client_login($username, $password)
    {
        if ($this->get_client_id($username, $password)->rowCount() == 1)
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
    
    private function get_client_id($username, $password)
    {
        $sql = "SELECT `client_idclient` FROM `client` WHERE `client_clientlogin` = '$username' AND `client_clientpass` = '$password'";
        $client_id = $this->execute_request($sql);
        return $client_id;
    }
}
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
    
    public function get_client_id($username, $password)
    {
        $sql = "SELECT `client_idclient` FROM `client` WHERE `client_clientlogin` = '$username' AND `client_clientpass` = '$password'";
        $client_id = $this->execute_request($sql);
        return $client_id;
    }
}
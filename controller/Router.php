<?php

require_once 'LoginController.php';
require_once '../view/View.php';

/**
 * Created by PhpStorm.
 * User: evan_suau
 */
class Router
{
    private $ctrl_login;

    public function __construct()
    {
        $this->ctrl_login = new LoginController();
    }

    // Traite une requête entrante
    public function router_request()
    {
        try
        {
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                
            }
        }
        catch (Exception $e)
        {
            $this->error($e->getMessage());
        }
    }

    // Display error page
    private function error($msgErreur)
    {
        $vue = new View("Erreur");
        $vue->generate(array('msgErreur' => $msgErreur));
    }
}
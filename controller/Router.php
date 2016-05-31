<?php

require_once 'SignInController.php';
require_once '../view/View.php';

/**
 * Created by PhpStorm.
 * User: evan_suau
 */
class Router
{
    private $ctrl_signin;

    public function __construct()
    {
        $this->ctrl_signin = new SignInController();
    }

    // Compute an incoming request
    public function router_request()
    {
        try
        {
            if (isset($_POST['username']) and isset($_POST['password']))
            {
                $this->ctrl_signin->client_login($_POST['username'], $_POST['password']);
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
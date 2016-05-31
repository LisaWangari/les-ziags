<?php

require_once 'model/Model.php';
require_once 'model/Client.php';
require_once 'controller/SignInController.php';
require_once 'controller/Router.php';
require_once 'view/loginView.php';

$ctrl = new Router();
$ctrl->router_request();
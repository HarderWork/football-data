<?php

namespace FootballData\Controller;

use App\Controller\AppController as BaseController;

class AppController extends BaseController
{
    public function initialize()
    {
        $this->loadComponent('RequestHandler');
    }
}

<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin(
    'HarderWork/FootballData',
    ['path' => '/football-data'],
    function (RouteBuilder $routes) {
        $routes->extensions(['json', 'xml']);
        $routes->fallbacks(DashedRoute::class);
    }
);

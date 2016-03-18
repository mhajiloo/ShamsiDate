<?php
use Cake\Routing\Router;

Router::plugin(
    'ShamsiDate',
    ['path' => '/shamsi-date'],
    function ($routes) {
        $routes->fallbacks('DashedRoute');
    }
);

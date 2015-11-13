<?php
use Cake\Routing\Router;

Router::plugin('Fyluploader', function ($routes) {
    $routes->fallbacks('DashedRoute');
});

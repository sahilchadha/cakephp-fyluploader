<?php
use Cake\Routing\Router;

Router::plugin('cakephp-fyluploader', function ($routes) {
    $routes->fallbacks('DashedRoute');
});

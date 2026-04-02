<?php

/**
 * @author Julius Derigs
 * @version 1.0.0
 */

$routes[] = ['BaseController', 'welcome'];

$routes['users'] = ['Users', 'index'];
$routes['create-user'] = ['Users', 'create'];

return $routes;
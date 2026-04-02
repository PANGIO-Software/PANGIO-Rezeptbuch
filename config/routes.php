<?php

/**
 * @author Julius Derigs
 * @version 1.0.0
 */

$routes[] = ['BaseController', 'welcome'];

/**
 * @uses Users::index()
 */
$routes['users'] = ['Users', 'index'];

/**
 * @uses Users::create()
 */
$routes['create-user'] = ['Users', 'create'];

/**
 * @uses Users::show()
 */
$routes['show-user/:id'] = ['Users', 'show'];

return $routes;
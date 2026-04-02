<?php

/**
 * @author Julius Derigs
 * @version 1.0.0
 */

/**
 * @uses StaticPages::login()
 */
$routes[] = ['StaticPages', 'login'];

/**
 * @uses StaticPages::login()
 */
$routes['login'] = ['StaticPages', 'login'];

/**
 * @uses StaticPages::logout()
 */
$routes['logout'] = ['StaticPages', 'logout'];

/**
 * @uses StaticPages::profile()
 */
$routes['profile'] = ['StaticPages', 'profile'];

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

/**
 * @uses Users::update()
 */
$routes['update-user/:id'] = ['Users', 'update'];

/**
 * @uses Users::delete()
 */
$routes['delete-user/:id'] = ['Users', 'delete'];

return $routes;
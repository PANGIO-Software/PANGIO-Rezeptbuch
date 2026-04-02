<?php
if (!function_exists('redirectIfNotLoggedIn')) {
    function redirectIfNotLoggedIn() :void {
        if (empty($_SESSION['user'])) {
            redirect('login');
        }
    }
}

if (!function_exists('redirectIfNotAdministrator')) {
    function redirectIfNotAdministrator() :void {
        if (!$_SESSION['user']['administrator']) {
            redirect('recipes');
        }
    }
}

if (!function_exists('isAdministrator')) {
    function isAdministrator() :bool {
        return $_SESSION['user']['administrator'];
    }
}
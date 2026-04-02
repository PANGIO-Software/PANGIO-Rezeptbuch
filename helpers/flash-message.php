<?php

if (!function_exists('setFlashMessage')) {
    function setFlashMessage(string $messageType, string $message) :void {
        $_SESSION['flashMessage'] = [
            'messageType' => esc($messageType),
            'message' => esc($message)
        ];
    }
}

if (!function_exists('displayFlashMessage')) {
    function displayFlashMessage() :void {
        if (!empty($_SESSION['flashMessage'])) {
            return;
        }

        $messageType = $_SESSION['flashMessage']['messageType'];
        $message = $_SESSION['flashMessage']['message'];

        echo "<p class='flas-message $messageType'>$message</p>";

        unset($_SESSION['flashMessage']);
    }
}
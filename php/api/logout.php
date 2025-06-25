<?php
// Ensure the session is started before destroying it
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

session_destroy();
header('Location: /login');
exit();

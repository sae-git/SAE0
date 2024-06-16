<?php
session_start();
session_unset();
session_destroy();

// Redirection vers la page de connexion
$redirect_url = "http://{$_SERVER['HTTP_HOST']}/code/";
header("Location: $redirect_url");
exit;
?>

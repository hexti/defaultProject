<?php

session_start();

$url_browser = $_SERVER['REQUEST_URI'];

$url_public = array(
	"/",
	"/login"
);

//Segurança no acesso direto a URL que necessita está logado.
if(!in_array($url_browser, $url_public) && empty($_SESSION['id'])){
	header('Location: /');
}
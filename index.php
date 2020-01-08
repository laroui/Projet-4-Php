<?php 
require_once('controllers/router.php');
require_once('public/contenu/header.php');

$router = new Router();
$router->routeReq();

require_once('public/contenu/footer.php');
?>
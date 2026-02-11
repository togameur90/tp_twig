<?php
require_once(__DIR__."/include/init_twig.php");

$produits = json_decode(file_get_contents("json/produits.json"), true);
$twig = init_twig();
$template = $twig->load("accueil.twig");
echo $template->render(["produits" => $produits]);
?>
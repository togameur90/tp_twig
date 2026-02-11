<?php
require_once(__DIR__."/include/init_twig.php");

$employes = json_decode(file_get_contents("json/employes.json"), true);
$twig = init_twig();
$template = $twig->load("contact.twig");
echo $template->render(["employes" => $employes]);
?>
<?php
require_once('../model/bbdd.php');


$nombre = "oskr";

$cargo  = "programador";

echo $twig->render('principal.twig', compact('nombre', 'cargo'));


?>
<?php 
require_once 'Cliente.php';

$cliente = new Cliente(NULL, "Qualquer");

print_r($cliente->getRequireds());

 ?>
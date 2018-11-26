<?php
require $_SERVER['DOCUMENT_ROOT'] . '/app/DAO.php';

$c = new DAO("commnet");
if (isset($_GET['idVivienda']))
echo json_encode($c->getBy('idVivienda',$_GET['idVivienda']));
else
    header('location: listado.php');
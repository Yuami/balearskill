<?php
require $_SERVER['DOCUMENT_ROOT'] . '/app/DAO.php';

$v = new DAO("vivienda");
echo json_encode($v->getAll());
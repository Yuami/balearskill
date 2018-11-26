<?php
require $_SERVER['DOCUMENT_ROOT'].'/app/DAO.php';

$v = new DAO("vivienda");
if (isset($_GET['id']))
echo json_encode($v->getById($_GET['id']));
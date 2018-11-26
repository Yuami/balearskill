<?php
require $_SERVER['DOCUMENT_ROOT'] . "app/helpers/Mail.php";

if (isset($_POST['email']) && isset($_POST['message']) && isset($_POST['who'])) {
    $to = "skills01@balearskills17.org";
    $subject = $_POST['email'];
    $subject .= " - (" . $_POST['who'] . ")";
    $message = $_POST['message'];
    $m = new Mail($to, $subject, $message);
} else {
    throw new \http\Exception\InvalidArgumentException("Falta información");
}
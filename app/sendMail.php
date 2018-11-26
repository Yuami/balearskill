<?php
require $_SERVER['DOCUMENT_ROOT'] . "app/helpers/Mail.php";

if (isset($_POST['subject']) && isset($_POST['message']) && isset($_POST['how'])) {
    $to = "skills01@balearskills17.org";
    $subject = $_POST['subject'];
    $subject .= " - (" . $_POST['how'] . ")";
    $message = $_POST['message'];
    $m = new Mail($to, $subject, $message);
} else {
    throw new \http\Exception\InvalidArgumentException("Falta información");
}
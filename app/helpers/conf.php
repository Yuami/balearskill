<?php
$config = Config::singleton();

$config->set('dbhost', 'localhost');
$config->set('dbname', 'dbname');
$config->set('dbuser', 'root');
$config->set('dbpass', '');

password_hash('password', PASSWORD_ARGON2I);
password_verify('pass', 'pass-hash');
hash('SHA256','string');
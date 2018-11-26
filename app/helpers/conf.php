<?php
$config = Config::singleton();

//$config->set('dbhost', 'bbdd.balearskills17.org');
//$config->set('dbname', 'ddb118661');
//$config->set('dbuser', 'ddb118661');
//$config->set('dbpass', 'u"b268yy');

$config->set('dbhost', 'localhost');
$config->set('dbname', 'bSkills');
$config->set('dbuser', 'root');
$config->set('dbpass', 'skills2018');

password_hash('password', PASSWORD_ARGON2I);
password_verify('pass', 'pass-hash');
hash('SHA256','string');
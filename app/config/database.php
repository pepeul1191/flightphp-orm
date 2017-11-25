<?php

require_once 'app/vendor/j4mie/idiorm/idiorm.php';
require_once 'app/vendor/j4mie/paris/paris.php';

ORM::configure('sqlite:app/db/db_demo.db');
ORM::configure('return_result_sets', true);
ORM::configure('error_mode', PDO::ERRMODE_WARNING);

?>
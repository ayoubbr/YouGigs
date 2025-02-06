<?php

use App\Core\Database;

require '../vendor/autoload.php';

$router = require '../src/Routes/index.php';

try {

    Database::get()->connect();

    echo 'A connection to the PostgreSQL database sever has been established successfully.';
} catch (PDOException $e) {

    echo $e->getMessage();
}

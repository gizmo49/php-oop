<?php

require 'Core/Database/Connection.php';
require 'Core/Database/QueryBuilder.php';
require 'Core/Router.php';
require 'Core/Request.php';

$config = require './config.php';

//die(var_dump($config));
$pdo = Connection::Make($config['database']);
return new QueryBuilder($pdo);
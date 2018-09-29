<?php

$tasks = $database->selectAll('todos');
require 'Views/index.view.php';
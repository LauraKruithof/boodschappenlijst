<?php

$router->get('', 'controllers/index.php');
$router->get('groceries/create', 'controllers/create.php');
$router->post('names', 'controllers/add-groceries.php');
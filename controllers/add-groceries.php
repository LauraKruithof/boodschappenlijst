<?php

$app['database']->insert('groceries', [
    'name' => $_POST['name']
]);

header('Location: http://localhost:8000/');
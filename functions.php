<?php

include_once 'config.php';

global $db;

$db->charlie();

$tasks = $db->getTasks();

foreach ($tasks as $key -> $value)
    $tasks[$key]['checked'] = ($value['done'] === 1) ? 'checked': null;
}
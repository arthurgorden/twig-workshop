<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';

$persons = [
    ['name' => 'riri', 'age' => 10],
    ['name' => 'fifi', 'age' => 20],
    ['name' => 'loulou', 'age' => 30],
];

echo $twig->render('person.html.twig', ['persons' => $persons]);
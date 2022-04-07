<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$name = 'Arthur';

echo $twig->render('hello.html.twig', ['name' => $name]);

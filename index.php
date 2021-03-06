<?php

use Symfony\Component\HttpFoundation\Request;

require __DIR__.'/src/init.php';

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);

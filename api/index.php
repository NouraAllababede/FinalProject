<?php

// إعداد Laravel للعمل في بيئة Serverless على Vercel

require DIR . '/../vendor/autoload.php';

$app = require_once DIR . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$request = Illuminate\Http\Request::capture();
$response = $kernel->handle($request);

$response->send();
$kernel->terminate($request, $response);

 

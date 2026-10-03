<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$user = \App\Models\User::first();
$request = Illuminate\Http\Request::create('/api/user', 'PUT', [
    'name' => 'aryandi',
    'email' => 'aryandiramadhani047@gmail.com',
    'school_name' => 'SMK NEGERI 1 Ciamis',
    'bio' => 'Hallo!',
    'whatsapp_number' => '85790486249',
    'avatar' => null
]);
$request->headers->set('Accept', 'application/json');
$request->setUserResolver(function() use ($user) { return $user; });

$controller = app(\App\Http\Controllers\AuthController::class);
try {
    $response = $controller->updateProfile($request);
    echo $response->getContent();
} catch (\Illuminate\Validation\ValidationException $e) {
    echo json_encode($e->errors());
} catch (\Exception $e) {
    echo $e->getMessage();
}

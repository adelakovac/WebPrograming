<?php


require 'vendor/autoload.php';
require 'rest/dao/UserDao.class.php';


Flight::register('userDao', 'UserDao');


// routes will go here


Flight::start();
Flight::route('GET /api/users', function(){
    Flight::json(Flight::userDao()->getUsers());
});


Flight::route('GET /api/users/@id', function($id){
    Flight::json(Flight::userDao()->getUserById($id));
});


Flight::route('POST /api/users', function(){
    $data = Flight::request()->data->getData();
    Flight::json(Flight::userDao()->addUser($data));
});


Flight::route('PUT /api/users/@id', function($id){
    $data = Flight::request()->data->getData();
    Flight::userDao()->updateUser($id, $data);
    Flight::json(Flight::userDao()->getUserById($id));
});


Flight::route('DELETE /api/users/@id', function($id){
    Flight::userDao()->deleteUser($id);
});

require '../vendor/autoload.php';


// import and register all business logic files (services) to FlightPHP
require_once DIR . '/services/UserService.php';


Flight::register('userService', "UserService");


// import all routes
require_once DIR . '/routes/UserRoutes.php';


// it is still possible to add custom routes after the imports
Flight::route('GET /', function () {
    echo "Hello";
});


Flight::start();

?>
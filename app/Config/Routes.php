<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


//////////////////////////////////////////////////////////////////////
/////////////default routes
$routes->get('/', function() {
    return redirect()->to('/login');
});



////////////////////////////////////
////////LOGIN
$routes->get('/login', 'login::login');
$routes->post('login-auth', 'Login::auth');
$routes->get('logout', 'Login::logout'); // O Login::logout, según tu caso

///////////////////////////////////
//////resgister
$routes->get('sign-form', 'Register::index');




//////////////////////////////////
/////////// TEAMS
//$routes->match(['get', 'post'], 'teams/create', 'Teams::create');
$routes->get('teams-create', 'Teams::create');
$routes->post('teams-insert', 'Teams::insert');
$routes->get('team-list', 'Teams::index');
$routes->get('team-info', 'Teams::single');
$routes->get('team-list-generate', 'Teams::generate_list');

/////////////////////////////////////////////////////

///////////    PLAYERS ////////////
$routes->get('player-list', 'Players::index');
$routes->get('player-create', 'Players::create');
$routes->post('player-insert', 'Players::insert');
$routes->get('player-card', 'Players::generate_card');
$routes->get('player-edit/(:num)', 'Players::edit_license/$1');

//////////////////////////////////
/////////// HOME
$routes->get('home', 'Dashboard::index');


//////////////////////////////////
/////////// USERS
$routes->get('users-list', 'Users::index');
$routes->get('users-create', 'Users::create');
$routes->post('users-insert', 'Users::insert');
$routes->get('users-edit/(:num)', 'Users::edit/$1');
$routes->post('users-update', 'Users::update');
$routes->get('users-delete/(:num)', 'Users::delete/$1');
$routes->get('users-changePass', 'Users::changePass'); 
$routes->post('users-changePass', 'Users::changePass'); 
$routes->get('users-uploadphoto', 'Users::upload_userImage');
$routes->post('users-changephoto', 'Users::update_photo');
$routes->post('user-reset-password', 'Users::reset_password');



//////////////////////////////////
/////////// ROLES
$routes->get('roles-list', 'Roles::index');
$routes->get('roles-create', 'Roles::create');
$routes->post('roles-insert', 'Roles::insert');
$routes->get('roles-edit/(:num)', 'Roles::edit/$1');
$routes->post('roles-update', 'Roles::update');
$routes->get('roles-delete/(:num)', 'Roles::delete/$1');



/////////////////////////////////
/////////// Files
$routes->get('files-upload', 'FileController::get_form');
$routes->post('files-save', 'FileController::upload');










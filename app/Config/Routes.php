<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::homepage',['namespace' => 'Modules\Web\Controllers']);

$routes->group('api/v1', ['namespace' => 'Modules\Api\Controllers'], function ($routes) {
    $routes->get('media/(:any)','MediaController::get_request/$1');
    $routes->get('media/(:any)/(:any)','MediaController::get_request/$1/$2');

    $routes->post('users/registration','UsersController::register');
    $routes->post('users/auth','UsersController::login');
});

//Website routes
$routes->match(['get','post'],'web/(:any)','Home::page/$1',['namespace' => 'Modules\Web\Controllers']);
$routes->match(['get', 'post'],'web/(:any)/(:any)', 'Home::page/$1/$2',['namespace' => 'Modules\Web\Controllers']);

// $routes->group('web', ['namespace' => 'Modules\Web\Controllers'], function ($routes) {
//     //$routes->match(['get', 'post'], '/', 'Home::index');
//     $routes->match(['get', 'post'], '/(:any)', 'Home::page/$1');
//     $routes->match(['get', 'post'], '/(:any)/(:any)', 'Home::page/$1/$2');
// });

$routes->set404Override(
    function () {
        $mediaCategoryModel = new \App\Modules\Web\Models\MediaCategoryModel();
        $data['active_data']['categories'] = $mediaCategoryModel->get_menu_categorie_list();
        $data['active_data']['active_status'] = "";
        echo view('404',$data);
    }
);

$routes->group('admin',['namespace'=>'Modules\Admin\Controllers'],function($routes){
    $routes->match(['get','post'],'page/(:any)','AdminController::page/$1');
    $routes->match(['get','post'],'page/(:any)/(:any)','AdminController::page/$1/$2');
    $routes->match(['get','post'],'save/(:any)','AdminController::save/$1');
    $routes->match(['get','post'],'save/(:any)/(:any)','AdminController::save/$1/$2');
    $routes->match(['get','post'],'data/(:any)','AdminController::data/$1');
    $routes->match(['get','post'],'data/(:any)/(:any)','AdminController::data/$1/$2');
});
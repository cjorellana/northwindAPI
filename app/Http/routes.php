<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|$app->get('/', function() use ($app) {
    return $app->welcome();
});
*/

$app->get('/', function() use ($app) {
        //return $app->welcome();
	$url= 'http://'. $_SERVER['SERVER_NAME'] . ':8084';
	$html = '<h1>Northwind</h1>';
	$html .= '<ol>';	
	$html .= '<li> <a href=' . $url . '/categories>Categorias  </a> - Listado Completo de categorias';
	$html .= '</ol>';
	return $html;
});

$app->get('/categories', 'CategoriesController@index');
$app->get('/categories/{categories}', 'CategoriesController@getCategories');
$app->post('/categories', 'CategoriesController@createCategories');

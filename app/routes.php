<?php

$router->get('', 'PagesController@login');

$router->get('register', 'PagesController@register');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('users', 'UsersController@index');

$router->post('users/posts', ['Auth@checkToken'], 'UsersController@getPosts');
$router->post('users/register', 'UsersController@store');
$router->post('users/auth', 'UsersController@authenticate');

$router->post('posts/store', ['Auth@checkToken'], 'PostsController@store');
$router->post('comments/store', ['Auth@checkToken'], 'CommentsController@store');
$router->get('posts/index', ['Auth@checkToken'], 'PostsController@index');
$router->get('p/{hash}', ['Auth@checkToken'], 'PostsController@getPost');

$router->get('profile/test/{test}/{id}', ['Auth@checkToken'], 'PostsController@wildcardTest');
$router->get('post/{id}', ['Auth@checkToken'], 'PostsController@otherFunction');
$router->get('post', ['Auth@checkToken'], 'PostsController@anotherFunction');






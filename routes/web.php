<?php


/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------
*/


Route::get('/', 'Frontend\FrontendController@showHome')->name('main');

Route::get('/home', 'Frontend\FrontendController@showHome')->name('main');

Route::get('/login', 'Frontend\FrontendController@showLogin')->name('login');

Route::get('/registration', 'Frontend\FrontendController@showRegistration')->name('registration');

Route::post('/login', 'Frontend\AuthController@processLogin')->name('login');

Route::post('/registration', 'Frontend\AuthController@processRegistration')->name('registration');

Route::get('/logout', 'Frontend\AuthController@logout')->name('logout');


Route::get('/product/{id}', 'Frontend\FrontendController@showProduct')->name('product');



Route::post('/addToCart/{id}', 'Frontend\CartController@addToCart')->name('addToCart');

Route::get('/show/cart', 'Frontend\FrontendController@showCart')->name('show.cart');


Route::get('/store/order', 'Frontend\CartController@storeOrder')->name('store.order');




Route::get('/area', 'Area\AreaController@index')->name('area');

Route::get('/distributor', 'Distributor\DistributorController@index')->name('distributor');

Route::get('/supplier', 'Supplier\SupplierController@index')->name('supplier');

Route::get('/merchandiser', 'Merchandiser\MerchandiserController@index')->name('merchandiser');

Route::get('/requisition', 'RequisitionController@index')->name('requisition');




/*
|--------------------------------------------------------------------------
| Backend
|--------------------------------------------------------------------------
*/


Route::get('/panel', 'Backend\DashboardController@showDashboard')->name('panel');


//Users...........................................................................

Route::get('show/user/', 'Backend\UserController@index')->name('show.user');

Route::get('/details/user/{id}', 'Backend\UserController@details')->name('
    details.user');

Route::post('/store/user', 'Backend\UserController@store')->name('store.user');

Route::post('/update/user/{id}', 'Backend\UserController@update')->name('update.user');

Route::get('/delete/user/{id}','Backend\UserController@delete')->name('delete.user');



//distributor.......................................................................

Route::get('/show/distributor', 'Backend\DistributorController@index')->name('show.distributor');


//supplier......................................................................

Route::get('/show/supplier',    'Backend\SupplierController@index')->name('show.supplier');


//merchandiser ...............................................................

Route::get('/show/merchandiser', 'Backend\MerchandiserController@index')->name('show.merchandiser');


//Category.......................................................................

Route::get('/show/category', 'Backend\CategoryController@index')->name('show.category');

Route::get('/details/category/{id}', 'Backend\CategoryController@details')->name('details.category');

Route::get('/create/category', 'Backend\CategoryController@create')->name('create.category');

Route::post('/store/category', 'Backend\CategoryController@store')->name('store.category');

Route::GET('/edit/category/{id}','Backend\CategoryController@edit')->name('edit.category');

Route::PATCH('/update/category/{id}', 'Backend\CategoryController@update')->name('update.category');

Route::GET('/delete/category/{id}','Backend\CategoryController@delete')->name('delete.category');



//requisition .....................................................................

Route::get('show/requisition/', 'Backend\RequisitionController@index')->name('show.requisition');

Route::get('/details/requisition/{id}', 'Backend\RequisitionController@details')->name('details.requisition');

Route::post('/store/requisition', 'Backend\RequisitionController@store')->name('store.requisition');

Route::post('/update/requisition/{id}', 'Backend\RequisitionController@update')->name('update.requisition');

Route::get('/delete/requisition/{id}','Backend\RequisitionController@delete')->name('delete.requisition');



//product........................................... 

Route::get('/show/product/', 'Backend\ProductController@index')->name('show.product');

Route::get('/show/own/product', 'Backend\ProductController@ownIndex')->name('show.own.product');

Route::get('/details/product/{id}', 'Backend\ProductController@details')->name('details.product');

Route::get('/create/product', 'Backend\ProductController@create')->name('create.product');

Route::post('/store/product', 'Backend\ProductController@store')->name('store.product');

Route::get('/edit/product/{id}','Backend\ProductController@edit')->name('edit.product');

Route::post('/update/product/{id}', 'Backend\ProductController@update')->name('update.product');

Route::get('/delete/product/{id}','Backend\ProductController@delete')->name('delete.product');



//order............................................................................

Route::get('/show/order', 'Backend\OrderController@index')->name('show.order');

Route::get('/details/order/{id}', 'Backend\OrderController@details')->name('details.order');

Route::post('/update/order/{id}', 'Backend\OrderController@update')->name('update.order');

Route::get('/delete/order/{id}','Backend\OrderController@delete')->name('delete.order');



//task............................................................................

Route::get('/show/task', 'Backend\TaskController@index')->name('show.task');

Route::get('/details/task/{id}', 'Backend\TaskController@details')->name('details.task');

Route::get('/create/task', 'Backend\TaskController@create')->name('create.task');

Route::post('/store/task', 'Backend\TaskController@store')->name('store.task');

Route::GET('/edit/task/{id}','Backend\TaskController@edit')->name('edit.task');

Route::post('/update/task/{id}', 'Backend\TaskController@update')->name('update.task');

Route::get('/delete/task/{id}','Backend\TaskController@delete')->name('delete.task');



//area.................................................................................

Route::get('/show/area', 'Backend\AreaController@index')->name('show.area');

Route::post('/store/area', 'Backend\AreaController@store')->name('store.area');

Route::GET('/edit/area/{id}','Backend\AreaController@edit')->name('edit.area');

Route::post('/update/area/{id}', 'Backend\AreaController@update')->name('update.area');

Route::GET('/delete/area/{id}','Backend\AreaController@delete')->name('delete.area');





//Roles...........................................................................

Route::get('/user/roles/index', 'Backend\RoleController@index')->name('role_index');

Route::get('/user/roles/create', 'Backend\RoleController@RoleCreate')->name('role_create_page');

Route::post('/user/roles/create', 'Backend\RoleController@create')->name('role_create');

Route::get('/user/roles/{id}/update', 'Backend\RoleController@RoleUpdate')->name('role_update_page');

Route::PATCH('/user/roles/update/{id}', 'Backend\RoleController@update')->name('role_update');

Route::get('/user/roles/delete/{id}', 'Backend\RoleController@delete')->name('role_delete');

//roles end.......................................................................





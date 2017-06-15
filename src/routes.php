<?php


	/*=============  CATEGORIES  ==============*/

	Route::group( [ 'middleware' => 'web' ], function (){
/// packages/egorryaroslavl/categories
		Route::get( '/admin/categories', 'egorryaroslavl\categories\CategoriesController@index' );
		Route::get( '/admin/categories/create', 'egorryaroslavl\categories\CategoriesController@create' );
		Route::get( '/admin/categories/{id}/edit', 'egorryaroslavl\categories\CategoriesController@edit' );
		Route::get( '/admin/categories/{id}/delete', 'egorryaroslavl\categories\CategoriesController@destroy' );
		Route::post( '/admin/categories/store', 'egorryaroslavl\categories\CategoriesController@store' )->name( 'categories-store' );
		Route::post( '/admin/categories/update', 'egorryaroslavl\categories\CategoriesController@update' )->name( 'categories-update' );

		Route::post( '/translite', 'egorryaroslavl\categories\CategoriesController@translite' )->name( 'translite' );


		Route::post( '/changestatus', 'egorryaroslavl\categories\CategoriesController@changestatus' )->name( 'changestatus' );


		Route::post( '/reorder', 'egorryaroslavl\categories\CategoriesController@reorder' )->name( 'reorder' );


	} );

	Route::post( '/iconsave', 'egorryaroslavl\admin\AdminController@iconsave' );
	Route::get( '/iconget', 'egorryaroslavl\admin\AdminController@iconget' );
	Route::any( '/icondelete', 'egorryaroslavl\admin\AdminController@icondelete' );
	/*=============  /CATEGORIES  ==============*/


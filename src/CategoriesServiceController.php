<?php

	namespace Egorryaroslavl\Categories;

	use Illuminate\Support\ServiceProvider;

	class CategoriesServiceProvider extends ServiceProvider
	{

		public function boot()
		{
			$this->loadViewsFrom( __DIR__ . '/views', 'categories' );
			$this->loadRoutesFrom( __DIR__ . '/routes.php' );
			$this->publishes( [ __DIR__ . '/views' => resource_path( 'views/admin/categories' ) ], 'categories' );
			$this->publishes( [ __DIR__ . '/config/categories.php' => config_path( '/admin/categories.php' ) ], 'categories' );
			$this->publishes( [
				__DIR__ . '/migrations/2017_06_02_094807_create_categories_table.php' => base_path( 'database/migrations/2017_06_02_094807_create_categories_table.php' )
			], '' );


		}

		public function register()
		{

			$this->app->make( 'Egorryaroslavl\Categories\CategoriesController' );
			$this->mergeConfigFrom( __DIR__ . '/config/categories.php', 'categories' );
		}

	}
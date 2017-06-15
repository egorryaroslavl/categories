<?php


	namespace Egorryaroslavl\Categories\Models;

	use Illuminate\Database\Eloquent\Model;


	class CategoryModel extends Model
	{
		protected $table = 'categories';

		protected $fillable = [
			'name',
			'alias',
			'description',
			'icon',
			'pos',
			'public',
			'anons',
			'hit',
			'h1',
			'metatag_title',
			'metatag_description',
			'metatag_keywords' ];

		protected $casts = [
			'public'  => 'boolean',
			'anons'   => 'boolean',
			'hit'     => 'boolean',
		];

	}
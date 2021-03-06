<?php


	return [
		'paginate'        => 30,
		'icons_dir'       => 'upload/icons/categories/',
		'icon_max_width'  => 500, //максимально дозволенный размер ширины изображения иконки
		'icon_max_height' => 300, //максимально дозволенный размер высоты изображения иконки
		'icon_width'      => 220, // ширина превью иконки
		'icon_height'     => 220, // высота превью иконки		
		'menu'            => [
			'url'   => '/admin/categories',
			'title' => 'Категории',
			'icon'  => 'fa fa-tags',
			'pages' => []
		],
	];
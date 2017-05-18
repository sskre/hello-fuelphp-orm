<?php
use Orm\Model_Soft;

class Model_Article extends Model_Soft
{
	protected static $_properties = [
		'id',
		'title' => [
			'data_type' => 'text',
			'label' => 'Title',
			'validation' => ['required'],
			'form' => [
				'type' => 'text',
			],
		],
		'contents' => [
			'data_type' => 'text',
			'label' => 'Contents',
			'validation' => ['required'],
			'form' => [
				'type' => 'textarea',
			],
		],
		'created_at' => [
			'data_type' => 'datetime',
			'form' => [
				'type' => false,
			],
		],
		'updated_at' => [
			'data_type' => 'datetime',
			'form' => [
				'type' => false,
			],
		],
		'deleted_at' => [
			'data_type' => 'datetime',
			'form' => [
				'type' => false,
			],
		],
	];

	protected static $_observers = [
		'Orm\Observer_CreatedAt' => [
			'events' => ['before_insert'],
			'mysql_timestamp' => true,
		],
		'Orm\Observer_UpdatedAt' => [
			'events' => ['before_save'],
			'mysql_timestamp' => true,
		],
		'Orm\Observer_Validation' => [
			'events' => ['before_save'],
		],
	];

	protected static $_soft_delete = [
		'mysql_timestamp' => true,
	];

	protected static $_has_many = [
		'comments' => [
			'key_from' => 'id',
			'model_to' => 'Model_Comment',
			'key_to' => 'article_id',
			'cascade_save' => true,
			'cascade_delete' => true,
		],
	];
}

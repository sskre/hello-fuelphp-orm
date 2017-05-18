<?php
use Orm\Model_Soft;

class Model_Comment extends Model_Soft
{
	protected static $_properties = [
		'id',
		'article_id' => [
			'data_type' => 'int',
			'form' => [
				'type' => false,
			],
		],
		'author' => [
			'data_type' => 'text',
			'label' => 'Author',
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
				'type' => 'text',
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

	protected static $_belongs_to = [
		'article' => [
			'key_from' => 'article_id',
			'model_to' => 'Model_Article',
			'key_to' => 'id',
			'cascade_save' => false,
			'cascade_delete' => false,
		],
	];
}

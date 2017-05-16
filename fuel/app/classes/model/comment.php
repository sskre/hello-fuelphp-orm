<?php
use Orm\Model_Soft;

class Model_Comment extends Model_Soft
{
	protected static $_properties = array(
		'id',
		'article_id',
		'author',
		'contents',
		'created_at',
		'updated_at',
		'deleted_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => true,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => true,
		),
	);

	protected static $_soft_delete = array(
		'mysql_timestamp' => true,
	);

	protected static $_belongs_to = array(
		'article' => array(
			'key_from' => 'article_id',
			'model_to' => 'Model_Article',
			'key_to' => 'id',
			'cascade_save' => false,
			'cascade_delete' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('author', 'Author', 'required');
		$val->add_field('contents', 'Contents', 'required');

		return $val;
	}

}

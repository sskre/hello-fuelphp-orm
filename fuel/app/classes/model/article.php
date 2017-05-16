<?php
use Orm\Model_Soft;

class Model_Article extends Model_Soft
{
	protected static $_properties = array(
		'id',
		'title',
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

	protected static $_has_many = array(
		'comments' => array(
			'key_from' => 'id',
			'model_to' => 'Model_Comment',
			'key_to' => 'article_id',
			'cascade_save' => true,
			'cascade_delete' => true,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('title', 'Title', 'required');
		$val->add_field('contents', 'Contents', 'required');

		return $val;
	}

}

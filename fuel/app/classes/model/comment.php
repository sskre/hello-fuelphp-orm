<?php
use Orm\Model;

class Model_Comment extends Model
{
	protected static $_properties = array(
		'id',
		'author',
		'contents',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
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

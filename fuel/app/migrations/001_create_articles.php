<?php

namespace Fuel\Migrations;

class Create_articles
{
	public function up()
	{
		\DBUtil::create_table('articles', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => '11'),
			'title' => array('null' => false, 'type' => 'text'),
			'contents' => array('null' => false, 'type' => 'text'),
			'created_at' => array('null' => false, 'type' => 'date'),
			'updated_at' => array('null' => false, 'type' => 'date'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('articles');
	}
}
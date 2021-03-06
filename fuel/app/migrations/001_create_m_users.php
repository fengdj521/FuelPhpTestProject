<?php

namespace Fuel\Migrations;

class Create_m_users
{
	public function up()
	{
		\DBUtil::create_table('m_users', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'sex' => array('constraint' => 11, 'type' => 'int'),
			'age' => array('constraint' => 11, 'type' => 'int'),
			'del_flg' => array('type' => 'bool'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('m_users');
	}
}
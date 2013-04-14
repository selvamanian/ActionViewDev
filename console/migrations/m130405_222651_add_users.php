<?php

class m130405_222651_add_users extends CDbMigration
{
	public function up()
	{

		/* add demo users */
		$demoUser = new User();
		$demoUser->username = "demo";
		$demoUser->email = 'demo@saphate.com';
		$demoUser->password = 'password';
		$demoUser->create_time = new CDbExpression('NOW()');
		$demoUser->update_time = new CDbExpression('NOW()');

		$demoUser->save();

		$adminUser = new User();
		$adminUser->username = "admin";
		$adminUser->email = 'admin@saphate.com';
		$adminUser->password = 'password';
		$adminUser->create_time = new CDbExpression('NOW()');
		$adminUser->update_time = new CDbExpression('NOW()');

		$adminUser->save();

	}

	public function down()
	{
		echo "Nothing to migrate down.\n";
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
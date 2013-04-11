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

		$demoUser->save();

		$adminUser = new User();
		$adminUser->username = "admin";
		$adminUser->email = 'admin@saphate.com';
		$adminUser->password = 'password';

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
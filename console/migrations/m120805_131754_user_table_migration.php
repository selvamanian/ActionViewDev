<?php
/**
 * m120805_131754_user_table_migration.php
 *
 * @author: espi <espi@saphate.com>
 * Date: 5/4/13
 * Time: 3:46 PM
 */
class m120805_131754_user_table_migration extends CDbMigration
{

	public function safeUp() {
		$this->createTable( 'tbl_user', array(
				'id' => 'pk',
				'username' => 'varchar(45) NOT NULL',
				'password' => 'string NOT NULL',
				'salt' => 'string DEFAULT NULL',
				'password_strategy' => 'varchar(50) DEFAULT NULL',
				'requires_new_password' => 'boolean DEFAULT NULL',
				'email' => 'string NOT NULL',
				'login_attempts' => 'integer DEFAULT NULL',
				'login_time' => 'datetime DEFAULT NULL',
				'login_ip' => 'varchar(32) DEFAULT NULL',
				'validation_key' => 'string DEFAULT NULL',
				'create_user_id' => 'integer DEFAULT NULL',
				'create_time' => 'datetime DEFAULT NULL',
				'update_user_id' => 'integer DEFAULT NULL',
				'update_time' => 'datetime DEFAULT NULL',
				'UNIQUE KEY `username` (`username`)',
				'UNIQUE KEY `email` (`email`)',
			), 'ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8' );

		$this->createTable( 'tbl_contact', array(
				'id' => 'pk',
				'firstname' => 'string NOT NULL',
				'lastname' => 'string NOT NULL',
				'salutation' => 'string NOT NULL',
				'title' => 'string NOT NULL',
				'notes' => 'text NOT NULL',
				'telephone' => 'string DEFAULT NULL',
				'mobile' => 'string DEFAULT NULL',
				'switchboard' => 'string DEFAULT NULL',
				'fax' => 'string DEFAULT NULL',
				'link_company_address' => 'boolean DEFAULT NULL',
				'address1' => 'string DEFAULT NULL',
				'address2' => 'string DEFAULT NULL',
				'address3' => 'string DEFAULT NULL',
				'address4' => 'string DEFAULT NULL',
				'address5' => 'string DEFAULT NULL',
				'postcode' => 'string DEFAULT NULL',
				'region' => 'string DEFAULT NULL',
				'user_id' => 'integer DEFAULT NULL',
				'company_id' => 'integer DEFAULT NULL',
				'create_time' => 'datetime DEFAULT NULL',
				'create_user_id' => 'integer DEFAULT NULL',
				'update_time' => 'datetime DEFAULT NULL',
				'update_user_id' => 'integer DEFAULT NULL',
			), 'ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8' );

		$this->createTable( 'tbl_company', array(
				'id' => 'pk',
				'name' => 'string NOT NULL',
				'notes' => 'text DEFAULT NULL',
				'telephone' => 'string DEFAULT NULL',
				'fax' => 'string DEFAULT NULL',
				'address1' => 'string DEFAULT NULL',
				'address2' => 'string DEFAULT NULL',
				'address3' => 'string DEFAULT NULL',
				'address4' => 'string DEFAULT NULL',
				'address5' => 'string DEFAULT NULL',
				'postcode' => 'string DEFAULT NULL',
				'region' => 'string DEFAULT NULL',
				'website' => 'string DEFAULT NULL',
				'create_time' => 'datetime DEFAULT NULL',
				'create_user_id' => 'integer DEFAULT NULL',
				'update_time' => 'datetime DEFAULT NULL',
				'update_user_id' => 'integer DEFAULT NULL',
				'UNIQUE KEY `name` (`name`)',
			), 'ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8' );

		$this->createTable( 'tbl_task', array(
				'id' => 'pk',
				'type' => 'string DEFAULT NULL',
				'notes' => 'text DEFAULT NULL',
				'contact_id' => 'integer DEFAULT NULL',
				'owner_id' => 'integer DEFAULT NULL',
				'due_time' => 'datetime DEFAULT NULL',
				'completed_time' => 'datetime DEFAULT NULL',
				'campaign_id' => 'integer DEFAULT NULL',
				'create_time' => 'datetime DEFAULT NULL',
				'create_user_id' => 'integer DEFAULT NULL',
				'update_time' => 'datetime DEFAULT NULL',
				'update_user_id' => 'integer DEFAULT NULL',
			), 'ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8' );

		$this->createTable( 'tbl_campaign', array(
				'id' => 'pk',
				'name' => 'string NOT NULL',
				'type' => 'string NOT NULL',
				'asset' => 'string DEFAULT NULL',
				'notes' => 'text DEFAULT NULL',
				'create_time' => 'datetime DEFAULT NULL',
				'create_user_id' => 'integer DEFAULT NULL',
				'update_time' => 'datetime DEFAULT NULL',
				'update_user_id' => 'integer DEFAULT NULL',
				'UNIQUE KEY `name` (`name`)',
			), 'ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8' );

		$this->createTable( 'tbl_attribute', array(
				'id' => 'pk',
				'name' => 'string NOT NULL',
				'attribute_meta_id' => 'integer DEFAULT NULL',
				'parent_id' => 'integer DEFAULT NULL',
				'create_time' => 'datetime DEFAULT NULL',
				'create_user_id' => 'integer DEFAULT NULL',
				'update_time' => 'datetime DEFAULT NULL',
				'update_user_id' => 'integer DEFAULT NULL',
				'UNIQUE KEY `name` (`name`)',
			), 'ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8' );

		$this->createTable( 'tbl_attribute_meta', array(
				'id' => 'pk',
				'name' => 'string NOT NULL',
			), 'ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8' );

		// create the assignment table that allows for one-to-many relationship
		// between an attribute and contacts which allows for a many to many
		// connection between tbl_attribue and tbl_contact
		$this->createTable( 'tbl_contact_attribute_assignment', array(
				'attribute_id' => 'integer DEFAULT NULL',
				'contact_id' => 'integer DEFAULT NULL',
				'PRIMARY KEY (`attribute_id`,`contact_id`)',
			), 'ENGINE=InnoDB DEFAULT CHARSET=utf8' );

		// create the assignment table that allows for one-to-many relationship
		// between an attribute and companies which allows for a many to many
		// connection between tbl_attribue and tbl_company
		$this->createTable( 'tbl_company_attribute_assignment', array(
				'attribute_id' => 'integer DEFAULT NULL',
				'company_id' => 'integer DEFAULT NULL',
				'PRIMARY KEY (`attribute_id`,`company_id`)',
			), 'ENGINE=InnoDB DEFAULT CHARSET=utf8' );


		// foreign key relationships

		// tbl_contact
		$this->addForeignKey( 'fk_contact_company','tbl_contact','company_id','tbl_company','id','CASCADE','RESTRICT' );
		$this->addForeignKey( 'fk_contact_user','tbl_contact','user_id','tbl_user','id','CASCADE','RESTRICT' );
		$this->addForeignKey( 'fk_contact_create_user','tbl_contact','create_user_id','tbl_user','id','CASCADE','RESTRICT' );
		$this->addForeignKey( 'fk_contact_update_user','tbl_contact','update_user_id','tbl_user','id','CASCADE','RESTRICT' );

		// tbl_company
		$this->addForeignKey( 'fk_company_create_user','tbl_company','create_user_id','tbl_user','id','CASCADE','RESTRICT' );
		$this->addForeignKey( 'fk_company_update_user','tbl_company','update_user_id','tbl_user','id','CASCADE','RESTRICT' );

		// tbl_task
		$this->addForeignKey( 'fk_task_contact','tbl_task','contact_id','tbl_contact','id','CASCADE','RESTRICT' );
		$this->addForeignKey( 'fk_task_owner','tbl_task','owner_id','tbl_user','id','CASCADE','RESTRICT' );
		$this->addForeignKey( 'fk_task_create_user','tbl_task','create_user_id','tbl_user','id','CASCADE','RESTRICT' );
		$this->addForeignKey( 'fk_task_update_user','tbl_task','update_user_id','tbl_user','id','CASCADE','RESTRICT' );
		$this->addForeignKey( 'fk_task_campaign','tbl_task','campaign_id','tbl_campaign','id','CASCADE','RESTRICT' );

		// tbl_campaign
		$this->addForeignKey( 'fk_campaign_create_user','tbl_campaign','create_user_id','tbl_user','id','CASCADE','RESTRICT' );
		$this->addForeignKey( 'fk_campaign_update_user','tbl_campaign','update_user_id','tbl_user','id','CASCADE','RESTRICT' );

		// tbl_attribute
		$this->addForeignKey( 'fk_attribute_meta_id','tbl_attribute','attribute_meta_id','tbl_attribute_meta','id','CASCADE','RESTRICT' );
		$this->addForeignKey( 'fk_attribute_parent_id','tbl_attribute','parent_id','tbl_attribute','id','CASCADE','RESTRICT' );
		$this->addForeignKey( 'fk_attribute_create_user','tbl_attribute','create_user_id','tbl_user','id','CASCADE','RESTRICT' );
		$this->addForeignKey( 'fk_attribute_update_user','tbl_attribute','update_user_id','tbl_user','id','CASCADE','RESTRICT' );

		// tbl_contact_attribute_assignment
		$this->addForeignKey( 'fk_contact_attribute_assignment','tbl_contact_attribute_assignment','attribute_id','tbl_attribute','id','CASCADE','RESTRICT' );
		$this->addForeignKey( 'fk_contact_attribute','tbl_contact_attribute_assignment','contact_id','tbl_contact','id','CASCADE','RESTRICT' );

		// tbl_company_attribute_assignment
		$this->addForeignKey( 'fk_company_attribute_assignment','tbl_company_attribute_assignment','attribute_id','tbl_attribute','id','CASCADE','RESTRICT' );
		$this->addForeignKey( 'fk_company_attribute','tbl_company_attribute_assignment','company_id','tbl_company','id','CASCADE','RESTRICT' );

	}


	public function safeDown() {

		$this->dropForeignKey( 'fk_contact_company','tbl_contact' );
		$this->dropForeignKey( 'fk_contact_user','tbl_contact' );
		$this->dropForeignKey( 'fk_contact_create_user','tbl_contact' );
		$this->dropForeignKey( 'fk_contact_update_user','tbl_contact' );
		$this->dropForeignKey( 'fk_company_create_user','tbl_company' );
		$this->dropForeignKey( 'fk_company_update_user','tbl_company' );
		$this->dropForeignKey( 'fk_task_contact','tbl_task' );
		$this->dropForeignKey( 'fk_task_owner','tbl_task' );
		$this->dropForeignKey( 'fk_task_create_user','tbl_task' );
		$this->dropForeignKey( 'fk_task_update_user','tbl_task' );
		$this->dropForeignKey( 'fk_task_campaign','tbl_task' );
		$this->dropForeignKey( 'fk_campaign_create_user','tbl_campaign' );
		$this->dropForeignKey( 'fk_campaign_update_user','tbl_campaign' );
		$this->dropForeignKey( 'fk_attribute_meta_id','tbl_attribute' );
		$this->dropForeignKey( 'fk_attribute_parent_id','tbl_attribute' );
		$this->dropForeignKey( 'fk_attribute_create_user','tbl_attribute' );
		$this->dropForeignKey( 'fk_attribute_update_user','tbl_attribute' );
		$this->dropForeignKey( 'fk_contact_attribute_assignment','tbl_contact_attribute_assignment' );
		$this->dropForeignKey( 'fk_contact_attribute','tbl_contact_attribute_assignment' );
		$this->dropForeignKey( 'fk_company_attribute_assignment','tbl_company_attribute_assignment' );
		$this->dropForeignKey( 'fk_company_attribute','tbl_company_attribute_assignment' );

		$this->truncateTable( 'tbl_user' );
		$this->truncateTable( 'tbl_contact' );
		$this->truncateTable( 'tbl_company' );
		$this->truncateTable( 'tbl_task' );
		$this->truncateTable( 'tbl_campaign' );
		$this->truncateTable( 'tbl_attribute' );
		$this->truncateTable( 'tbl_attribute_meta' );
		$this->truncateTable( 'tbl_contact_attribute_assignment' );
		$this->truncateTable( 'tbl_company_attribute_assignment' );

		$this->dropTable( 'tbl_user' );
		$this->dropTable( 'tbl_contact' );
		$this->dropTable( 'tbl_company' );
		$this->dropTable( 'tbl_task' );
		$this->dropTable( 'tbl_campaign' );
		$this->dropTable( 'tbl_attribute' );
		$this->dropTable( 'tbl_attribute_meta' );
		$this->dropTable( 'tbl_contact_attribute_assignment' );
		$this->dropTable( 'tbl_company_attribute_assignment' );

	}

}
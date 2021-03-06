<?php

/**
 * This is the model base class for the table "tbl_user".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "User".
 *
 * Columns in table "tbl_user" available as properties of the model,
 * followed by relations of table "tbl_user" available as properties of the model.
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $salt
 * @property string $password_strategy
 * @property integer $requires_new_password
 * @property string $email
 * @property integer $login_attempts
 * @property integer $login_time
 * @property string $login_ip
 * @property string $validation_key
 * @property integer $create_user_id
 * @property integer $create_time
 * @property integer $update_user_id
 * @property integer $update_time
 *
 * @property Attribute[] $attributes
 * @property Attribute[] $attributes1
 * @property Campaign[] $campaigns
 * @property Campaign[] $campaigns1
 * @property Company[] $companies
 * @property Company[] $companies1
 * @property Contact[] $contacts
 * @property Contact[] $contacts1
 * @property Contact[] $contacts2
 * @property Task[] $tasks
 * @property Task[] $tasks1
 * @property Task[] $tasks2
 */
abstract class BaseUser extends GxActiveRecord {

	/**
	 * @var string attribute used for new passwords on user's edition
	 */
	public $newPassword;

	/**
	 * @var string attribute used to confirmation fields
	 */
	public $passwordConfirm;

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tbl_user';
	}

	/**
	 * Behaviors
	 * @return array
	 */
	public function behaviors()
	{
		Yii::import('common.extensions.behaviors.password.*');
		return array(
			// Password behavior strategy
			"APasswordBehavior" => array(
				"class" => "APasswordBehavior",
				"defaultStrategyName" => "bcrypt",
				"strategies" => array(
					"bcrypt" => array(
						"class" => "ABcryptPasswordStrategy",
						"workFactor" => 14,
						"minLength" => 8
					),
					"legacy" => array(
						"class" => "ALegacyMd5PasswordStrategy",
						'minLength' => 8
					)
				),
			),
			'TimestampBehavior' => array(
				'class' => 'root.common.extensions.behaviors.TimestampBehavior'
			),
			'BlameableBehavior' => array(
				'class' => 'root.common.extensions.behaviors.BlameableBehavior.BlameableBehavior'
			),
		);
	}

	public static function label($n = 1) {
		return Yii::t('app', 'User|Users', $n);
	}

	public static function representingColumn() {
		return 'username';
	}

	public function rules() {
		return array(
			array('email', 'required', 'on' => 'checkout'),
			array('email', 'unique', 'on' => 'checkout', 'message' => Yii::t('validation', 'Email has already been taken.')),
			array('email', 'email'),
			array('username, email', 'unique'),
			array('passwordConfirm', 'compare', 'compareAttribute' => 'newPassword', 'message' => Yii::t('validation', "Passwords don't match")),
			array('newPassword, password ', 'length', 'max' => 50, 'min' => 8),
			array('email, password, salt', 'length', 'max' => 255),
			array('requires_new_password, login_attempts', 'numerical', 'integerOnly' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, password, salt, password_strategy , requires_new_password , email', 'safe', 'on' => 'search'),
		);
	}

	public function relations() {
		return array(
			'attributes' => array(self::HAS_MANY, 'Attribute', 'update_user_id'),
			'attributes1' => array(self::HAS_MANY, 'Attribute', 'create_user_id'),
			'campaigns' => array(self::HAS_MANY, 'Campaign', 'update_user_id'),
			'campaigns1' => array(self::HAS_MANY, 'Campaign', 'create_user_id'),
			'companies' => array(self::HAS_MANY, 'Company', 'update_user_id'),
			'companies1' => array(self::HAS_MANY, 'Company', 'create_user_id'),
			'contacts' => array(self::HAS_MANY, 'Contact', 'update_user_id'),
			'contacts1' => array(self::HAS_MANY, 'Contact', 'create_user_id'),
			'contacts2' => array(self::HAS_MANY, 'Contact', 'user_id'),
			'tasks' => array(self::HAS_MANY, 'Task', 'create_user_id'),
			'tasks1' => array(self::HAS_MANY, 'Task', 'owner_id'),
			'tasks2' => array(self::HAS_MANY, 'Task', 'update_user_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'username' => Yii::t('app', 'Username'),
			'password' => Yii::t('app', 'Password'),
			'salt' => Yii::t('app', 'Salt'),
			'password_strategy' => Yii::t('app', 'Password Strategy'),
			'requires_new_password' => Yii::t('app', 'Requires New Password'),
			'email' => Yii::t('app', 'Email'),
			'login_attempts' => Yii::t('app', 'Login Attempts'),
			'login_time' => Yii::t('app', 'Login Time'),
			'login_ip' => Yii::t('app', 'Login Ip'),
			'validation_key' => Yii::t('app', 'Validation Key'),
			'create_user_id' => Yii::t('app', 'Create User'),
			'create_time' => Yii::t('app', 'Create Time'),
			'update_user_id' => Yii::t('app', 'Update User'),
			'update_time' => Yii::t('app', 'Update Time'),
			'attributes' => null,
			'attributes1' => null,
			'campaigns' => null,
			'campaigns1' => null,
			'companies' => null,
			'companies1' => null,
			'contacts' => null,
			'contacts1' => null,
			'contacts2' => null,
			'tasks' => null,
			'tasks1' => null,
			'tasks2' => null,
		);
	}

	/**
	 * Helper property function
	 * @return string the full name of the customer
	 */
	public function getFullName()
	{

		return $this->username;
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('username', $this->username, true);
		$criteria->compare('password', $this->password, true);
		$criteria->compare('email', $this->email, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}

	/**
	 * Makes sure usernames are lowercase
	 * (emails by standard can have uppercase letters)
	 * @return parent::beforeValidate
	 */
	public function beforeValidate()
	{
		if (!empty($this->username))
			$this->username = strtolower($this->username);
		return parent::beforeValidate();
	}

	/**
	 * Generates a new validation key (additional security for cookie)
	 */
	public function regenerateValidationKey()
	{
		$this->saveAttributes(array(
			'validation_key' => md5(mt_rand() . mt_rand() . mt_rand()),
		));
	}


}
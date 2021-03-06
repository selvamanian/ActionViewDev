<?php

/**
 * This is the model base class for the table "tbl_attribute".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Attribute".
 *
 * Columns in table "tbl_attribute" available as properties of the model,
 * followed by relations of table "tbl_attribute" available as properties of the model.
 *
 * @property integer $id
 * @property string $name
 * @property integer $attribute_meta_id
 * @property integer $parent_id
 * @property string $create_time
 * @property integer $create_user_id
 * @property string $update_time
 * @property integer $update_user_id
 *
 * @property User $updateUser
 * @property User $createUser
 * @property AttributeMeta $attributeMeta
 * @property Attribute $parent
 * @property Attribute[] $attributes
 * @property Company[] $tblCompanies
 * @property Contact[] $tblContacts
 */
abstract class BaseAttribute extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tbl_attribute';
	}

	/**
	 * Behaviors
	 * @return array
	 */
	public function behaviors()
	{
		return array(
			'TimestampBehavior' => array(
				'class' => 'root.common.extensions.behaviors.TimestampBehavior'
			),
			'BlameableBehavior' => array(
				'class' => 'root.common.extensions.behaviors.BlameableBehavior.BlameableBehavior'
			),
		);
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Attribute|Attributes', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('name', 'required'),
            array('name', 'unique', 'message'=>'This attribute name already exists.'),
			array('attribute_meta_id, parent_id, create_user_id, update_user_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),
			array('create_time, update_time', 'safe'),
			array('attribute_meta_id, parent_id, create_time, create_user_id, update_time, update_user_id', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, name, attribute_meta_id, parent_id, create_time, create_user_id, update_time, update_user_id', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'updateUser' => array(self::BELONGS_TO, 'User', 'update_user_id'),
			'createUser' => array(self::BELONGS_TO, 'User', 'create_user_id'),
			'attributeMeta' => array(self::BELONGS_TO, 'AttributeMeta', 'attribute_meta_id'),
			'parent' => array(self::BELONGS_TO, 'Attribute', 'parent_id'),
			'attributes' => array(self::HAS_MANY, 'Attribute', 'parent_id'),
			'tblCompanies' => array(self::MANY_MANY, 'Company', 'tbl_company_attribute_assignment(attribute_id, company_id)'),
			'tblContacts' => array(self::MANY_MANY, 'Contact', 'tbl_contact_attribute_assignment(attribute_id, contact_id)'),
		);
	}

	public function pivotModels() {
		return array(
			'tblCompanies' => 'CompanyAttributeAssignment',
			'tblContacts' => 'ContactAttributeAssignment',
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'name' => Yii::t('app', 'Name'),
			'attribute_meta_id' => 'Type of attribute',
			'parent_id' => 'Group',
			'create_time' => Yii::t('app', 'Create Time'),
			'create_user_id' => null,
			'update_time' => Yii::t('app', 'Update Time'),
			'update_user_id' => null,
			'updateUser' => null,
			'createUser' => null,
			'attributeMeta' => null,
			'parent' => null,
			'attributes' => null,
			'tblCompanies' => null,
			'tblContacts' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('attribute_meta_id', $this->attribute_meta_id);
		$criteria->compare('parent_id', $this->parent_id);
		$criteria->compare('create_time', $this->create_time, true);
		$criteria->compare('create_user_id', $this->create_user_id);
		$criteria->compare('update_time', $this->update_time, true);
		$criteria->compare('update_user_id', $this->update_user_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}

}
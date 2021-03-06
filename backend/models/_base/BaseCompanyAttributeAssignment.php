<?php

/**
 * This is the model base class for the table "tbl_company_attribute_assignment".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "CompanyAttributeAssignment".
 *
 * Columns in table "tbl_company_attribute_assignment" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $attribute_id
 * @property integer $company_id
 *
 */
abstract class BaseCompanyAttributeAssignment extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tbl_company_attribute_assignment';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'CompanyAttributeAssignment|CompanyAttributeAssignments', $n);
	}

	public static function representingColumn() {
		return array(
			'attribute_id',
			'company_id',
		);
	}

	public function rules() {
		return array(
			array('attribute_id, company_id', 'numerical', 'integerOnly'=>true),
			array('attribute_id, company_id', 'default', 'setOnEmpty' => true, 'value' => null),
			array('attribute_id, company_id', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'attribute_id' => null,
			'company_id' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('attribute_id', $this->attribute_id);
		$criteria->compare('company_id', $this->company_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}
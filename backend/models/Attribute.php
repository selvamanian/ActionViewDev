<?php

Yii::import('application.models._base.BaseAttribute');

class Attribute extends BaseAttribute
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}
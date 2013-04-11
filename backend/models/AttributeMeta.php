<?php

Yii::import('application.models._base.BaseAttributeMeta');

class AttributeMeta extends BaseAttributeMeta
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}
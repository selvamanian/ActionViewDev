<?php

Yii::import('application.models._base.BaseCampaign');

class Campaign extends BaseCampaign
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}
<?php
/* @var $this AjaxFilterTestController */

$this->breadcrumbs=array(
	'Ajax Filter Test',
);
?>


<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>


<?php


	echo CHtml::beginForm(CHtml::normalizeUrl(array('ajaxFilterTest/index')), 'get', array('id'=>'filter-form'));

    $attributeTagscriteria = new CDbCriteria();
    $attributeTagscriteria->with = array( 'parent', 'attributeMeta' );
    $attributeTagscriteria->addSearchCondition( 'attributeMeta.id', '5' );
	$attributeTags =  array_map(function($e) {return $e->name;}, Attribute::model()->findAll($attributeTagscriteria));

	$attributeTagsList = '';
	foreach ($attributeTags as $value) {
		$attributeTagsList .= $value . ', ';
	}

	$this->widget('bootstrap.widgets.TbSelect2', array(
		'asDropDownList' => false,
		'name' => 'string',
		'options' => array(
			'tags' => $attributeTags,
			'placeholder' => 'Contact details',
			'width' => '30%',
			'tokenSeparators' => array(',')
	)));

	echo CHtml::submitButton('Search', array('name'=>''));
	echo CHtml::endForm();



$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'viewList',
	// 'sortableAttributes'=>array(
	// 	'id'=>'Id',
	// 	'Primary Key'
	// ),
	'id'=>'ajaxListView',
));

Yii::app()->clientScript->registerScript('search',
	"var ajaxUpdateTimeout;
	var ajaxRequest;
	$('input#string').change(function(){
		ajaxRequest = $('input#string').serialize();
		clearTimeout(ajaxUpdateTimeout);
		ajaxUpdateTimeout = setTimeout(function () {
			$.fn.yiiListView.update(
// this is the id of the CListView
				'ajaxListView',
				{data: ajaxRequest}
			)
		},
// this is the delay
		300);
	});"
);

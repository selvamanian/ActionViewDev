<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'type',
'notes',
array(
			'name' => 'contact',
			'type' => 'raw',
			'value' => $model->contact !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->contact)), array('contact/view', 'id' => GxActiveRecord::extractPkValue($model->contact, true))) : null,
			),
array(
			'name' => 'owner',
			'type' => 'raw',
			'value' => $model->owner !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->owner)), array('user/view', 'id' => GxActiveRecord::extractPkValue($model->owner, true))) : null,
			),
'due_time',
'completed_time',
array(
			'name' => 'campaign',
			'type' => 'raw',
			'value' => $model->campaign !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->campaign)), array('campaign/view', 'id' => GxActiveRecord::extractPkValue($model->campaign, true))) : null,
			),
/*
'create_time',
array(
			'name' => 'createUser',
			'type' => 'raw',
			'value' => $model->createUser !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->createUser)), array('user/view', 'id' => GxActiveRecord::extractPkValue($model->createUser, true))) : null,
			),
'update_time',
array(
			'name' => 'updateUser',
			'type' => 'raw',
			'value' => $model->updateUser !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->updateUser)), array('user/view', 'id' => GxActiveRecord::extractPkValue($model->updateUser, true))) : null,
			),
*/
	),
)); ?>


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
'name',
array(
			'name' => 'attributeMeta',
			'type' => 'raw',
			'value' => $model->attributeMeta !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->attributeMeta)), array('attributeMeta/view', 'id' => GxActiveRecord::extractPkValue($model->attributeMeta, true))) : null,
			),
array(
			'name' => 'parent',
			'type' => 'raw',
			'value' => $model->parent !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->parent)), array('attribute/view', 'id' => GxActiveRecord::extractPkValue($model->parent, true))) : null,
			),
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
	),
)); ?>

<h3>Related <?php echo GxHtml::encode($model->getRelationLabel('attributes')); ?></h3>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->attributes as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('attribute/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h3>Related <?php echo GxHtml::encode($model->getRelationLabel('tblCompanies')); ?></h3>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->tblCompanies as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('company/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h3>Related <?php echo GxHtml::encode($model->getRelationLabel('tblContacts')); ?></h3>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->tblContacts as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('contact/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>
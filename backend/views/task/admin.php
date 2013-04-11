<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('task-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage') . ' ' . GxHtml::encode($model->label(2)); ?></h1>

<p>
You may optionally enter a comparison operator (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo GxHtml::link(Yii::t('app', 'Advanced Search'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'task-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		'type',
		'notes',
		array(
				'name'=>'contact_id',
				'value'=>'GxHtml::valueEx($data->contact)',
				'filter'=>GxHtml::listDataEx(Contact::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'owner_id',
				'value'=>'GxHtml::valueEx($data->owner)',
				'filter'=>GxHtml::listDataEx(User::model()->findAllAttributes(null, true)),
				),
		'due_time',
		/*
		'completed_time',
		array(
				'name'=>'campaign_id',
				'value'=>'GxHtml::valueEx($data->campaign)',
				'filter'=>GxHtml::listDataEx(Campaign::model()->findAllAttributes(null, true)),
				),
		'create_time',
		array(
				'name'=>'create_user_id',
				'value'=>'GxHtml::valueEx($data->createUser)',
				'filter'=>GxHtml::listDataEx(User::model()->findAllAttributes(null, true)),
				),
		'update_time',
		array(
				'name'=>'update_user_id',
				'value'=>'GxHtml::valueEx($data->updateUser)',
				'filter'=>GxHtml::listDataEx(User::model()->findAllAttributes(null, true)),
				),
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>
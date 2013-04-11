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
	$.fn.yiiGridView.update('contact-grid', {
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
	'id' => 'contact-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		'firstname',
		'lastname',
		'salutation',
		'title',
		'notes',
		/*
		'telephone',
		'mobile',
		'switchboard',
		'fax',
		array(
					'name' => 'link_company_address',
					'value' => '($data->link_company_address === 0) ? Yii::t(\'app\', \'No\') : Yii::t(\'app\', \'Yes\')',
					'filter' => array('0' => Yii::t('app', 'No'), '1' => Yii::t('app', 'Yes')),
					),
		'address1',
		'address2',
		'address3',
		'address4',
		'address5',
		'postcode',
		'region',
		array(
				'name'=>'user_id',
				'value'=>'GxHtml::valueEx($data->user)',
				'filter'=>GxHtml::listDataEx(User::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'company_id',
				'value'=>'GxHtml::valueEx($data->company)',
				'filter'=>GxHtml::listDataEx(Company::model()->findAllAttributes(null, true)),
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
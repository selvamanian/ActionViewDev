<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create') . ' ' . GxHtml::encode($model->label()); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>

<div id="data">
   <?php $this->renderPartial('_ajaxCompanyAddress', array(
		'data' => $modelCompany,
   )); ?>
</div>
 
<?php echo CHtml::ajaxButton ("Update data",
                              CController::createUrl('contact/UpdateAjax&id=8'), 
                              array('update' => '#data'));
?>

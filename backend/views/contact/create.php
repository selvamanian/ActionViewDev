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

<?php /*
<div id="data">
   <?php $this->renderPartial('_ajaxCompanyAddress', array(
		'data' => $modelCompany,
   )); ?>
</div>
 
<?php echo CHtml::ajaxButton ("Update data",
                              CController::createUrl('contact/UpdateAjax&id=8'), 
                              array('update' => '#data'));
?>
*/ ?>
<?php
Yii::app()->clientScript->registerScript('toggleAddress','

bootstrap_alert = function() {}
bootstrap_alert.warning = function(message) {
	$("#alert_placeholder").html("<div class=\"alert\"><a class=\"close\" data-dismiss=\"alert\">×</a><span>"+message+"</span></div>")
}

$addressContainer = $("#addressContainer");
$Contact_link_company_address = $("#Contact_link_company_address");

$Contact_link_company_address.on("click", function() {

	if($Contact_link_company_address.prop("checked")){
		$addressContainer.fadeOut("fast");
		bootstrap_alert.warning("The company address will be used for this contact.");
		$("#alert_placeholder").show();
	} else {
		$addressContainer.fadeIn();
		$("#alert_placeholder").hide();
		bootstrap_alert.warning("");
	}

});



	');
?>
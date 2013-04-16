<?php
Yii::app()->clientscript->scriptMap['jquery.js'] = false;
?>


<div class="view">

	<div class="row">
	<?php echo CHtml::activeLabelEx($data,'address1'); ?>
	<?php echo CHtml::activeTextField($data, 'address1', array('maxlength' => 255, 'readonly'=>true)); ?>
	</div><!-- row -->
	<div class="row">
	<?php echo CHtml::activeLabelEx($data,'address2'); ?>
	<?php echo CHtml::activeTextField($data, 'address2', array('maxlength' => 255, 'readonly'=>true)); ?>
	</div><!-- row -->
	<div class="row">
	<?php echo CHtml::activeLabelEx($data,'address3'); ?>
	<?php echo CHtml::activeTextField($data, 'address3', array('maxlength' => 255, 'readonly'=>true)); ?>
	</div><!-- row -->
	<div class="row">
	<?php echo CHtml::activeLabelEx($data,'address4'); ?>
	<?php echo CHtml::activeTextField($data, 'address4', array('maxlength' => 255, 'readonly'=>true)); ?>
	</div><!-- row -->
	<div class="row">
	<?php echo CHtml::activeLabelEx($data,'address5'); ?>
	<?php echo CHtml::activeTextField($data, 'address5', array('maxlength' => 255, 'readonly'=>true)); ?>
	</div><!-- row -->
	<div class="row">
	<?php echo CHtml::activeLabelEx($data,'postcode'); ?>
	<?php echo CHtml::activeTextField($data, 'postcode', array('maxlength' => 255, 'readonly'=>true)); ?>
	</div><!-- row -->
	<div class="row">
	<?php echo CHtml::activeLabelEx($data,'region'); ?>
	<?php echo CHtml::activeTextField($data, 'region', array('maxlength' => 255, 'readonly'=>true)); ?>
	</div><!-- row -->

</div>
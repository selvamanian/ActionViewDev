<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'type'); ?>
		<?php echo $form->textField($model, 'type', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'notes'); ?>
		<?php echo $form->textArea($model, 'notes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'contact_id'); ?>
		<?php echo $form->dropDownList($model, 'contact_id', GxHtml::listDataEx(Contact::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'owner_id'); ?>
		<?php echo $form->dropDownList($model, 'owner_id', GxHtml::listDataEx(User::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'due_time'); ?>
		<?php echo $form->textField($model, 'due_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'completed_time'); ?>
		<?php echo $form->textField($model, 'completed_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'campaign_id'); ?>
		<?php echo $form->dropDownList($model, 'campaign_id', GxHtml::listDataEx(Campaign::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

<?php /*
	<div class="row">
		<?php echo $form->label($model, 'create_time'); ?>
		<?php echo $form->textField($model, 'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'create_user_id'); ?>
		<?php echo $form->dropDownList($model, 'create_user_id', GxHtml::listDataEx(User::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'update_time'); ?>
		<?php echo $form->textField($model, 'update_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'update_user_id'); ?>
		<?php echo $form->dropDownList($model, 'update_user_id', GxHtml::listDataEx(User::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>
*/ ?>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->

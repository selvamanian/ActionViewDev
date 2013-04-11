<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'task-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model, 'type', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'type'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'notes'); ?>
		<?php echo $form->textArea($model, 'notes'); ?>
		<?php echo $form->error($model,'notes'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'contact_id'); ?>
		<?php echo $form->dropDownList($model, 'contact_id', GxHtml::listDataEx(Contact::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'contact_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'owner_id'); ?>
		<?php echo $form->dropDownList($model, 'owner_id', GxHtml::listDataEx(User::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'owner_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'due_time'); ?>
		<?php echo $form->textField($model, 'due_time'); ?>
		<?php echo $form->error($model,'due_time'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'completed_time'); ?>
		<?php echo $form->textField($model, 'completed_time'); ?>
		<?php echo $form->error($model,'completed_time'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'campaign_id'); ?>
		<?php echo $form->dropDownList($model, 'campaign_id', GxHtml::listDataEx(Campaign::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'campaign_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model, 'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'create_user_id'); ?>
		<?php echo $form->dropDownList($model, 'create_user_id', GxHtml::listDataEx(User::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'create_user_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model, 'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'update_user_id'); ?>
		<?php echo $form->dropDownList($model, 'update_user_id', GxHtml::listDataEx(User::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'update_user_id'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
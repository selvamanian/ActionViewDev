<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'user-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model, 'username', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'username'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model, 'password', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'password'); ?>
		</div><!-- row -->
<?php /*
		<div class="row">
		<?php echo $form->labelEx($model,'salt'); ?>
		<?php echo $form->textField($model, 'salt', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'salt'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'password_strategy'); ?>
		<?php echo $form->textField($model, 'password_strategy', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'password_strategy'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'requires_new_password'); ?>
		<?php echo $form->checkBox($model, 'requires_new_password'); ?>
		<?php echo $form->error($model,'requires_new_password'); ?>
		</div><!-- row -->
*/ ?>
		<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model, 'email', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'email'); ?>
		</div><!-- row -->
<?php /*
		<div class="row">
		<?php echo $form->labelEx($model,'login_attempts'); ?>
		<?php echo $form->textField($model, 'login_attempts'); ?>
		<?php echo $form->error($model,'login_attempts'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'login_time'); ?>
		<?php echo $form->textField($model, 'login_time'); ?>
		<?php echo $form->error($model,'login_time'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'login_ip'); ?>
		<?php echo $form->textField($model, 'login_ip', array('maxlength' => 32)); ?>
		<?php echo $form->error($model,'login_ip'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'validation_key'); ?>
		<?php echo $form->textField($model, 'validation_key', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'validation_key'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'create_user_id'); ?>
		<?php echo $form->textField($model, 'create_user_id'); ?>
		<?php echo $form->error($model,'create_user_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model, 'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'update_user_id'); ?>
		<?php echo $form->textField($model, 'update_user_id'); ?>
		<?php echo $form->error($model,'update_user_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model, 'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
		</div><!-- row -->
*/ ?>


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
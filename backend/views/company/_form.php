<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'company-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'notes'); ?>
		<?php echo $form->textArea($model, 'notes'); ?>
		<?php echo $form->error($model,'notes'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'telephone'); ?>
		<?php echo $form->textField($model, 'telephone', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'telephone'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fax'); ?>
		<?php echo $form->textField($model, 'fax', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'fax'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'address1'); ?>
		<?php echo $form->textField($model, 'address1', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'address1'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'address2'); ?>
		<?php echo $form->textField($model, 'address2', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'address2'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'address3'); ?>
		<?php echo $form->textField($model, 'address3', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'address3'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'address4'); ?>
		<?php echo $form->textField($model, 'address4', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'address4'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'address5'); ?>
		<?php echo $form->textField($model, 'address5', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'address5'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'postcode'); ?>
		<?php echo $form->textField($model, 'postcode', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'postcode'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'region'); ?>
		<?php echo $form->textField($model, 'region', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'region'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'website'); ?>
		<?php echo $form->textField($model, 'website', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'website'); ?>
		</div><!-- row -->
<?php /*
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
*/ ?>

		<label><?php echo GxHtml::encode($model->getRelationLabel('tblAttributes')); ?></label>
		<?php echo $form->checkBoxList($model, 'tblAttributes', GxHtml::encodeEx(GxHtml::listDataEx(Attribute::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('contacts')); ?></label>
		<?php echo $form->checkBoxList($model, 'contacts', GxHtml::encodeEx(GxHtml::listDataEx(Contact::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
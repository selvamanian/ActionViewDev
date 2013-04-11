<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'attribute-form',
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
		<?php echo $form->labelEx($model,'attribute_meta_id'); ?>
		<?php echo $form->dropDownList($model, 'attribute_meta_id', GxHtml::listDataEx(AttributeMeta::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'attribute_meta_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'parent_id'); ?>
		<?php // echo $form->dropDownList($model, 'parent_id', GxHtml::listDataEx(Attribute::model()->findAllAttributes(null, true))); ?>
		<?php
			$parentAttribute = GxHtml::listDataEx(Attribute::model()->findAllAttributes(null, true));
			echo $form->dropDownList($model, 'parent_id', $parentAttribute, array('prompt'=>'-- Select --')); 
		?> 
		<?php echo $form->error($model,'parent_id'); ?>
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

		<label><?php echo GxHtml::encode($model->getRelationLabel('attributes')); ?></label>
		<?php echo $form->checkBoxList($model, 'attributes', GxHtml::encodeEx(GxHtml::listDataEx(Attribute::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('tblCompanies')); ?></label>
		<?php echo $form->checkBoxList($model, 'tblCompanies', GxHtml::encodeEx(GxHtml::listDataEx(Company::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('tblContacts')); ?></label>
		<?php echo $form->checkBoxList($model, 'tblContacts', GxHtml::encodeEx(GxHtml::listDataEx(Contact::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
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
			$parentAttribute = GxHtml::listDataEx(Attribute::model()->with('parent')->with('attributeMeta')->findAllAttributes(array('id','parent.name','parent.id'),true,array('condition'=>'attributeMeta.id IN (1,2,3)','order'=>'t.parent_id asc, t.id asc') ));
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

<?php /*
		<h3>Related <?php echo GxHtml::encode($model->getRelationLabel('attributes')); ?></h3>
		<?php echo $form->checkBoxList($model, 'attributes', GxHtml::encodeEx(GxHtml::listDataEx(Attribute::model()->findAllAttributes(null, true)), false, true)); ?>
		<h3>Related <?php echo GxHtml::encode($model->getRelationLabel('tblCompanies')); ?></h3>
		<?php echo $form->checkBoxList($model, 'tblCompanies', GxHtml::encodeEx(GxHtml::listDataEx(Company::model()->findAllAttributes(null, true)), false, true)); ?>
		<h3>Related <?php echo GxHtml::encode($model->getRelationLabel('tblContacts')); ?></h3>
		<?php echo $form->checkBoxList($model, 'tblContacts', GxHtml::encodeEx(GxHtml::listDataEx(Contact::model()->findAllAttributes(null, true)), false, true)); ?>
*/ ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
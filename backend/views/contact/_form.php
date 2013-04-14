<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'contact-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model, 'firstname', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'firstname'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model, 'lastname', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'lastname'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'salutation'); ?>
		<?php echo $form->textField($model, 'salutation', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'salutation'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model, 'title', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'title'); ?>
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
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model, 'mobile', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'mobile'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'switchboard'); ?>
		<?php echo $form->textField($model, 'switchboard', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'switchboard'); ?>
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
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->dropDownList($model, 'user_id', GxHtml::listDataEx(User::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'user_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'company_id'); ?>
		<?php echo $form->dropDownList($model, 'company_id', GxHtml::listDataEx(Company::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'company_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'link_company_address'); ?>
		<?php echo $form->checkBox($model, 'link_company_address'); ?>
		<?php echo $form->error($model,'link_company_address'); ?>
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

		<h3>Related <?php echo GxHtml::encode($model->getRelationLabel('tblAttributes')); ?></h3>
		<?php
			$relatedAttribute = GxHtml::encodeEx(GxHtml::listDataEx(Attribute::model()->with('parent')->with('attributeMeta')->findAllAttributes(null, true, array('condition'=>'attributeMeta.id IN (5)','order'=>'t.parent_id asc, t.id asc')), null, null, 'parent.name'), false, true);
			echo $form->dropDownList($model, 'tblAttributes', $relatedAttribute, array('prompt'=> '-- Select --', 'multiple' => 'multiple'));
		?>


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
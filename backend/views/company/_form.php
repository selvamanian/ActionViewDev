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

		<h3><?php echo GxHtml::encode($model->getRelationLabel('tblAttributes')); ?></h3>
		<?php

			$attributeModelExclusive = Attribute::model()->with('parent');
			$attributeRecordsetExclusive = $attributeModelExclusive->findAllAttributes( null, true, array('condition'=>'t.attribute_meta_id IN (4) AND parent.attribute_meta_id IN (1,3)','order'=>'t.parent_id asc, t.id asc'));
			$attributeListExclusive = GxHtml::listDataEx($attributeRecordsetExclusive, null, null, 'parent.name');
			$relatedAttributeExclusive = GxHtml::encodeEx($attributeListExclusive, false, true);

			foreach($relatedAttributeExclusive as $group => $attrs){

				echo GxHtml::openTag('div', $htmlOptions = array('class' => 'row attrExclusiveGroup'));
				echo $form->labelEx($model, $group);
				echo $form->dropDownList(
					$model, 
					'tblAttributes', 
					$attrs, 
					$htmlOptions=array(
						'id' => 'select'.str_replace(' ', '', GxHtml::encodeEx($group)),
						'class' => 'attrExclusiveGroup',
						'multiple' => 'multiple',
						)
					);

				echo GxHtml::closeTag('div');
			}

			$attributeModelNonExclusive = Attribute::model()->with('parent');
			$attributeRecordsetNonExclusive = $attributeModelNonExclusive->findAllAttributes( null, true, array('condition'=>'t.attribute_meta_id IN (4) AND parent.attribute_meta_id IN (2)','order'=>'t.parent_id asc, t.id asc'));
			$attributeListNonExclusive = GxHtml::listDataEx($attributeRecordsetNonExclusive, null, null, 'parent.name');
			$relatedAttributeNonExclusive = GxHtml::encodeEx($attributeListNonExclusive, false, true);

			foreach($relatedAttributeNonExclusive as $group => $attrs){

				echo GxHtml::openTag('div', $htmlOptions = array('class' => 'row attrNonExclusiveGroup'));
				echo $form->labelEx($model, $group);
				echo $form->dropDownList(
					$model, 
					'tblAttributes', 
					$attrs, 
					$htmlOptions=array(
						'id' => 'select'.str_replace(' ', '', GxHtml::encodeEx($group)),
						'class' => 'attrNonExclusiveGroup',
						'prompt' => '-- '.$group.' --',
						'multiple' => 'multiple',
						)
					);

				echo GxHtml::closeTag('div');
			}
		?>
<?php
/*
		?>
		<h3><?php echo GxHtml::encode($model->getRelationLabel('contacts')); ?></h3>
		<?php
			$relatedContact = GxHtml::encodeEx(GxHtml::listDataEx(Contact::model()->findAllAttributes(null, true)), false, true);
			echo $form->dropDownList($model, 'contacts', $relatedContact, array('prompt'=> '-- Select --', 'multiple' => 'multiple'));
*/
		?>
<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->



<?php
Yii::app()->clientScript->registerScript('showContactTemperature', "


var _sectorSelectorsParent = $('#company-form');
_sectorSelectorsParent.find('.attrExclusiveGroup').removeAttr('multiple');

var _sectorSelectors = _sectorSelectorsParent.find('#selectSector, #selectFinancial, #selectLeisure, #selectRetail');
_sectorSelectors.addClass('sectorDDselected').change(function(){

	$(this).removeClass('sectorDDselected');
	_sectorSelectors.parent().find('.sectorDDselected').prop('selectedIndex',-1);
	_sectorSelectors.addClass('sectorDDselected');

});

");
?>
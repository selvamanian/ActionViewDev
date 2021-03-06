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
		<?php echo $form->labelEx($model,'company_id'); ?>
		<?php echo $form->dropDownList($model, 'company_id', GxHtml::listDataEx(Company::model()->findAllAttributes(null, true)), array('prompt'=> '-- Select --')); ?>
		<?php echo $form->error($model,'company_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'link_company_address'); ?>
		<?php echo $form->checkBox($model, 'link_company_address'); ?>
		<?php echo $form->error($model,'link_company_address'); ?>
		</div><!-- row -->
		<div id="alert_placeholder"></div>
		<div id="addressContainer">
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
		</div>
		<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->dropDownList($model, 'user_id', GxHtml::listDataEx(User::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'user_id'); ?>
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

			$attributeModelExclusive = Attribute::model()->with('parent');
			$attributeRecordsetExclusive = $attributeModelExclusive->findAllAttributes( null, true, array('condition'=>'t.attribute_meta_id IN (5) AND parent.attribute_meta_id IN (1,3)','order'=>'t.parent_id asc, t.id asc'));
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
			$attributeRecordsetNonExclusive = $attributeModelNonExclusive->findAllAttributes( null, true, array('condition'=>'t.attribute_meta_id IN (5) AND parent.attribute_meta_id IN (2)','order'=>'t.parent_id asc, t.id asc'));
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
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->

<?php
Yii::app()->clientScript->registerScript('showContactTemperature', "


var _sectorSelectorsParent = $('#contact-form');
_sectorSelectorsParent.find('.attrExclusiveGroup').removeAttr('multiple');

var _sectorSelectors = _sectorSelectorsParent.find('#selectSector, #selectFinancial, #selectLeisure, #selectRetail');
_sectorSelectors.addClass('sectorDDselected').change(function(){

	$(this).removeClass('sectorDDselected');
	_sectorSelectors.parent().find('.sectorDDselected').prop('selectedIndex',-1);
	_sectorSelectors.addClass('sectorDDselected');

});

");
?>
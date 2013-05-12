<div class="span4 contactItemContainer <?php echo $index%3 ? : 'newRow' ?>">
	<ul class="contactDetails unstyled">
		<li class="contactName">
			<h2><?php echo GxHtml::link(GxHtml::encode($data->firstname.' '.$data->lastname), array('contact/update', 'id' => $data->id), $htmlOptions = array('alt' => 'Click to update', 'title' => 'Click to update', )); ?></h2>
		</li>
		<li class="title"><?php echo GxHtml::encode($data->title); ?></li>
		<li class="phone"><?php echo GxHtml::encode($data->telephone); ?></li>
		<li class="user"><?php echo GxHtml::link(GxHtml::encode($data->user->username), array('user/view', 'id' => $data->user->id)); ?></li>
		<!-- <li class="met">Met contact:</li> -->
		<!-- <li class="value">Value dropdown</li> -->
		<!-- <li class="nextActionDate">Next action date</li> -->
		<!-- <li class="nextActionTask">Next action task</li> -->
		<li class="notes">
			<dl>
				<dt>Notes</dt>
				<dd><?php echo GxHtml::encode($data->notes); ?></dd>
			</dl>
		</li>

<?php

	$mailOnly = false;
	$metContact = false;

	echo GxHtml::openTag('li');
	echo GxHtml::openTag('dl');

    $attributeRelatedModelcriteria = new CDbCriteria();
    $attributeRelatedModelcriteria->with = array( 'tblContacts' );
    $attributeRelatedModelcriteria->addSearchCondition( 'tblContacts.id', $data->id );
	$attributeRelatedModel = Attribute::model()->findAll($attributeRelatedModelcriteria);

	foreach($attributeRelatedModel as $relatedModel) {
	// foreach($data->tblAttributes as $relatedModel) {

		switch(GxHtml::valueEx($relatedModel, 'parent_id')):
		case 92:
			// Contact Preferences therefore boolean requires checkbox
			// todo: how to show form to allow update of checkbox
			echo GxHtml::openTag('dt', $htmlOptions = array('class' => 'attrGroup'. str_replace(' ', '', GxHtml::valueEx($relatedModel, 'parent.name')).GxHtml::valueEx($relatedModel, 'id') ));
			echo GxHtml::valueEx($relatedModel, 'name');
			echo ':';
			echo GxHtml::closeTag('dt');
			echo GxHtml::openTag('dd');
			echo 'Yes';
			if(GxHtml::valueEx($relatedModel, 'id') === '93')
				$mailOnly = true;
			if(GxHtml::valueEx($relatedModel, 'id') === '94')
				$metContact = true;
		break;
		default:
			echo GxHtml::openTag('dt', $htmlOptions = array('class' => 'attrGroup'. str_replace(' ', '', GxHtml::valueEx($relatedModel, 'parent.name')) ));
			echo GxHtml::valueEx($relatedModel, 'parent.name');
			echo ':';
			echo GxHtml::closeTag('dt');
			echo GxHtml::openTag('dd');
			if(GxHtml::valueEx($relatedModel, 'parent_id') === '78'){
				echo GxHtml::openTag('span', $htmlOptions = array('class' => 'hide tempID' ));
				echo GxHtml::valueEx($relatedModel, 'id');
				echo GxHtml::closeTag('span');
			}
			echo GxHtml::valueEx($relatedModel, 'name');
/*
			$this->widget('bootstrap.widgets.TbSelect2', array(
				'asDropDownList' => true,
				'data' => $relatedModel->parent->attributes,
				'name' => GxHtml::valueEx($relatedModel, 'parent.name'),
				'options' => array(
					'placeholder' => GxHtml::valueEx($relatedModel, 'parent.name'),
					'width' => '40%',
			)));
*/
		endswitch;

		echo GxHtml::closeTag('dd');

	}


	if(!$mailOnly){
		echo GxHtml::openTag('dt', $htmlOptions = array('class' => 'attrGroupMailOnly'));
		echo 'Mail Only';
		echo ':';
		echo GxHtml::closeTag('dt');
		echo GxHtml::openTag('dd');
		echo 'No';
		echo GxHtml::closeTag('dd');
	}
	if(!$metContact){
		echo GxHtml::openTag('dt', $htmlOptions = array('class' => 'attrGroupMetContact'));
		echo 'Met Contact';
		echo ':';
		echo GxHtml::closeTag('dt');
		echo GxHtml::openTag('dd');
		echo 'No';
		echo GxHtml::closeTag('dd');
	}

	echo GxHtml::closeTag('dl');
	echo GxHtml::closeTag('li');

?>

<?php
/*
		echo GxHtml::openTag('li', $htmlOptions = array('class' => 'newCommentBtn'));
		$this->widget('bootstrap.widgets.TbButtonGroup', array(
			'size' => 'small',
			'htmlOptions' => array('class'=>'pull-right'),
			'buttons'=>array(
				array('label'=>'Add comment', 'url'=>'#', 'icon'=>'icon-comment')
			),
		));
		echo GxHtml::closeTag('li');
*/
?>
	</ul>

<?php if(!empty($data->company)){ ?>


	<ul class="companyDetails unstyled">
		<li class="companyName">
			<h3 class="clear">
			<?php echo GxHtml::link(GxHtml::encode($data->company->name), array('company/update', 'id' => $data->company->id), $htmlOptions = array('alt' => 'Click to update', 'title' => 'Click to update', )); ?>
			</h3>
		</li>
		<li class="webAddress"><?php echo GxHtml::encode($data->company->website); ?></li>
		<li class="phone"><?php echo GxHtml::encode($data->company->telephone); ?></li>
		<!-- <li class="sector">Sector dropdown</li> -->
		<!-- <li class="subSector">Sub-sector</li> -->
		<!-- <li class="potentialAgency">Lead</li> -->
		<!-- <li class="priority">Low</li> -->
		<!-- <li class="discipline">Integrated</li> -->
		<!-- <li class="businessType">Prospect</li> -->
<?php

	echo GxHtml::openTag('li');
	echo GxHtml::openTag('dl');

	foreach($data->company->tblAttributes as $relatedModel) {
		echo GxHtml::openTag('dt', $htmlOptions = array('class' => 'attrGroup'. str_replace(' ', '', GxHtml::valueEx($relatedModel, 'parent.name')) ));
		echo GxHtml::valueEx($relatedModel, 'parent.name');
		echo ': ';
		echo GxHtml::closeTag('dt');
		echo GxHtml::openTag('dd');
		echo GxHtml::valueEx($relatedModel, 'name');
		echo GxHtml::closeTag('dd');

/*
		switch(GxHtml::valueEx($relatedModel, 'parent_id')):
		case 6:
		// Business Type
		break;
		case 12:
		// Priority
		break;
		case 16:
		// Potential agency
		break;
		case 19:
		// Sector
		break;
		endswitch;
*/

	}

	echo GxHtml::closeTag('dl');
	echo GxHtml::closeTag('li');

?>

	<li class="btn-toolbar">
	<?php
		$this->widget('bootstrap.widgets.TbButtonGroup', array(
			'size' => 'medium',
			'buttons'=>array(
				// array('url'=>'/contact/create','icon'=>'icon-plus'),
				// array('url'=>'/contact/index','icon'=>'icon-eye-open'),
				// array('url'=>'http://maps.google.com/maps?q='.GxHtml::encode($data->address1.','.$data->address2.','.$data->address3.','.$data->address4.','.$data->address5.','.$data->postcode),'icon'=>'icon-map-marker',$linkOptions=array('target'=>'_blank',)),
				array('icon'=>'icon-plus','htmlOptions'=>array('class'=>'disabled'),),
				array('icon'=>'icon-eye-open','htmlOptions'=>array('class'=>'disabled'),),
				array('icon'=>'icon-map-marker','htmlOptions'=>array('class'=>'disabled'),),
			),
		));

		$this->widget('bootstrap.widgets.TbButtonGroup', array(
			'size' => 'medium',
			'toggle' => 'checkbox',
			'buttons'=>array(
				// array('url'=>'#', 'icon'=>'icon-off'),
				array('icon'=>'icon-off','htmlOptions'=>array('class'=>'disabled'),),
			),
		));

		$this->widget('bootstrap.widgets.TbButtonGroup', array(
			'size' => 'medium',
			'type'=>'inverse',
			'buttons'=>array(
				// array('url'=>'#', 'icon'=>'icon-trash icon-white')
				array('icon'=>'icon-trash icon-white','htmlOptions'=>array('class'=>'disabled'),)
			),
		));

	?>
	</li>


	</ul>

<?php } else { ?>

<p>Link a company to <?php echo GxHtml::link(GxHtml::encode($data->firstname.' '.$data->lastname), array('contact/update', 'id' => $data->id), $htmlOptions = array('alt' => 'Click to update', 'title' => 'Click to update', )); ?> or <?php echo GxHtml::link('add a company', array('company/create')); ?>.</p>

<?php } ?>

</div>
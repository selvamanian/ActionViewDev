<div class="span4 <?php echo $index%3 ? : 'newRow' ?>">
	<ul class="contactDetails unstyled">
		<li class="contactName">
			<h2><?php echo GxHtml::encode($data->firstname.' '.$data->lastname); ?></h2>
		</li>
		<li class="title"><?php echo GxHtml::encode($data->title); ?></li>
		<li class="phone"><?php echo GxHtml::encode($data->telephone); ?></li>
		<!-- <li class="met">Met contact:</li> -->
		<!-- <li class="value">Value dropdown</li> -->
		<li class="nextActionDate">Next action date</li>
		<li class="nextActionTask">Next action task</li>
		<li class="notes">
			<p><?php echo GxHtml::encode($data->notes); ?></p>
		</li>

<?php
	foreach($data->tblAttributes as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::valueEx($relatedModel, 'parent.name');
		echo ': ';
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('attribute/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
?>

		<li class="newCommentBtn">
<?php

		$this->widget('bootstrap.widgets.TbButtonGroup', array(
			'size' => 'small',
			'htmlOptions' => array('class'=>'pull-right'),
			'buttons'=>array(
				array('label'=>'Add comment', 'url'=>'#', 'icon'=>'icon-comment')
			),
		));

?>
		</li>
	</ul>
	<ul class="companyDetails unstyled">
		<li class="companyName">
			<h3 class="clear"><?php echo GxHtml::encode($data->company->name); ?></h3>
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
	foreach($data->company->tblAttributes as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::valueEx($relatedModel, 'parent.name');
		echo ': ';
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('attribute/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
?>

	<li class="btn-toolbar">
	<?php
		$this->widget('bootstrap.widgets.TbButtonGroup', array(
			'size' => 'medium',
			'buttons'=>array(
				array('url'=>'/contact/create', 'icon'=>'icon-plus'),
				array('url'=>'/contact/index', 'icon'=>'icon-eye-open'),
				array('url'=>'map', 'icon'=>'icon-map-marker')
			),
		));

		$this->widget('bootstrap.widgets.TbButtonGroup', array(
			'size' => 'medium',
			'toggle' => 'checkbox',
			'buttons'=>array(
				array('url'=>'#', 'icon'=>'icon-off'),
			),
		));

		$this->widget('bootstrap.widgets.TbButtonGroup', array(
			'size' => 'medium',
			'type'=>'inverse',
			'buttons'=>array(
				array('url'=>'#', 'icon'=>'icon-trash icon-white')
			),
		));

	?>
	</li>


	</ul>

</div>
<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('firstname')); ?>:
	<?php echo GxHtml::encode($data->firstname); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('lastname')); ?>:
	<?php echo GxHtml::encode($data->lastname); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('salutation')); ?>:
	<?php echo GxHtml::encode($data->salutation); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('title')); ?>:
	<?php echo GxHtml::encode($data->title); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('notes')); ?>:
	<?php echo GxHtml::encode($data->notes); ?>
	<br />

</div>
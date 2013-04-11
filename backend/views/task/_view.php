<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('type')); ?>:
	<?php echo GxHtml::encode($data->type); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('notes')); ?>:
	<?php echo GxHtml::encode($data->notes); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('contact_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->contact)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('owner_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->owner)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('due_time')); ?>:
	<?php echo GxHtml::encode($data->due_time); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('completed_time')); ?>:
	<?php echo GxHtml::encode($data->completed_time); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('campaign_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->campaign)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('create_time')); ?>:
	<?php echo GxHtml::encode($data->create_time); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('create_user_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->createUser)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('update_time')); ?>:
	<?php echo GxHtml::encode($data->update_time); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('update_user_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->updateUser)); ?>
	<br />
	*/ ?>

</div>
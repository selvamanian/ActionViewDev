<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('name')); ?>:
	<?php echo GxHtml::encode($data->name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('notes')); ?>:
	<?php echo GxHtml::encode($data->notes); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('telephone')); ?>:
	<?php echo GxHtml::encode($data->telephone); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fax')); ?>:
	<?php echo GxHtml::encode($data->fax); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('address1')); ?>:
	<?php echo GxHtml::encode($data->address1); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('address2')); ?>:
	<?php echo GxHtml::encode($data->address2); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('address3')); ?>:
	<?php echo GxHtml::encode($data->address3); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('address4')); ?>:
	<?php echo GxHtml::encode($data->address4); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('address5')); ?>:
	<?php echo GxHtml::encode($data->address5); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('postcode')); ?>:
	<?php echo GxHtml::encode($data->postcode); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('region')); ?>:
	<?php echo GxHtml::encode($data->region); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('website')); ?>:
	<?php echo GxHtml::encode($data->website); ?>
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
<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('username')); ?>:
	<?php echo GxHtml::encode($data->username); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('password')); ?>:
	<?php echo GxHtml::encode($data->password); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('salt')); ?>:
	<?php echo GxHtml::encode($data->salt); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('password_strategy')); ?>:
	<?php echo GxHtml::encode($data->password_strategy); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('requires_new_password')); ?>:
	<?php echo GxHtml::encode($data->requires_new_password); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('email')); ?>:
	<?php echo GxHtml::encode($data->email); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('login_attempts')); ?>:
	<?php echo GxHtml::encode($data->login_attempts); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('login_time')); ?>:
	<?php echo GxHtml::encode($data->login_time); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('login_ip')); ?>:
	<?php echo GxHtml::encode($data->login_ip); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('validation_key')); ?>:
	<?php echo GxHtml::encode($data->validation_key); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('create_user_id')); ?>:
	<?php echo GxHtml::encode($data->create_user_id); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('create_time')); ?>:
	<?php echo GxHtml::encode($data->create_time); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('update_user_id')); ?>:
	<?php echo GxHtml::encode($data->update_user_id); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('update_time')); ?>:
	<?php echo GxHtml::encode($data->update_time); ?>
	<br />
	*/ ?>

</div>
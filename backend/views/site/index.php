<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?php Yii::app()->user->setFlash('success', '<strong>Hello!</strong> This site is currently under active development, you may experience some unexpected and inconsistent behaviour.');?>
<?php $this->widget('bootstrap.widgets.TbAlert'); ?>

<p>Use the menu above to navigate current functionality.</p>

<h2>Task tracker:</h2>

<?php

$this->widget('bootstrap.widgets.TbProgress', array(
    'type'=>'success', // 'info', 'success' or 'danger'
    'percent'=>(15/34)*100,
	'striped'=>true
));

?>

<ol>
	<li class="complete">Setup dev environment</li>
	<li class="complete">Build templates</li>
	<li class="complete">Configure app structure</li>
	<span class="milestone label label-info complete">Initial setup complete</span>
	<li class="complete">Code and configure database transactions</li>
	<li class="complete">User record management</li>
	<li class="complete">Contact record management</li>
	<li class="complete">Task record management and relationship mapping</li>
	<li class="complete">Setup staging environment</li>
	<span class="milestone label label-info complete">Database build complete</span>
	<li class="complete">Company record management</li>
	<li class="complete">Contact/Company attributes</li>
	<li class="complete">Address, Phone and Email fields</li>
	<li class="complete">Map data relationships</li>
	<li class="complete">Related data assignment functions</li>
	<li class="complete">Create/update date/time and user logs for all records</li>
	<li>User ip logging behaviours</li>
	<li>Campaign functions</li>
	<li>Attribute lock function</li>
	<span class="milestone label label-info">Core DB structuring complete</span>
	<li>Layout dashboard and company view</li>
	<li class="complete">Implement select2 plugin</li>
	<li>Commenting engine</li>
	<li>Bulk edit function</li>
	<li>Email notification system</li>
	<li>Search function</li>
	<li>User access controls</li>
	<span class="milestone label label-info">Core functional and layout coding complete</span>
	<li>Multi-sort function</li>
	<li class="complete">Contact and Company lookup function</li>
	<li>Reporting functionality</li>
	<li>CSV Export function</li>
	<li>Backup and restore function</li>
	<span class="milestone label label-info">Pre-release</span>
	<li>Cleanse and import data</li>
	<li>Write and run unit tests</li>
	<li>Logging system</li>
	<li>Error handling</li>
	<span class="milestone label label-success">Beta Release</span>
	<li>Pre-production caching configuration</li>
	<li>Performance tuning</li>
</ol>

<h3>Post install</h3>

<ol>
	<li>First and second name lookup function</li>
	<li>Add option function</li>
	<li>User forgotton password function</li>
</ol>

<p>For further details, please contact <a href="mailto:info@saphate.com">info@saphate.com</a>.</p>


<?php

$this->breadcrumbs = array(
	'Dashboard',
);

?>

<div class="hero-unit">
	<h1>Dashboard</h1>
	<p>Work in progress...</p>


	<div class="row-fluid">

		<div class="span5">
<?php

$this->widget('bootstrap.widgets.TbButtonGroup', array(
	'type'=>'primary',
	'size' => 'large',
    'buttons'=>array(
	    array('label'=>'Add Company »', 'url'=>'/company/create'),
	    array('label'=>'Add Campaign »', 'url'=>'/campaign/create')
    ),
));

?>
		</div>

<?php
		// todo: Add search field here
?>

<?php /*
		<div class="span2 pull-right">

<?php $model = Contact::model(); ?>
<?php

$companies=Company::model()->findAll();

$this->widget('bootstrap.widgets.TbSelect2', array(
	'asDropDownList' => true,
	'name' => 'companyLookupDropdown',
	'data' => $companies,
	'options' => array(
		'placeholder' => 'Please select',
		'width' => '100%',
)));
?>
		</div>
		<div class="span2 pull-right">
<?php

$contacts=Contact::model()->findAll();

$this->widget('bootstrap.widgets.TbSelect2', array(
	'asDropDownList' => true,
	'name' => 'contactLookupDropdown',
	'data' => $contacts,
	'options' => array(
		'placeholder' => 'Please select',
		'width' => '100%',
)));

?>

		</div>
*/ ?>

	</div>
<!-- 
	<h2>Selector Engine</h2>
	<p>Pick some stuff.</p>
	<div class="row-fluid">
		<select class="span3" multiple="" name="e9" id="e9" class="populate">
			<optgroup label="Alaskan/Hawaiian Time Zone">
				<option value="AK">Alaska</option>
				<option value="HI">Hawaii</option>
			</optgroup>
			<optgroup label="Pacific Time Zone">
				<option value="CA">California</option>
				<option value="NV">Nevada</option>
				<option value="OR">Oregon</option>
				<option value="WA">Washington</option>
			</optgroup>
			<optgroup label="Mountain Time Zone">
				<option value="AZ">Arizona</option>
				<option value="CO">Colorado</option>
				<option value="ID">Idaho</option>
				<option value="MT">Montana</option>
				<option value="NE">Nebraska</option>
				<option value="NM">New Mexico</option>
				<option value="ND">North Dakota</option>
				<option value="UT">Utah</option>
				<option value="WY">Wyoming</option>
			</optgroup>
			<optgroup label="Central Time Zone">
				<option value="AL">Alabama</option>
				<option value="AR">Arkansas</option>
				<option value="IL">Illinois</option>
				<option value="IA">Iowa</option>
				<option value="KS">Kansas</option>
				<option value="KY">Kentucky</option>
				<option value="LA">Louisiana</option>
				<option value="MN">Minnesota</option>
				<option value="MS">Mississippi</option>
				<option value="MO">Missouri</option>
				<option value="OK">Oklahoma</option>
				<option value="SD">South Dakota</option>
				<option value="TX">Texas</option>
				<option value="TN">Tennessee</option>
				<option value="WI">Wisconsin</option>
			</optgroup>
			<optgroup label="Eastern Time Zone">
				<option value="CT">Connecticut</option>
				<option value="DE">Delaware</option>
				<option value="FL">Florida</option>
				<option value="GA">Georgia</option>
				<option value="IN">Indiana</option>
				<option value="ME">Maine</option>
				<option value="MD">Maryland</option>
				<option value="MA">Massachusetts</option>
				<option value="MI">Michigan</option>
				<option value="NH">New Hampshire</option>
				<option value="NJ">New Jersey</option>
				<option value="NY">New York</option>
				<option value="NC">North Carolina</option>
				<option value="OH">Ohio</option>
				<option value="PA">Pennsylvania</option>
				<option value="RI">Rhode Island</option>
				<option value="SC">South Carolina</option>
				<option value="VT">Vermont</option>
				<option value="VA">Virginia</option>
				<option value="WV">West Virginia</option>
			</optgroup>
		</select>
		<input class="span3" type="hidden" id="e10"/>
	</div> -->
</div>

<div class="row-fluid">
	<?php
	$this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
	));
	?>
</div>

<?php
Yii::app()->clientScript->registerScript('showContactTemperature', "
$('.items div').addClass( function(){
	return 'temp' + $(this).find('.tempID').html();
} );
");
?>
<?php

$this->breadcrumbs = array(
	'Dashboard',
);

?>

<div class="hero-unit">
	<h1>Dashboard</h1>
	<p>Work in progress...</p>


	<div class="row-fluid">

		<div class="span4">
<?php

$this->widget('bootstrap.widgets.TbButtonGroup', array(
	'type'=>'primary',
    'buttons'=>array(
	    array('label'=>'Add Company »', 'url'=>'/company/create'),
	    array('label'=>'Add Campaign »', 'url'=>'/campaign/create')
    ),
));

?>
		</div>

<?php


	echo CHtml::beginForm(CHtml::normalizeUrl(array('site/dashboard')), 'get', array('id'=>'filter-form'));

    $attributeTagscriteria = new CDbCriteria();
    $attributeTagscriteria->with = array( 'parent', 'attributeMeta' );
    $attributeTagscriteria->addSearchCondition( 'attributeMeta.id', '5' );
	$attributeTags =  array_map(function($e) {return $e->name;}, Attribute::model()->findAll($attributeTagscriteria));

	$attributeTagsList = '';
	foreach ($attributeTags as $value) {
		$attributeTagsList .= $value . ', ';
	}
?>

		<div class="span2 pull-right">
<?php

$contacts=Contact::model()->findAll();

$this->widget('bootstrap.widgets.TbSelect2', array(
	'asDropDownList' => true,
	'name' => 'contactLookupDropdown',
	'data' => $contacts,
	'options' => array(
		'placeholder' => 'Contacts',
		'width' => '100%',
)));
?>

		</div>


		<div class="span2 pull-right">

<?php $model = Contact::model(); ?>
<?php

$companies=Company::model()->findAll();

$this->widget('bootstrap.widgets.TbSelect2', array(
	'asDropDownList' => true,
	'name' => 'companyLookupDropdown',
	'data' => $companies,
	'options' => array(
		'placeholder' => 'Companies',
		'width' => '100%',
)));
?>
		</div>

		<div class="span1 pull-right">

<?php
	// show if no-js
	// echo CHtml::submitButton('Search', array('name'=>''));

	// $this->widget('bootstrap.widgets.TbButton', array(
	//     'buttonType'=>'button',
	//     'type'=>'primary',
	//     'label'=>'Filter',
	//     'loadingText'=>'loading...',
	//     'htmlOptions'=>array('id'=>'buttonStateful'),
	// ));

?>
		</div>

		<div class="span3 pull-right">
<?php

	$this->widget('bootstrap.widgets.TbSelect2', array(
		'asDropDownList' => false,
		'name' => 'string',
		'options' => array(
			'tags' => $attributeTags,
			'placeholder' => 'Attributes...',
			'width' => '100%',
			'tokenSeparators' => array(',')
	)));
?>

		</div>



<?php
	echo CHtml::endForm();

?>

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
		'id'=>'ajaxListView',
	));
	?>
</div>

<?php
Yii::app()->clientScript->registerScript('showContactTemperature', "

var updateTemp = function(){
	$('.items div').addClass( function(){
		return 'temp' + $(this).find('.tempID').html();
	} );
}

$(document).ready(function(){
	updateTemp();
});
$(document).ajaxStop(function() {
	updateTemp();
	window.AV13btn.button('reset');
});

");


Yii::app()->clientScript->registerScript('search',
	"var ajaxUpdateTimeout;
	var ajaxRequest;
	var _tagInput = $('#filter-form input#string');
	_tagInput.change(function(){
		ajaxRequest = _tagInput.serialize();
		clearTimeout(ajaxUpdateTimeout);
		ajaxUpdateTimeout = setTimeout(function () {
			$.fn.yiiListView.update(
// this is the id of the CListView
				'ajaxListView',
				{data: ajaxRequest}
			)
		},
// this is the delay
		300);
	});"
);


Yii::app()->clientScript->registerScript('searchBTN',
	"$('#buttonStateful').click(function() {
    window.AV13btn = $(this);
    window.AV13btn.button('loading'); // call the loading function
});"
);
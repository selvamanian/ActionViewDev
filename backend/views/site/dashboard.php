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
				    array('label'=>'Add Company »', 'url'=>$this->createUrl('company/create')),
				    array('label'=>'Add Campaign »', 'url'=>$this->createUrl('campaign/create')),
			    ),
			));
?>
		</div>
<?php
		echo CHtml::beginForm(CHtml::normalizeUrl(array('site/dashboard')), 'get', array('id'=>'lookup-form','class'=>'span4 pull-right'));
?>
		<div class="row">

			<div class="span6 pull-left">
<?php
				$contacts = GxHtml::listDataEx(Contact::model()->findAll());
				$this->widget('bootstrap.widgets.TbSelect2', array(
					'asDropDownList' => true,
					'name' => 'contactLookupDropdown',
					'data' => array('' => '') + $contacts,
					'options' => array(
						'placeholder' => 'Contacts',
						'width' => '100%',
						),
					'htmlOptions'=>array(
						'onchange' => 'window.location = "'.$this->createUrl('contact/update').'" + $(this).val()',
						),
					)
				);
?>
			</div>
			<div class="span6 pull-right">
<?php
				$companies = GxHtml::listDataEx(Company::model()->findAll());
				$this->widget('bootstrap.widgets.TbSelect2', array(
					'asDropDownList' => true,
					'name' => 'companyLookupDropdown',
					'data' => array('' => '') + $companies,
					'options' => array(
						'placeholder' => 'Companies',
						'width' => '100%',
						),
					'htmlOptions'=>array(
						'onchange' => 'window.location = "'.$this->createUrl('company/update').'" + $(this).val()',
						),
					)
				);
?>
			</div>
		</div>
<?php
		echo CHtml::endForm();
?>
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

		    $attributeTagsCriteria = new CDbCriteria();
		    $attributeTagsCriteria->with = array( 'parent', 'attributeMeta' );
		    $attributeTagsCriteria->addSearchCondition( 'attributeMeta.id', '5' );
		    $attributeTagsCriteria->addSearchCondition( 'attributeMeta.id', '4', false, 'OR' );
			$attributeTags = array_map(function($e) {return $e->name;}, Attribute::model()->findAll($attributeTagsCriteria));

			$attributeTagsList = '';
			foreach ($attributeTags as $value) {
				$attributeTagsList .= $value . ', ';
			}

			echo CHtml::beginForm(CHtml::normalizeUrl(array('site/dashboard')), 'get', array('id'=>'filter-form'));
			$this->widget('bootstrap.widgets.TbSelect2', array(
				'asDropDownList' => false,
				'name' => 'string',
				'options' => array(
					'tags' => $attributeTags,
					'placeholder' => 'Contact Attributes...',
					'width' => '100%',
					'tokenSeparators' => array(',')
			)));
			echo CHtml::endForm();
?>

		</div>
	</div>
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


<?php

$this->breadcrumbs = array(
	'Dashboard',
);

?>

<div class="hero-unit">
	<h1>Dashboard</h1>
	<p>Lorem...</p>


	<div class="row-fluid">
		<div class="span2">
			<a class="btn btn-primary btn-large">This is the start point &raquo;</a>
		</div>
		<div class="span2">
			<a class="btn btn-primary btn-large">After that go here next &raquo;</a>
		</div>
		<div class="span4">
			<form class="navbar-search">
				<input type="text" class="search-query" placeholder="Search">
			</form>
		</div>
		<div class="btn-toolbar pull-right">

			<div class="btn-group">
				<a href="#" class="btn btn-primary dropdown-toggle" id="drop2" data-toggle="dropdown">
					Dropdown <b class="caret"></b>
				</a>
				<ul class="dropdown-menu pull-right" id="drop2" role="menu" aria-labelledby="dLabel" data-target="#">
					<li>
						<a tabindex="-1" href="#">Action</a>
					</li>
					<li>
						<a tabindex="-1" href="#">Another action</a>
					</li>
					<li>
						<a tabindex="-1" href="#">Something else here</a>
					</li>
					<li class="divider"></li>
					<li>
						<a tabindex="-1" href="#">Separated link</a>
					</li>
				</ul>
			</div>
			<div class="btn-group">
				<a href="#" class="btn btn-primary dropdown-toggle" id="drop2" data-toggle="dropdown">
					Dropdown
					<b class="caret"></b>
				</a>
				<ul class="dropdown-menu pull-right" id="drop3" role="menu" aria-labelledby="dLabel" data-target="#">
					<li>
						<a tabindex="-1" href="#">Action</a>
					</li>
					<li>
						<a tabindex="-1" href="#">Another action</a>
					</li>
					<li>
						<a tabindex="-1" href="#">Something else here</a>
					</li>
					<li class="divider"></li>
					<li>
						<a tabindex="-1" href="#">Separated link</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
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
	</div>
</div>

<div class="row-fluid">
	<?php
	$this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
	));
	?>
</div>
<div class="span4">
	<ul class="contactDetails">
		<li class="contactName">
			<h2><?php echo GxHtml::encode($data->name); ?></h2>
		</li>
		<li class="title"><?php echo GxHtml::encode($data->name); ?></li>
		<li class="phone"><?php echo GxHtml::encode($data->telephone); ?></li>
		<li class="met">Met contact</li>
		<li class="value">Value dropdown</li>
		<li class="nextActionDate">Next action date</li>
		<li class="nextActionTask">Next action task</li>
		<li class="notes">
			<p><?php echo GxHtml::encode($data->notes); ?></p>
		</li>
		<li class="newCommentBtn">
			<a href="#">Add comment</a>
		</li>
	</ul>
	<ul class="companyDetails">
		<li class="companyName">
			<h3>Heading3</h3>
		</li>
		<li class="webAddress"><?php echo GxHtml::encode($data->website); ?></li>
		<li class="phone">01273 123213</li>
		<li class="sector">Sector dropdown</li>
		<li class="subSector">Sub-sector</li>
		<li class="potentialAgency">Lead</li>
		<li class="priority">Low</li>
		<li class="discipline">Integrated</li>
		<li class="businessType">Prospect</li>
		<li class="companyActionsMenu">
			<img class="addContacts" src="#" width="25" height="25" />
			<img class="viewContacts" src="#" width="25" height="25" />
			<img class="showMap" src="#" width="25" height="25" />
			<img class="toggleActive" src="#" width="25" height="25" />
			<img class="deleteCompany" src="#" width="25" height="25" />
		</li>
	</ul>

	<p>
		<a class="btn" href="#">View details &raquo;</a>
	</p>
</div>
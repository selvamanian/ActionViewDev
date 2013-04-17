<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="language" content="en"/>

	<link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico" type="image/x-icon"/>
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css"
	      media="screen, projection"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css"
	      media="print"/>
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css"
	      media="screen, projection"/>
	<![endif]-->

<?php 
  $baseUrl = Yii::app()->baseUrl; 
  $cs = Yii::app()->getClientScript();
  $cs->registerCssFile($baseUrl.'/css/actionview.css');
?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
	<?php $this->widget('bootstrap.widgets.TbNavbar', array(
	'type' => 'inverse', // null or 'inverse'
	'brand' => 'ActionView',
	'brandUrl' => '/',
	'collapse' => true, // requires bootstrap-responsive.css
	'items' => array(
		array(
			'class' => 'bootstrap.widgets.TbMenu',
			'items' => array(
                array('label'=>'Contact', 'url'=>'#', 'items'=>array(
                    array('label'=>'List', 'url'=>'/index.php?r=index.php?r=contact/index'),
                    array('label'=>'Manage', 'url'=>'/index.php?r=contact/admin'),
                    array('label'=>'Create', 'url'=>'/index.php?r=contact/create'),
                )),
                array('label'=>'Company', 'url'=>'#', 'items'=>array(
                    array('label'=>'List', 'url'=>'/index.php?r=company/index'),
                    array('label'=>'Manage', 'url'=>'/index.php?r=company/admin'),
                    array('label'=>'Create', 'url'=>'/index.php?r=company/create'),
                )),
                array('label'=>'Task', 'url'=>'#', 'items'=>array(
                    array('label'=>'List', 'url'=>'/index.php?r=task/index'),
                    array('label'=>'Manage', 'url'=>'/index.php?r=task/admin'),
                    array('label'=>'Create', 'url'=>'/index.php?r=task/create'),
                )),
                array('label'=>'Campaign', 'url'=>'#', 'items'=>array(
                    array('label'=>'List', 'url'=>'/index.php?r=campaign/index'),
                    array('label'=>'Manage', 'url'=>'/index.php?r=campaign/admin'),
                    array('label'=>'Create', 'url'=>'/index.php?r=campaign/create'),
                )),
                array('label'=>'Attribute', 'url'=>'#', 'items'=>array(
                    array('label'=>'List', 'url'=>'/index.php?r=attribute/index'),
                    array('label'=>'Manage', 'url'=>'/index.php?r=attribute/admin'),
                    array('label'=>'Create', 'url'=>'/index.php?r=attribute/create'),
                )),
                array('label'=>'Admin', 'url'=>'#', 'items'=>array(
                    array('label'=>'List', 'url'=>'/index.php?r=user/index'),
                    array('label'=>'Manage', 'url'=>'/index.php?r=user/admin'),
                    array('label'=>'Create', 'url'=>'/index.php?r=user/create'),
                )),
				// array('label' => 'Home', 'url' => array('/site/index')),
				// array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
				// array('label' => 'Contact', 'url' => array('/site/contact')),
				array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
				array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
			),
		),
		// '<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
		// (!Yii::app()->user->isGuest) ? '<p class="navbar-text pull-right">Logged in as <a href="#">username</a></p>' : '',
		// array(
		// 	'class' => 'bootstrap.widgets.TbMenu',
		// 	'htmlOptions' => array('class' => 'pull-right'),
		// 	'items' => array(
		// 		array('label' => 'Link', 'url' => '#'),
		// 		'---',
		// 		array('label' => 'Dropdown', 'url' => '#', 'items' => array(
		// 			array('label' => 'Action', 'url' => '#'),
		// 			array('label' => 'Another action', 'url' => '#'),
		// 			array('label' => 'Something else here', 'url' => '#'),
		// 			'---',
		// 			array('label' => 'Separated link', 'url' => '#'),
		// 		)),
		// 	),
		// ),
	),
)); ?>
	<!-- mainmenu -->
	<div class="container" style="margin-top:80px">
		<?php if (isset($this->breadcrumbs)): ?>
			<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links' => $this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
		<?php endif?>

		<?php echo $content; ?>
		<hr/>
		<div id="footer">
			Copyright &copy; <?php echo date('Y'); ?><!--  by Saphate Ltd. --><br/>
			All Rights Reserved.<br/>
		</div>
		<!-- footer -->
	</div>
</div>
<!-- page -->
</body>
</html>
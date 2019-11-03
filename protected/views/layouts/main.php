<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<?php echo Yii::app()->bootstrap->init();?>

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/fontawesome.min.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body style="background-color: #e5e7e9;">

<div class="container" id="page">

	<div id="header">
		<div id="logo">
			<a href="<?php echo Yii::app()->getBaseUrl(true); ?>" style="text-decoration: none">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logoStikom.png" width="55" style="float: left; margin-right: 12px">
			<h3 style="font-family: Ubuntu, sans-serif;font-weight: bold;color: #287cbc;">
				STIKOM <span style="color: #e98436;">BINANIAGA</span>
			</h3>
			</a>
		</div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php
		$user = Yii::app()->user;
		$this->widget('application.components.dbMenu', array(
			'items'=>array(
			array(
					'label'=>'Log In', 
					'url'=>array('/site/login'), 
					'visible'=>$user->isGuest
				),			
				array(
					'label'=>'Log Out ('.Yii::app()->user->name.')', 
					'url'=>array('/site/logout'), 
					'visible'=>!$user->isGuest
				),
				array(
					'label'=>'Gii', 
					'url'=>array('/gii'), 
					'linkOptions' => ['target'=>'_blank'], 
					'template'=>'| {menu}',
					'visible'=>!$user->isGuest && $user->checkAccess('user')
				),	
				array(
					'label'=>'User', 
					'url'=>array('/user/admin'), 
					'visible'=>!$user->isGuest && $user->checkAccess('admin')
				),
				array(
					'label'=>'Menu', 
					'url'=>array('/menu/admin'), 
					'visible'=>!$user->isGuest && $user->checkAccess('admin')
				),
			),
		));
		?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		&copy; <?php echo date('Y') .' - <b><a href="http://stikombinaniaga.ac.id">'. CHtml::encode(Yii::app()->name); ?></a></b><br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>

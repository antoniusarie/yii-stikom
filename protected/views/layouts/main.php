<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/css/fontawesome-iconpicker.min.css">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	
	<?php echo Yii::app()->bootstrap->init();?>
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css">

	<!-- Font Awesome -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/fontawesome.min.js"></script>
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js"></script> -->
	
	<?php Yii::app()->clientScript->registerScriptFile("https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js"); ?>

	<script type="text/javascript">
	$(function() {
		$(".iconpicker").iconpicker({
  			hideOnSelect: true,
  			animation: true,
		});
		$('#font').toggleClass("fas fa-font"); // toggles id element font by re-adding class fas fa-font (use with iconpicker)
		$("#url").val("#"); // default URL value is #
	});
	</script>	
	
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

<nav class="navbar navbar-default">
	<div class="container-fluid">
	<div class="navbar-header">
      
	<?php
		$user = Yii::app()->user;
		$this->menu = array(
			array(
				'label'=>'<i class="fas fa-users"></i> User', 
				'url'=>array('/user/admin'), 
				'visible'=>!$user->isGuest && $user->checkAccess('admin')
			),
			array(
				'label'=>'<i class="fas fa-bars"></i> Menu', 
				'url'=>array('/menu/admin'), 
				'visible'=>!$user->isGuest && $user->checkAccess('admin')
			),
			array(
				'label'=>'<i class="fas fa-cog"></i> Gii',
				'url'=>array('/gii'), 
				'linkOptions' => ['target'=>'_blank'], 
				'visible'=>!$user->isGuest && $user->checkAccess('user')
			),	
			array(
				'label'=>'',
				'visible'=>!$user->isGuest,
				'itemOptions'=>array('class'=>'divider')
			),
			array(
				'label'=>'<i class="fas fa-sign-out-alt"></i> Log Out', 
				'url'=>array('/site/logout'), 
				'visible'=>!$user->isGuest,
			),
		);
		
		$this->widget('zii.widgets.CMenu', array(
		'items'=>array(
			array(
				'label'=>'<i class="fas fa-sign-in-alt"></i> Log In', 
				'url'=>array('/site/login'), 
				'visible'=>$user->isGuest,
			),
			array(
				'label'=>'<i class="fas fa-user-circle"></i> ' .Yii::app()->user->name, 
				'url'=>'#',
				'visible'=>!$user->isGuest,
				'linkOptions'=> array(
                   	'class' => 'dropdown-toggle',
					'data-toggle' => 'dropdown',
                   ),
           		'itemOptions' => array('class'=>'dropdown'),
           		'items' => $this->menu,
           	),
		),			
		'encodeLabel' => false,
    	'htmlOptions' => array(
    		'class'=>'nav pull-right',
    		),
    	'submenuHtmlOptions' => array(
    		'class' => 'dropdown-menu',
			),
		));

		$this->widget('application.components.DbMenu', array(
			'htmlOptions'=>array(
				'class'=>'nav dbmenu',
            )
		));
	?>

	</div>	
	</div>
</nav><!-- mainmenu -->

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			'homeLink'=>false,
			'tagName'=>'ol',
			'separator'=>'',
			'activeLinkTemplate'=>'<li><a href="{url}">{label}</a> <span class="divider">/</span></li>',
			'inactiveLinkTemplate'=>'<li><span>{label}</span></li>',
			'htmlOptions'=>array('class'=>'breadcrumb')
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div class="footer">
		<div id="footer">
		&copy; <?php echo date('Y') .' - <b><a href="http://stikombinaniaga.ac.id">'. CHtml::encode(Yii::app()->name); ?></a></b><br/>
		<?php echo Yii::powered(); ?>
		</div>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>

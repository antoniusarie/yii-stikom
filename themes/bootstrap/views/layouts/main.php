<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php 
$user = Yii::app()->user;
$this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array(
					'label'=>'Login', 
					'url'=>array('/site/login'), 
					'visible'=>$user->isGuest
				),
				array(
					'label'=>'Logout ('.Yii::app()->user->name.')', 
					'url'=>array('/site/logout'), 
					'visible'=>!$user->isGuest),
				array(
					'label'=>'Manage User', 
					'url'=>array('/user'), 
					'visible'=>!$user->isGuest && $user->checkAccess('admin')
				),
				array(
					'label'=>'Gii', 
					'url'=>array('/gii'), 
					'linkOptions' => ['target'=>'_blank'], 
					'visible'=>!$user->isGuest && $user->checkAccess('admin')
				),
            ),
        ),
    ),
)); ?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<div class="container-fluid">
	<?php echo $content; ?>
	</div>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>

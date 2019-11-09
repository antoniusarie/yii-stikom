<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<h2>Error <?php echo $code; ?></h2>

<div class="error">
<div class="well well-lg">
	<?php echo '<span style="color:red; font-weight:bold">'.CHtml::encode($message). '</span>'; ?>
</div>
</div>
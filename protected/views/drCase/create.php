<?php
/* @var $this DrCaseController */
/* @var $model DrCase */

$this->breadcrumbs=array(
	'Dr Cases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DrCase', 'url'=>array('index')),
	array('label'=>'Manage DrCase', 'url'=>array('admin')),
);
?>

<h1>Create DrCase</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
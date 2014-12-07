<?php
/* @var $this DrCaseController */
/* @var $model DrCase */

$this->breadcrumbs=array(
	'Dr Cases'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DrCase', 'url'=>array('index')),
	array('label'=>'Create DrCase', 'url'=>array('create')),
	array('label'=>'View DrCase', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DrCase', 'url'=>array('admin')),
);
?>

<h1>Update DrCase <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
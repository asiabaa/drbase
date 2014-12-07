<?php
/* @var $this DrCaseController */
/* @var $model DrCase */

$this->breadcrumbs=array(
	'Dr Cases'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List DrCase', 'url'=>array('index')),
	array('label'=>'Create DrCase', 'url'=>array('create')),
	array('label'=>'Update DrCase', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DrCase', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DrCase', 'url'=>array('admin')),
);
?>

<h1>View DrCase #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'thumb',
		'url',
		'summary',
		'addtime',
	),
)); ?>

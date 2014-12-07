<?php
/* @var $this DrCaseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dr Cases',
);

$this->menu=array(
	array('label'=>'Create DrCase', 'url'=>array('create')),
	array('label'=>'Manage DrCase', 'url'=>array('admin')),
);
?>

<h1>Dr Cases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

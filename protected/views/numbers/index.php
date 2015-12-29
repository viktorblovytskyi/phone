<?php
/* @var $this NumbersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Numbers',
);

$this->menu=array(
	array('label'=>'Create Numbers', 'url'=>array('create')),
	array('label'=>'Manage Numbers', 'url'=>array('admin')),
);
?>

<h1>Numbers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this NumbersController */
/* @var $model Numbers */

$this->breadcrumbs=array(
	'Numbers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Numbers', 'url'=>array('index')),
	array('label'=>'Manage Numbers', 'url'=>array('admin')),
);
?>

<h1>Create Numbers</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
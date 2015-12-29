<?php
/* @var $this NumbersController */
/* @var $model Numbers */

$this->breadcrumbs=array(
	'Numbers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Numbers', 'url'=>array('index')),
	array('label'=>'Create Numbers', 'url'=>array('create')),
	array('label'=>'View Numbers', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Numbers', 'url'=>array('admin')),
);
?>

<h1>Update Numbers <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
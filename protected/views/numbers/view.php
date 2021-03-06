<?php
/* @var $this NumbersController */
/* @var $model Numbers */

$this->breadcrumbs=array(
	'Numbers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Numbers', 'url'=>array('index')),
	array('label'=>'Create Numbers', 'url'=>array('create')),
	array('label'=>'Update Numbers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Numbers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Numbers', 'url'=>array('admin')),
);
?>

<h1>View Numbers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'phone',
		'owner',
		'address',
		'entity_name',
	),

));?>

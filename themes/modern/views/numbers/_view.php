<?php
/* @var $this NumbersController */
/* @var $data Numbers */
?>

<div id="content">
    <div class="post">

    <b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
        <?php echo CHtml::link($data->phone, array($data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('owner')); ?>:</b>
    <?php echo CHtml::encode($data->owner); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
    <?php echo CHtml::encode($data->address); ?>
    <br />


    <?php if (empty($data->entity_name) != 1 and $data->owner == 'entity'): ?>
        <b><?php echo CHtml::encode($data->getAttributeLabel('entity_name')); ?>:</b>
        <?php echo CHtml::encode($data->entity_name);?>
        <br />
    <?php endif; ?>
    <br />
</div>

</div>
<?php
/* @var $this VicidialServerCarriersController */
/* @var $model VicidialServerCarriers */

$this->breadcrumbs=array(
	'Vicidial Server Carriers'=>array('index'),
	$model->carrier_id=>array('view','id'=>$model->carrier_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List VicidialServerCarriers', 'url'=>array('index')),
	array('label'=>'Create VicidialServerCarriers', 'url'=>array('create')),
	array('label'=>'View VicidialServerCarriers', 'url'=>array('view', 'id'=>$model->carrier_id)),
	array('label'=>'Manage VicidialServerCarriers', 'url'=>array('admin')),
);
?>

<h1>Update VicidialServerCarriers <?php echo $model->carrier_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
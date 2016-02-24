<?php
/* @var $this VicidialServerCarriersController */
/* @var $model VicidialServerCarriers */

$this->breadcrumbs=array(
	'Vicidial Server Carriers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List VicidialServerCarriers', 'url'=>array('index')),
	array('label'=>'Manage VicidialServerCarriers', 'url'=>array('admin')),
);
?>

<h1>Create VicidialServerCarriers</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
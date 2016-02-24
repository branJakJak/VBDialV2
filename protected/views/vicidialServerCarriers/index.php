<?php
/* @var $this VicidialServerCarriersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vicidial Server Carriers',
);

$this->menu=array(
	array('label'=>'Create VicidialServerCarriers', 'url'=>array('create')),
	array('label'=>'Manage VicidialServerCarriers', 'url'=>array('admin')),
);
?>

<h1>Vicidial Server Carriers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

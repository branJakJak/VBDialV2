<?php
/* @var $this VicidialRemoteAgentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vicidial Remote Agents',
);

$this->menu=array(
	array('label'=>'Create VicidialRemoteAgents', 'url'=>array('create')),
	array('label'=>'Manage VicidialRemoteAgents', 'url'=>array('admin')),
);
?>

<h1>Vicidial Remote Agents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

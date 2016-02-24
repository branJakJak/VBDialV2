<?php
/* @var $this VicidialRemoteAgentsController */
/* @var $model VicidialRemoteAgents */

$this->breadcrumbs=array(
	'Vicidial Remote Agents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List VicidialRemoteAgents', 'url'=>array('index')),
	array('label'=>'Manage VicidialRemoteAgents', 'url'=>array('admin')),
);
?>

<h1>Create VicidialRemoteAgents</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
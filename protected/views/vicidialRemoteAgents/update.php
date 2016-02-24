<?php
/* @var $this VicidialRemoteAgentsController */
/* @var $model VicidialRemoteAgents */

$this->breadcrumbs=array(
	'Vicidial Remote Agents'=>array('index'),
	$model->remote_agent_id=>array('view','id'=>$model->remote_agent_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List VicidialRemoteAgents', 'url'=>array('index')),
	array('label'=>'Create VicidialRemoteAgents', 'url'=>array('create')),
	array('label'=>'View VicidialRemoteAgents', 'url'=>array('view', 'id'=>$model->remote_agent_id)),
	array('label'=>'Manage VicidialRemoteAgents', 'url'=>array('admin')),
);
?>

<h1>Update VicidialRemoteAgents <?php echo $model->remote_agent_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
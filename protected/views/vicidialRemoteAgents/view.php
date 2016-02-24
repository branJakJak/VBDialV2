<?php
/* @var $this VicidialRemoteAgentsController */
/* @var $model VicidialRemoteAgents */

$this->breadcrumbs=array(
	'Vicidial Remote Agents'=>array('index'),
	$model->remote_agent_id,
);

$this->menu=array(
	array('label'=>'List VicidialRemoteAgents', 'url'=>array('index')),
	array('label'=>'Create VicidialRemoteAgents', 'url'=>array('create')),
	array('label'=>'Update VicidialRemoteAgents', 'url'=>array('update', 'id'=>$model->remote_agent_id)),
	array('label'=>'Delete VicidialRemoteAgents', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->remote_agent_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VicidialRemoteAgents', 'url'=>array('admin')),
);
?>

<h1>View VicidialRemoteAgents #<?php echo $model->remote_agent_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'remote_agent_id',
		'user_start',
		'number_of_lines',
		'server_ip',
		'conf_exten',
		'status',
		'campaign_id',
		'closer_campaigns',
		'extension_group',
		'extension_group_order',
		'on_hook_agent',
		'on_hook_ring_time',
		'included',
	),
)); ?>

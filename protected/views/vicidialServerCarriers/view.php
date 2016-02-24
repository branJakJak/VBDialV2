<?php
/* @var $this VicidialServerCarriersController */
/* @var $model VicidialServerCarriers */

$this->breadcrumbs=array(
	'Vicidial Server Carriers'=>array('index'),
	$model->carrier_id,
);

$this->menu=array(
	array('label'=>'List VicidialServerCarriers', 'url'=>array('index')),
	array('label'=>'Create VicidialServerCarriers', 'url'=>array('create')),
	array('label'=>'Update VicidialServerCarriers', 'url'=>array('update', 'id'=>$model->carrier_id)),
	array('label'=>'Delete VicidialServerCarriers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->carrier_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VicidialServerCarriers', 'url'=>array('admin')),
);
?>

<h1>View VicidialServerCarriers #<?php echo $model->carrier_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'carrier_id',
		'carrier_name',
		'registration_string',
		'template_id',
		'account_entry',
		'protocol',
		'globals_string',
		'dialplan_entry',
		'server_ip',
		'active',
		'carrier_description',
		'user_group',
		'api_username',
		'api_password',
		'api_mainpass',
		'remote_user',
		'api_balance',
	),
)); ?>

<?php
/* @var $this VicidialServerCarriersController */
/* @var $model VicidialServerCarriers */

$this->breadcrumbs=array(
	'Vicidial Server Carriers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List VicidialServerCarriers', 'url'=>array('index')),
	array('label'=>'Create VicidialServerCarriers', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#vicidial-server-carriers-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Vicidial Server Carriers</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vicidial-server-carriers-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		// 'carrier_id',
		array(
			'type'=>'raw',
			'header'=>'Viciuser',
			'value'=>'$data->getViciUser()'
		),
		array(
			'type'=>'raw',
			'header'=>'Viciuser',
			'value'=>'$data->getNumberOfLines()'
		),
		array(
			'type'=>'raw',
			'header'=>'Viciuser',
			'value'=>'$data->getServerIp()'
		),
		array(
			'type'=>'raw',
			'header'=>'Viciuser',
			'value'=>'$data->getStatus()'
		),
		'carrier_name',
		'api_mainpass',
		'api_username',
		'api_password',
		array(
			'type'=>'raw',
			'header'=>'CampaignId',
			'value'=>'$data->getCampaignId()'
		),

		/*
		'globals_string',
		'registration_string',
		'template_id',
		'account_entry',
		'protocol',
		'dialplan_entry',
		'server_ip',
		'active',
		'carrier_description',
		'user_group',
		'remote_user',
		'api_balance',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<?php
/* @var $this VicidialRemoteAgentsController */
/* @var $model VicidialRemoteAgents */

$this->breadcrumbs=array(
	'Vicidial Remote Agents'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List VicidialRemoteAgents', 'url'=>array('index')),
	array('label'=>'Create VicidialRemoteAgents', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#vicidial-remote-agents-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Vicidial Remote Agents</h1>

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
	'id'=>'vicidial-remote-agents-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
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
		/*
		'included',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

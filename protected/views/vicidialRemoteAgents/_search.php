<?php
/* @var $this VicidialRemoteAgentsController */
/* @var $model VicidialRemoteAgents */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'remote_agent_id'); ?>
		<?php echo $form->textField($model,'remote_agent_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_start'); ?>
		<?php echo $form->textField($model,'user_start',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'number_of_lines'); ?>
		<?php echo $form->textField($model,'number_of_lines'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'server_ip'); ?>
		<?php echo $form->textField($model,'server_ip',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conf_exten'); ?>
		<?php echo $form->textField($model,'conf_exten',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'campaign_id'); ?>
		<?php echo $form->textField($model,'campaign_id',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'closer_campaigns'); ?>
		<?php echo $form->textArea($model,'closer_campaigns',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'extension_group'); ?>
		<?php echo $form->textField($model,'extension_group',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'extension_group_order'); ?>
		<?php echo $form->textField($model,'extension_group_order',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'on_hook_agent'); ?>
		<?php echo $form->textField($model,'on_hook_agent',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'on_hook_ring_time'); ?>
		<?php echo $form->textField($model,'on_hook_ring_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'included'); ?>
		<?php echo $form->textField($model,'included',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
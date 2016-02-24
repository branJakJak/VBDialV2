<?php
/* @var $this VicidialRemoteAgentsController */
/* @var $model VicidialRemoteAgents */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vicidial-remote-agents-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_start'); ?>
		<?php echo $form->textField($model,'user_start',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'user_start'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'number_of_lines'); ?>
		<?php echo $form->textField($model,'number_of_lines'); ?>
		<?php echo $form->error($model,'number_of_lines'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'server_ip'); ?>
		<?php echo $form->textField($model,'server_ip',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'server_ip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conf_exten'); ?>
		<?php echo $form->textField($model,'conf_exten',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'conf_exten'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campaign_id'); ?>
		<?php echo $form->textField($model,'campaign_id',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'campaign_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'closer_campaigns'); ?>
		<?php echo $form->textArea($model,'closer_campaigns',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'closer_campaigns'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'extension_group'); ?>
		<?php echo $form->textField($model,'extension_group',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'extension_group'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'extension_group_order'); ?>
		<?php echo $form->textField($model,'extension_group_order',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'extension_group_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'on_hook_agent'); ?>
		<?php echo $form->textField($model,'on_hook_agent',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'on_hook_agent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'on_hook_ring_time'); ?>
		<?php echo $form->textField($model,'on_hook_ring_time'); ?>
		<?php echo $form->error($model,'on_hook_ring_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'included'); ?>
		<?php echo $form->textField($model,'included',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'included'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
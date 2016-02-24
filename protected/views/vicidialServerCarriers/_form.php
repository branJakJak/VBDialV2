<?php
/* @var $this VicidialServerCarriersController */
/* @var $model VicidialServerCarriers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vicidial-server-carriers-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'carrier_id'); ?>
		<?php echo $form->textField($model,'carrier_id',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'carrier_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carrier_name'); ?>
		<?php echo $form->textField($model,'carrier_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'carrier_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'registration_string'); ?>
		<?php echo $form->textField($model,'registration_string',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'registration_string'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'template_id'); ?>
		<?php echo $form->textField($model,'template_id',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'template_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_entry'); ?>
		<?php echo $form->textArea($model,'account_entry',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'account_entry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'protocol'); ?>
		<?php echo $form->textField($model,'protocol',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'protocol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'globals_string'); ?>
		<?php echo $form->textField($model,'globals_string',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'globals_string'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dialplan_entry'); ?>
		<?php echo $form->textArea($model,'dialplan_entry',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'dialplan_entry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'server_ip'); ?>
		<?php echo $form->textField($model,'server_ip',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'server_ip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->textField($model,'active',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carrier_description'); ?>
		<?php echo $form->textField($model,'carrier_description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'carrier_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_group'); ?>
		<?php echo $form->textField($model,'user_group',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'user_group'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'api_username'); ?>
		<?php echo $form->textField($model,'api_username',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'api_username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'api_password'); ?>
		<?php echo $form->textField($model,'api_password',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'api_password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'api_mainpass'); ?>
		<?php echo $form->textField($model,'api_mainpass',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'api_mainpass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remote_user'); ?>
		<?php echo $form->textField($model,'remote_user',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'remote_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'api_balance'); ?>
		<?php echo $form->textField($model,'api_balance'); ?>
		<?php echo $form->error($model,'api_balance'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
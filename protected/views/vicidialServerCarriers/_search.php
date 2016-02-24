<?php
/* @var $this VicidialServerCarriersController */
/* @var $model VicidialServerCarriers */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'carrier_id'); ?>
		<?php echo $form->textField($model,'carrier_id',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'carrier_name'); ?>
		<?php echo $form->textField($model,'carrier_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'registration_string'); ?>
		<?php echo $form->textField($model,'registration_string',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'template_id'); ?>
		<?php echo $form->textField($model,'template_id',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'account_entry'); ?>
		<?php echo $form->textArea($model,'account_entry',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'protocol'); ?>
		<?php echo $form->textField($model,'protocol',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'globals_string'); ?>
		<?php echo $form->textField($model,'globals_string',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dialplan_entry'); ?>
		<?php echo $form->textArea($model,'dialplan_entry',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'server_ip'); ?>
		<?php echo $form->textField($model,'server_ip',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'active'); ?>
		<?php echo $form->textField($model,'active',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'carrier_description'); ?>
		<?php echo $form->textField($model,'carrier_description',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_group'); ?>
		<?php echo $form->textField($model,'user_group',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'api_username'); ?>
		<?php echo $form->textField($model,'api_username',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'api_mainpass'); ?>
		<?php echo $form->textField($model,'api_mainpass',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remote_user'); ?>
		<?php echo $form->textField($model,'remote_user',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'api_balance'); ?>
		<?php echo $form->textField($model,'api_balance'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
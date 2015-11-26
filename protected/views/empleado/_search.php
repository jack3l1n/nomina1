<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Cedula'); ?>
		<?php echo $form->textField($model,'Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Apellido'); ?>
		<?php echo $form->textField($model,'Apellido',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Edad'); ?>
		<?php echo $form->textField($model,'Edad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha_Nacimiento'); ?>
		<?php echo $form->textField($model,'Fecha_Nacimiento',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Direccion'); ?>
		<?php echo $form->textField($model,'Direccion',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Telefono_Fijo'); ?>
		<?php echo $form->textField($model,'Telefono_Fijo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Celular'); ?>
		<?php echo $form->textField($model,'Celular'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Foto'); ?>
		<?php echo $form->textField($model,'Foto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_Cargo'); ?>
		<?php echo $form->textField($model,'id_Cargo',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_Sucursal'); ?>
		<?php echo $form->textField($model,'id_Sucursal',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */
/* @var $form CActiveForm */
?>

<div class="form">
<div class="j1">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empleado-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Cedula'); ?>
		<?php echo $form->textField($model,'Cedula'); ?>
		<?php echo $form->error($model,'Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Apellido'); ?>
		<?php echo $form->textField($model,'Apellido',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Edad'); ?>
		<?php echo $form->textField($model,'Edad'); ?>
		<?php echo $form->error($model,'Edad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha_Nacimiento'); ?>
		<?php echo $form->textField($model,'Fecha_Nacimiento',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'Fecha_Nacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Direccion'); ?>
		<?php echo $form->textField($model,'Direccion',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Direccion'); ?>
	</div>
        </div>
            <div class="j1">
        </div>
	<div class="row">
		<?php echo $form->labelEx($model,'Telefono_Fijo'); ?>
		<?php echo $form->textField($model,'Telefono_Fijo'); ?>
		<?php echo $form->error($model,'Telefono_Fijo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Celular'); ?>
		<?php echo $form->textField($model,'Celular'); ?>
		<?php echo $form->error($model,'Celular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Foto'); ?>
		<?php echo $form->textField($model,'Foto'); ?>
		<?php echo $form->error($model,'Foto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_Cargo'); ?>
		<?php echo $form->textField($model,'id_Cargo',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'id_Cargo'); ?>
	</div>

	<div class="row">
                <?php echo $form->labelEx($model, 'id_Sucursal'); ?>
                <?php echo $form-> dropDownlist($model, 'id_Sucursal', array( '---' => '---', 'ALM CALLE 169' => 'ALM CALLE 169',
                    'ALM AVENIDA 19'  =>  'ALM AVENIDA 19', 'ALM CALLE 128' => 'ALM CALLE 128', 'ALM 7 AGOSTO' => 'ALM 7 AGOSTO',
                    'ALM CENTRO 1' => 'ALM CENTRO 1', 'ALM CENTRO 3' => 'ALM CENTRO 3', 'ALM CENTRO 5' => 'AALM CENTRO 5', 'ALM CENTRO 6' => 'ALM CENTRO 6',
                    'ALM VILLAVICENCIO' => 'ALM VILLAVICENCIO', 'ALM_ARMENIA' => 'ALM_ARMENIA', 'ALM_CHIA' => 'ALM_CHIA', 'ADMINISTRACION' => 'ADMINISTRACION', 'INGENIERIA' => 'INGENIERIA'));
                    ?>
                    <?php echo $form->error($model, 'id_Sucursal'); ?>
                </div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
            </div>
<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>

    <div class="row">
<?php echo $form->label($model, 'cedula'); ?>
<?php echo $form->textField($model, 'cedula', array('size' => 50, 'maxlength' => 50)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'nombre'); ?>
<?php echo $form->textField($model, 'nombre', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'apellido'); ?>
<?php echo $form->textField($model, 'apellido', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'direccion'); ?>
<?php echo $form->textField($model, 'direccion', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'email'); ?>
<?php echo $form->textField($model, 'email', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'telefono'); ?>
<?php echo $form->textField($model, 'telefono'); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'celular'); ?>
<?php echo $form->textField($model, 'celular'); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'fecha_nacimiento'); ?>
<?php echo $form->textField($model, 'fecha_nacimiento'); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'cargo'); ?>
<?php echo $form->textField($model, 'cargo', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'sucursal'); ?>
<?php echo $form->textField($model, 'sucursal', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row buttons">
    <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
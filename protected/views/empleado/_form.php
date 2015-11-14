<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'empleado-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));


    /* $this->widget('zii.widgets.jui.CJuiDatePicker', array(
      'name' => 'publishDate',
      'options' => array(
      'showAnim' => 'fold',
      ),
      'htmlOptions' => array(
      'style' => 'height:20px;'
      ),
      )); */
    ?>



    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'cedula'); ?>
        <?php echo $form->textField($model, 'cedula', array('size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'cedula'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'nombre'); ?>
        <?php echo $form->textField($model, 'nombre', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'nombre'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'apellido'); ?>
        <?php echo $form->textField($model, 'apellido', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'apellido'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'direccion'); ?>
        <?php echo $form->textField($model, 'direccion', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'direccion'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'email'); ?>
        <?php echo $form->textField($model, 'email', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'email'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'telefono'); ?>
        <?php echo $form->textField($model, 'telefono'); ?>
        <?php echo $form->error($model, 'telefono'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'celular'); ?>
        <?php echo $form->textField($model, 'celular'); ?>
        <?php echo $form->error($model, 'celular'); ?>
    </div>


    <div class="row">
        <?php echo $form->labelEx($model, 'fecha_nacimiento'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'fecha_nacimiento',
            'value' => $model->fecha_nacimiento,
            'language' => 'es',
            'htmlOptions' => array('readonly' => "readonly"),
            'options' => array(
                'autoSize' => true,
                'defaultDate' => $model->fecha_nacimiento,
                'dateFormat' => 'yy-mm-dd',
                'buttonImage' => Yii::app()->baseUrl . '/images/calendario.jpg',
                'buttonImageOnly' => true,
                'buttonText' => 'Fecha',
                'selectOtherMonths' => true,
                'showAnim' => 'slide',
                'showButtonPanel' => true,
                'showOn' => 'button',
                'showOtherMonths' => true,
                'changeMonth' => 'true',
                'changeYear' => 'true',
                'minDate' => 'date("Y-m-d")',
                'maxDate' => "+20Y",
            ),
        ));
        ?>
        <?php echo $form->error($model, 'fecha_nacimiento'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'cargo'); ?>
        <?php echo $form->textField($model, 'cargo', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'cargo'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'sucursal'); ?>
        <?php
        echo $form->dropDownlist($model, 'sucursal', array('---' => '---', 'ALM CALLE 169' => 'ALM CALLE 169',
            'ALM AVENIDA 19' => 'ALM AVENIDA 19', 'ALM CALLE 128' => 'ALM CALLE 128', 'ALM 7 AGOSTO' => 'ALM 7 AGOSTO',
            'ALM CENTRO 1' => 'ALM CENTRO 1', 'ALM CENTRO 3' => 'ALM CENTRO 3', 'ALM CENTRO 5' => 'AALM CENTRO 5', 'ALM CENTRO 6' => 'ALM CENTRO 6',
            'ALM VILLAVICENCIO' => 'ALM VILLAVICENCIO', 'ALM_ARMENIA' => 'ALM_ARMENIA', 'ALM_CHIA' => 'ALM_CHIA', 'ADMINISTRACION' => 'ADMINISTRACION', 'INGENIERIA' => 'INGENIERIA'));
        ?>
        <?php echo $form->error($model, 'sucursal'); ?>
    </div>
    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
    </div>


    <?php $this->endWidget(); ?>

</div><!-- form -->
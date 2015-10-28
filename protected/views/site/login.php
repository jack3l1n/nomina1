<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Iniciar sesión';
$this->breadcrumbs = array(
    'Iniciar sesión',
);
?>
<div class="parent">
    <div class="test">
        <div class="form">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'login-form',
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                ),
            ));
            ?>

            <div class="row">
                <?php echo $form->labelEx($model, 'Usuario'); ?>
                <?php echo $form->textField($model, 'Usuario'); ?>
                <?php echo $form->error($model, 'Usuario'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'Clave'); ?>
                <?php echo $form->passwordField($model, 'Clave'); ?>
                <?php echo $form->error($model, 'Clave'); ?>
            </div>

            <div class="row rememberMe">
                <?php echo $form->checkBox($model, 'rememberMe'); ?>
                <?php echo $form->label($model, 'rememberMe'); ?>
                <?php echo $form->error($model, 'rememberMe'); ?>

            </div>

            <div class="row buttons">
                <?php echo CHtml::submitButton('Iniciar sesión'); ?>
            </div>

            <?php $this->endWidget(); ?>
        </div><!-- form -->
    </div>
</div>

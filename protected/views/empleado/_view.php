<?php
/* @var $this EmpleadoController */
/* @var $data Empleado */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cedula')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Cedula), array('view', 'id'=>$data->Cedula)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Apellido')); ?>:</b>
	<?php echo CHtml::encode($data->Apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Edad')); ?>:</b>
	<?php echo CHtml::encode($data->Edad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Nacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Direccion')); ?>:</b>
	<?php echo CHtml::encode($data->Direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono_Fijo')); ?>:</b>
	<?php echo CHtml::encode($data->Telefono_Fijo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Celular')); ?>:</b>
	<?php echo CHtml::encode($data->Celular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
	<?php echo CHtml::encode($data->Email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Foto')); ?>:</b>
	<?php echo CHtml::encode($data->Foto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Cargo')); ?>:</b>
	<?php echo CHtml::encode($data->id_Cargo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Sucursal')); ?>:</b>
	<?php echo CHtml::encode($data->id_Sucursal); ?>
	<br />

	*/ ?>

</div>
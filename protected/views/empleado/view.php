<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	$model->Cedula,
);

$this->menu=array(
	array('label'=>'List Empleado', 'url'=>array('index')),
	array('label'=>'Create Empleado', 'url'=>array('create')),
	array('label'=>'Update Empleado', 'url'=>array('update', 'id'=>$model->Cedula)),
	array('label'=>'Delete Empleado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Cedula),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Empleado', 'url'=>array('admin')),
);
?>

<h1>View Empleado #<?php echo $model->Cedula; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Cedula',
		'Nombre',
		'Apellido',
		'Edad',
		'Fecha_Nacimiento',
		'Direccion',
		'Telefono_Fijo',
		'Celular',
		'Email',
		'Foto',
		'id_Cargo',
		'id_Sucursal',
	),
)); ?>

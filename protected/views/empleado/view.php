<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	$model->cedula,
);

$this->menu=array(
	array('label'=>'Lista Empleado', 'url'=>array('index')),
	array('label'=>'Crear Empleado', 'url'=>array('create')),
	array('label'=>'Actualización Empleado', 'url'=>array('update', 'id'=>$model->cedula)),
	array('label'=>'Eliminar Empleado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cedula),'confirm'=>'Está seguro de querer eliminar este registro?')),
	array('label'=>'Administrar Empleado', 'url'=>array('admin')),
);
?>

<h1>Ver Empleado #<?php echo $model->cedula; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cedula',
		'nombre',
		'apellido',
		'edad',
		'fecha_nacimiento',
		'direccion',
		'telefono',
		'celular',
		'email',
		'Fotoprincipal',
		'cargo',
		'sucursal',
	),
)); ?>

<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista Empleado', 'url'=>array('index')),
	array('label'=>'Administrar Empleado', 'url'=>array('admin')),
);
?>

<h1>Crear Empleado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
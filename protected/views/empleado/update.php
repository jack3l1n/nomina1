<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	$model->cedula=>array('view','id'=>$model->cedula),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Empleado', 'url'=>array('index')),
	array('label'=>'Crear Empleado ', 'url'=>array('create')),
	array('label'=>'Ver Empleado', 'url'=>array('view', 'id'=>$model->cedula)),
	array('label'=>'Administrar Empleado ', 'url'=>array('admin')),
);
?>

<h1>Actualización Empleado <?php echo $model->cedula; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
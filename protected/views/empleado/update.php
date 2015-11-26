<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	$model->Cedula=>array('view','id'=>$model->Cedula),
	'Update',
);

$this->menu=array(
	array('label'=>'List Empleado', 'url'=>array('index')),
	array('label'=>'Create Empleado', 'url'=>array('create')),
	array('label'=>'View Empleado', 'url'=>array('view', 'id'=>$model->Cedula)),
	array('label'=>'Manage Empleado', 'url'=>array('admin')),
);
?>

<h1>Update Empleado <?php echo $model->Cedula; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
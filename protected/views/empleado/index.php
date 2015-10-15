<?php
/* @var $this EmpleadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Empleados',
);

$this->menu=array(
	array('label'=>'Create Empleado', 'url'=>array('create')),
	array('label'=>'Manage Empleado', 'url'=>array('admin')),
);
?>

<div id="vista3">
<h1>Empleados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>
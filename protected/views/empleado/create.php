<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */

$this->breadcrumbs = array(
    'Empleados' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List Empleado', 'url' => array('index')),
    array('label' => 'Manage Empleado', 'url' => array('admin')),
);
?>


<h1>REGISTRO DE EMPLEADO</h1>

<form action="script.php" method="post">
    Nivel de Estudio:<br/>
    <select name="NIVEL DE ESTUDIO"> 
        <option value="---" selected="selected">---</option>
        <option value="PRIMARIA" selected="selected">PRIMARIA</option>
        <option value="BACHILLER" selected="selected">BACHILLER</option>
        <option value="TECNICO" selected="selected">TECNICO</option>
        <option value="TECNOLOGO" selected="selected">TECNOLOGO</option>
        <option value="UNIVERSITARIO" selected="selected">UNIVERSITARIO</option>
        <option value="PROFESIONAL" selected="selected">PROFESIONAL</option>
    </select>
</form>


<?php $this->renderPartial('_form', array('model' => $model)); ?>


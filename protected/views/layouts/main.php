<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="en">

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/fondos.css">
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>

        <div class="container" id="page">
            <div id="header">
                <center><img src="css/logo_nacional2.png" encabezado alt="Naional de Electricos HH Ltda." id="header-image" /></center>
                <div id="logo"><?php // echo CHtml::encode(Yii::app()->name);  ?>
                </div><!-- header -->

                <div id="mainmenu" class="menu">
                    <?php
                    $this->widget('zii.widgets.CMenu', array(
                        'items' => array(
                            array('label' => 'NOTINACIONAL', 'url' => array('/site/index')),
                            array('label' => 'INICIO DE SESION', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                            array('label' => 'CERRAR SESION (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                            array('label' => 'LISTADO DE EMPLEADOS', 'url' => array('/empleado/index')),
                            array('label' => 'SUGERENCIAS', 'url' => array('/site/contact')),
                        ),
                    ));
                    ?>
                </div><!-- mainmenu -->
                <?php if (isset($this->breadcrumbs)): ?>
                    <?php
                    $this->widget('zii.widgets.CBreadcrumbs', array(
                        'links' => $this->breadcrumbs,
                    ));
                    ?><!-- breadcrumbs -->
                <?php endif ?>

                <div class="container">
                    <?php echo $content; ?>
                </div>

                <div class="clear"></div>

                <div id="footer">
                    Copyright &copy; <?php echo date('Y'); ?> by Nacional de Electricos HH Ltda..<br/>
                    Todos los Derechos Reservados.<br/>
                    <?php echo Yii::powered(); ?>
                </div><!-- footer -->

            </div><!-- page -->

    </body>
</html>

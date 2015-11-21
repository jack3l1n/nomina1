<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>



<div id="vista1">
    <table width="100%" height="250px" cellspacing="1px" border="1px">
        <tr height="50px">
            <td colspan="2px">
                <table title="Banner" border="0">
                    <tr>
                        <td style="text-align: center; color: black" >

                            <h1><p>Bienvenido a tu Noticiero Web.</p></h1>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr height="200px">
            <td>
                <table title="Menu" border="0" width="100px">
                    <tr><td>Cumpleaños del Mes de Octubre</td></tr>
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/feliz-cumpleanos.gif" style="margin: 15px 0 "width="200" height="200"/>
                    Hoy les queremos desea un feliz dia que sea lleno de grandes sorpresas, 
                    felicidad, y de la compañia de sus seres queridos.
                    <td>Nancy Mendez</td>
                    <td>William Martinez</td>
                    <td>Dora Gomez</td>
                </table>
            </td>

            <td>
                <table title="Contenido" border="0" width="400px">
                    <tr>
                    <h2><center>Certificados de Calidad</center></h2>
                    Es grato para Nacional de Eléctricos informarles a todos nuestros clientes y proveedores sobre la renovación de la certificación del sistema de Gestión de Calidad, 
                    bajo la norma ISO 9001 versión 2008, obtenida en el mes de Marzo de 2014 y avalada por la compañía SGS, este logro busca brindar un mayor respaldo y confianza a las necesidades de nuestros clientes 
                    basado en la mejora continua de nuestros procesos.<br>

                    Igualmente les recordamos que estamos certificados en nuestras líneas de productos con la norma RETIE.

                    Línea de producto: Canaleta Metálica, Ducto Metálico
                    Línea de producto: Cajas Conduit, Cajas de Paso (de línea y especiales), Cajas para Breaker y Gabinetes1
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
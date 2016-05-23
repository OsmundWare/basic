<?php
/**
 * Created by PhpStorm.
 * User: OsmundWare
 * Date: 22/05/2016
 * Time: 19:02
 */
use yii\helpers\Url;
use yii\helpers\Html;

use yii\widgets\ActiveForm;
?>

<h1> Formulario</h1>

<?= $mensaje?>

<?= Html::beginForm(

    Url::toRoute("site/request"),  // action
    "get", // metodo
    ['class'=> 'form-inline'] //options
);

?>

<div class="form-group">
    <?= Html::label("introfuce tu nombre","nombre")?>
    <?= Html::textInput("nomre",null,["class"=>"form-control"])?>

</div>

<?= Html::submitButton("enviar nombre",["class"=>"btn btn-primary"])?>

<?= Html::endForm()?>


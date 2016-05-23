<?php
/**
 * Created by PhpStorm.
 * User: OsmundWare
 * Date: 08/05/2016
 * Time: 16:07
 */

    use yii\helpers\Html;
    use yii\jui\DatePicker;
?>

<h1> <?= $frase ?></h1>

<?php foreach($digitos as $serie):?>

        <p> <?= $serie ?></p>

<?php endforeach; ?>

<h1> <?= $get?></h1>
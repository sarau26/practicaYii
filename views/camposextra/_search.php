<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CamposextraSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="camposextra-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'ID_EXTERNO') ?>

    <?= $form->field($model, 'Compra') ?>

    <?= $form->field($model, 'Articulo') ?>

    <?= $form->field($model, 'Precio') ?>

    <?php // echo $form->field($model, 'Metodo_pago') ?>

    <?php // echo $form->field($model, 'Motivo_negatividad') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

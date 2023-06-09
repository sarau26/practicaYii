<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Cliente $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cliente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Cedula')->textInput(['maxlength' => true, 'autocomplete' => 'off']) ?>

    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true, 'autocomplete' => 'off']) ?>

    <?= $form->field($model, 'Telefono')->textInput(['maxlength' => true, 'autocomplete' => 'off']) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true, 'autocomplete' => 'off']) ?>

    <?= $form->field($model, 'Genero')->textInput(['maxlength' => true, 'autocomplete' => 'off']) ?>

    <?= $form->errorSummary($model, ['class' => 'alert alert-danger']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

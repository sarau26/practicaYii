<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Camposextra $model */
/** @var yii\widgets\ActiveForm $form */
/* @var $id int */  // Definición de la variable
?>
<?php
$model->ID_EXTERNO = $id;
?>
<div class="camposextra-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'ID_EXTERNO')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'Articulo')->dropDownList(['Mesa' => 'Mesa', 'Silla' => 'Silla', 'Repis' => 'Repisa', 'Espejo'=> 'Espejo']) ?>

    <?= $form->field($model, 'Precio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Metodo_pago')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
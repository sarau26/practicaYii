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
    
    <?= $form->field($model, 'ID_EXTERNO')->textInput() ?>

    <?= $form->field($model, 'Motivo_negatividad')->dropDownList(['Muy caro' => 'Muy caro', 'Se lo piensa mejor' => 'Se lo piensa mejor', 'No interesa' => 'No interesa']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Camposextra $model */
/* @var $ID int */  // Definición de la variable

$this->title = 'Datos de compra';
//$this->params['breadcrumbs'][] = ['label' => 'Camposextra', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campoextra-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form2', [
        'model' => $model,
        'id' => $ID,
    ]) ?>

</div>
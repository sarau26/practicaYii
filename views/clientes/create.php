<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Cliente $model */

$this->title = 'Ingresar datos';
//$this->params['breadcrumbs'][] = ['label' => 'Clientes'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

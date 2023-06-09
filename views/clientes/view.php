<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Cliente $model */

$this->title = $model->ID_EXTERNO;
$this->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cliente-view">

    <h1><?= Html::encode("¿Desea realizar una compra?") ?></h1>

    <p>
        <?= Html::a('Si', ['create2', 'ID_EXTERNO' => $model->ID_EXTERNO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('No', ['delete', 'ID_EXTERNO' => $model->ID_EXTERNO], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>


</div>

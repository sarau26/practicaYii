<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Camposextra $model */
/* @var $ID int */  // Definición de la variable

$this->title = 'Comprobacion';
//$this->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cliente-view">

    <h1><?= Html::encode("¿Desea realizar una compra?") ?></h1>

    <p>
        <?= Html::a('Si', ['create', 'ID_EXTERNO' => $ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('No', ['create2', 'ID_EXTERNO' => $ID], [
            'class' => 'btn btn-danger']) ?>
    </p>


</div>

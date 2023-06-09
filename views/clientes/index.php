<?php

use app\models\Cliente;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ClienteSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Clientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Ingresar Datos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'ID_EXTERNO',
            'Cedula',
            'Nombre',
            'Telefono',
            'Email:email',
            'Genero',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Cliente $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID_EXTERNO' => $model->ID_EXTERNO]);
                 }
            ],
        ],
    ]); ?>


</div>

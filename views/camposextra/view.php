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
<div class="camposextra-view">

    <h1><?= Html::encode("¿Desea realizar una compra?") ?></h1>

    <p>
        <?= Html::a('Si', ['create', 'ID_EXTERNO' => $ID], ['class' => 'btn btn-primary', 'id' => 'si-button']) ?>
        <?= Html::a('No', ['create2', 'ID_EXTERNO' => $ID], [
            'class' => 'btn btn-danger', 'id' => 'no-button']) ?>
    </p>
    <div id="formulario-container"></div>
    <script src="/practica/web/assets/84cba6ec/jquery.min.js"></script>

    <script>
        /*
    $(document).ready(function() {
    $('#no-button').click(function(event) {
        console.log('click');
        event.preventDefault(); 
        
        //Realiza una solicitud AJAX para obtener el contenido del formulario
        $.ajax({
        url: 'camposextra/create', 
        type: 'GET',
        success: function(response) {
            console.log(response);
            $('#formulario-container').html(response);
        },
        error: function() {
            alert('Error al cargar el formulario.');
        }
        });
    });
    });*/
    </script>


</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FincasInformacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gestion Fincas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fincas-informacion-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Nueva Finca', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'finca_id',
            'tipo_documento',
            'documento_finca',
            'nombre_finca',
            'telefono_finca',
            //'direccion_finca',
            //'usuario_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

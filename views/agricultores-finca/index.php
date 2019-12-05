<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AgricultoresFincaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Agricultores Fincas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agricultores-finca-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Agricultores Finca', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'agricultor_finca_id',
            [
                'attribute' => 'nombre_finca',
                'value' => 'finca.nombre_finca',
            ],
            [
                'attribute' => 'nombre',
                'value' => 'usuario.nombre',
            ],
            [
                'attribute' => 'operacion_nombre',
                'value' => 'operacion.operacion_nombre',
            ],
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

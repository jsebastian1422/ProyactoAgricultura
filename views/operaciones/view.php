<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Operaciones */

$this->title = $model->operacion_nombre;
$this->params['breadcrumbs'][] = ['label' => 'Gestion De Operaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->operacion_id;;
\yii\web\YiiAsset::register($this);
?>
<div class="operaciones-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->operacion_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->operacion_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'operacion_id',
            'operacion_nombre',
            [
                'attribute' => 'tipo_operacion',
                'value' => function ($model) {
                    return $model->tipo_operacion === '1' ? 'ADMINISTRATIVO': 'AGRARIA';
                }
            ],
            [
                'attribute' => 'estado',
                'value' => function ($model) {
                    return $model->estado === '1' ? 'ACTIVO': 'INACTIVO';
                }
            ],
        ],
    ]) ?>

</div>

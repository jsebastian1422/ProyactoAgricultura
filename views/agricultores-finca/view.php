<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AgricultoresFinca */

$this->title = $model->agricultor_finca_id;
$this->params['breadcrumbs'][] = ['label' => 'Agricultores Fincas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="agricultores-finca-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->agricultor_finca_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->agricultor_finca_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model->selectInfoView($model->usuario_id),
        'attributes' => [
            'agricultor_finca_id',
            'nombre_finca',
            'nombre',
            'operacion',
        ],
    ]) ?>

</div>

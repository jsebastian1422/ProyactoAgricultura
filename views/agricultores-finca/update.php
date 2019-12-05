<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AgricultoresFinca */

$this->title = 'Update Agricultores Finca: ' . $model->agricultor_finca_id;
$this->params['breadcrumbs'][] = ['label' => 'Agricultores Fincas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->agricultor_finca_id, 'url' => ['view', 'id' => $model->agricultor_finca_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="agricultores-finca-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

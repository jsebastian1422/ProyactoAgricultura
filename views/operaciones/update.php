<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Operaciones */

$this->title = 'Actualizar Operacion: ' . $model->operacion_id;
$this->params['breadcrumbs'][] = ['label' => 'Operaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->operacion_id, 'url' => ['view', 'id' => $model->operacion_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="operaciones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

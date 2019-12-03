<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FincasInformacion */

$this->title = 'Update Fincas Informacion: ' . $model->finca_id;
$this->params['breadcrumbs'][] = ['label' => 'Fincas Informacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->finca_id, 'url' => ['view', 'id' => $model->finca_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fincas-informacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

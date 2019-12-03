<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TiposDocumentos */

$this->title = 'Update Tipos Documentos: ' . $model->tipo_documento;
$this->params['breadcrumbs'][] = ['label' => 'Tipos Documentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tipo_documento, 'url' => ['view', 'id' => $model->tipo_documento]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipos-documentos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

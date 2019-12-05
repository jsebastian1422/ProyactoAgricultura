<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TiposDocumentos */

$this->title = 'Create Tipos Documentos';
$this->params['breadcrumbs'][] = ['label' => 'Tipos Documentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipos-documentos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

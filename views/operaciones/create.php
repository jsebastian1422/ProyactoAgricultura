<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Operaciones */

$this->title = 'Crear Nuevas Operaciones';
$this->params['breadcrumbs'][] = ['label' => 'Operaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operaciones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

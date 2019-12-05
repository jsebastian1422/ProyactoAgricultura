<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AgricultoresFinca */

$this->title = 'Create Agricultores Finca';
$this->params['breadcrumbs'][] = ['label' => 'Agricultores Fincas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agricultores-finca-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

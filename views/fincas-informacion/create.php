<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FincasInformacion */

$this->title = 'Crear Nueva Finca';
$this->params['breadcrumbs'][] = ['label' => 'Gestion Fincas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fincas-informacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

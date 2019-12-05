<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AgricultoresFincaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="agricultores-finca-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'agricultor_finca_id') ?>

    <?= $form->field($model, 'finca_id') ?>

    <?= $form->field($model, 'usuario_id') ?>

    <?= $form->field($model, 'operacion_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

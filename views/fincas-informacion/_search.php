<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FincasInformacionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fincas-informacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'finca_id') ?>

    <?= $form->field($model, 'tipo_documento') ?>

    <?= $form->field($model, 'documento_finca') ?>

    <?= $form->field($model, 'nombre_finca') ?>

    <?= $form->field($model, 'telefono_finca') ?>

    <?php // echo $form->field($model, 'direccion_finca') ?>

    <?php // echo $form->field($model, 'usuario_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsuariosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuarios-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'usuario_id') ?>

    <?= $form->field($model, 'usuario') ?>

    <?= $form->field($model, 'contrasena') ?>

    <?= $form->field($model, 'fecha_registro') ?>

    <?= $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'foto_usuario') ?>

    <?php // echo $form->field($model, 'rol_id') ?>

    <?php // echo $form->field($model, 'documento') ?>

    <?php // echo $form->field($model, 'tipo_documento') ?>

    <?php // echo $form->field($model, 'nombre') ?>

    <?php // echo $form->field($model, 'edad') ?>

    <?php // echo $form->field($model, 'sexo_id') ?>

    <?php // echo $form->field($model, 'celular') ?>

    <?php // echo $form->field($model, 'direccion') ?>

    <?php // echo $form->field($model, 'eps') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

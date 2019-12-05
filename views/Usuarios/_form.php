<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuarios-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= $form->field($model, 'usuario')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= $form->field($model, 'contrasena')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= $form->field($model, 'fecha_registro')->textInput() ?>
    </div>  
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= $form->field($model, 'estado')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= $form->field($model, 'foto_usuario')->textInput(['maxlength' => true]) ?>
    </div>  
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= $form->field($model, 'rol_id')->textInput() ?>
    </div>
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= $form->field($model, 'documento')->textInput(['maxlength' => true]) ?>
    </div>  
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= $form->field($model, 'tipo_documento')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>
    </div>  
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= $form->field($model, 'edad')->textInput() ?>
    </div>
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= $form->field($model, 'sexo_id')->textInput(['maxlength' => true]) ?>
    </div>  
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= $form->field($model, 'celular')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>
    </div> 
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= $form->field($model, 'eps')->textInput(['maxlength' => true])?>
    </div>
    <div class="col-12 col-md-6 col-4 col-md-12">
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>

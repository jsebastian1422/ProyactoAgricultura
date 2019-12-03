<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuarios-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'usuario')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'contrasena')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'fecha_registro')->textInput() ?>
    <?= $form->field($model, 'estado')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'foto_usuario')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'rol_id')->textInput() ?>
    <?= $form->field($usuariosInfoModel, 'documento')->textInput() ?>
    <?= $form->field($usuariosInfoModel, 'nombre')->textInput() ?>
    <?= $form->field($usuariosInfoModel, 'edad')->textInput() ?>


    <?= 
        //$documets=TiposDocumentos::find()->all();
        //$listData=ArrayHelper::map($documets,'tipo_documento','tipo_documento_nombre');
        $form->field($usuariosInfoModel, 'tipo_documento')->dropDownList(['prompt' => 'Seleccione Uno',  
            'CC' => 'CEDULA CIUDADANIA',
            'TI' => 'TARJETA IDENTIDAD']) ?>
    <?= 
        //$documets=TiposDocumentos::find()->all();
        //$listData=ArrayHelper::map($documets,'tipo_documento','tipo_documento_nombre');
        $form->field($usuariosInfoModel, 'sexo')->dropDownList(['prompt' => 'Seleccione Uno',  
            'H' => 'HOMBRE',
            'M' => 'MUJER']) ?>

    <?= $form->field($usuariosInfoModel, 'celular')->textInput() ?>
    <?= $form->field($usuariosInfoModel, 'direccion')->textInput() ?>
    <?= $form->field($usuariosInfoModel, 'eps')->textInput() ?>

   


    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

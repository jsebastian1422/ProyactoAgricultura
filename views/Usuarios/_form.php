<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\TiposDocumentos;
use app\models\Sexo;
use app\models\Roles;
use kartik\select2\Select2;

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
        <?= $form->field($model, 'contrasena')->passwordInput(['maxlength' => true]) ?>
    </div>
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= $form->field($model, 'fecha_registro')->textInput() ?>
    </div>  
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= 
            $form->field($model, 'estado')->widget(Select2::classname(), [
                'data' => ['1' => 'ACTIVO', '0' => 'INACTIVO'],
                'language' => 'de',
                'options' => ['placeholder' => 'SELECCIONE TIPO ROL'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]) 
        ?>
    </div>
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= $form->field($model, 'foto_usuario')->textInput(['maxlength' => true]) ?>
    </div>  
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= 
            $form->field($model, 'rol_id')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(Roles::find()->all(), 'rol_id', 'rol'),
                'language' => 'de',
                'options' => ['placeholder' => 'SELECCIONE TIPO ROL'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]) 
        ?>
    </div>
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= $form->field($model, 'documento')->textInput(['maxlength' => true]) ?>
    </div>  
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= 
            $form->field($model, 'tipo_documento')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(TiposDocumentos::find()->all(), 'tipo_documento', 'tipo_documento_nombre'),
                'language' => 'de',
                'options' => ['placeholder' => 'SELECCIONE TIPO DOCUMENTO'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]) 
        ?>
    </div>
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>
    </div>  
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= $form->field($model, 'edad')->textInput() ?>
    </div>
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= 
            $form->field($model, 'sexo_id')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(Sexo::find()->all(), 'sexo_id', 'sexo_descripcion'),
                'language' => 'de',
                'options' => ['placeholder' => 'SELECCIONE TIPO DOCUMENTO'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]) 
        ?>
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

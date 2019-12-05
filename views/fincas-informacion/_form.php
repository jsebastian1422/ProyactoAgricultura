<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\TiposDocumentos;

/* @var $this yii\web\View */
/* @var $model app\models\FincasInformacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fincas-informacion-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= 
            $form->field($model, 'tipo_documento')->dropDownList(
                ArrayHelper::map(TiposDocumentos::find()->all(), 'tipo_documento', 'tipo_documento_nombre'),
                ['prompt' => 'Seleccione Uno']
            )
        ?>
    </div>
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= $form->field($model, 'documento_finca')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= $form->field($model, 'nombre_finca')->textInput(['maxlength' => true]) ?>
    </div>  
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= $form->field($model, 'telefono_finca')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= $form->field($model, 'direccion_finca')->textInput(['maxlength' => true]) ?>
    </div>  
    <div class="col-12 col-md-6 col-4 col-md-4">
        <?= $form->field($model, 'usuario_id')->textInput(['readonly' => true, 'value' => Yii::$app->user->identity->usuario_id,'maxlength' => true]) ?>
    </div>
    <div class="col-12 col-md-12 col-12 col-md-12">
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    </div>  






    <?php ActiveForm::end(); ?>

</div>

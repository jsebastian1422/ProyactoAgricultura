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

    <?= 
        $form->field($model, 'tipo_documento')->dropDownList(
            ArrayHelper::map(TiposDocumentos::find()->all(), 'tipo_documento', 'tipo_documento_nombre'),
            ['prompt' => 'Seleccione Uno']
        )
    ?>

    <?= $form->field($model, 'documento_finca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre_finca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono_finca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion_finca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario_id')->textInput(['readonly' => true, 'value' => Yii::$app->user->identity->usuario_id,'maxlength' => true]) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

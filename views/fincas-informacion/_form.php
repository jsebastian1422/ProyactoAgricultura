<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\TiposDocumentos;

/* @var $this yii\web\View */
/* @var $model app\models\FincasInformacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fincas-informacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= 
        //use app\models\Country;
        $form->field($model, 'nombre_finca')->textInput(['maxlength' => true])
        /*$form->field($model, 'tipo_documento')->dropDownList(
            ArrayHelper::map(TiposDocumentos::find()->all(), 'tipo_documento', 'tipo_documento_name'),
            ['prompt' => 'Seleccione Uno']
        )*/
    ?>

    

    <?= $form->field($model, 'nombre_finca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono_finca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion_finca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

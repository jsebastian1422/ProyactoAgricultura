<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Operaciones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="operaciones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'operacion_nombre')->textInput(['maxlength' => true]) ?>

    
    <?= 
        //Crea select con filtro para estado
        $form->field($model, 'tipo_operacion')->widget(Select2::classname(), [
            'data' => ['1' => 'ADMINISTRATIVO', '2' => 'AGRARIA'] ,
            'language' => 'de',
            'options' => ['placeholder' => 'SELECCIONE OPERACION'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]) 
    ?>

    <?= 
        //Crea select con filtro para estado
        $form->field($model, 'estado')->widget(Select2::classname(), [
            'data' => ['1' => 'ACTIVO', '0' => 'INACTIVO'] ,
            'language' => 'de',
            'options' => ['placeholder' => 'SELECCIONE ESTADO'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]) 
    ?>
    <div class="form-group">
        <?= Html::submitButton('Guardar Operacion', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

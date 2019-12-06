<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\Usuarios;
use app\models\FincasInformacion;
use app\models\Operaciones;

/* @var $this yii\web\View */
/* @var $model app\models\AgricultoresFinca */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="agricultores-finca-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= 
        //Crea select con filtro para estado
        $form->field($model, 'finca_id')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(FincasInformacion::find()->all(), 'finca_id', 'nombre_finca'),
            'language' => 'de',
            'options' => ['placeholder' => 'SELECCIONE OPERACION'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]) 
    ?>

    <?= 
        //Crea select con filtro para estado
        $form->field($model, 'usuario_id')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Usuarios::find()->all(), 'usuario_id', 'nombre'),
            'language' => 'de',
            'options' => ['placeholder' => 'SELECCIONE USUARIO'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]) 
    ?>

    <?= 
        //Crea select con filtro para estado
        $form->field($model, 'operacion_id')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Operaciones::find()->all(), 'operacion_id', 'operacion_nombre'),
            'language' => 'de',
            'options' => ['placeholder' => 'SELECCIONE OPERACION'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]) 
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

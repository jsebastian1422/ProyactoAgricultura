<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="">
    <div class="col-12 col-sm-6 col-md-8 col-lg-9 col-xl-6 login-img">
    <img src="http://www.vinosycaminos.com/multimedia/images/SocuellamosPuestadesol.jpg" alt="">
    </div>
    <div class="col-12 col-sm-6 col-md-8 col-lg-9 col-xl-2 site-login">
        <!--<?= Html::encode($this->title) ?>-->
        <h1>Iniciar sesion</h1>
        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'layout' => 'horizontal',
            'fieldConfig' => [
                'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                'labelOptions' => ['class' => 'col-lg-1 control-label'],
            ],
        ]); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

           <!-- <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
            ]) ?>-->

            <div class="form-group">
                <div class="col-lg-offset-1 col-lg-11 btn-login">
                    <?= Html::submitButton('Iniciar sesion', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>

        <?php ActiveForm::end(); ?>

        <div class="col-lg-offset-1" style="color:#999;">
        </div>
    </div>
</div>

<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 login-img">
        <!---Agregar el nombre de la Empresa-->
        <div class="cont_empre">
            <h1 class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><?= Html::encode($this->title)?></h1>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 descrip_empresa">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui ipsam commodi assumenda hic sit ipsa excepturi ad! Voluptate ipsam sunt suscipit voluptatum similique maiores et voluptatem at obcaecati. Est, praesentium!</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque corporis, dolor vero distinctio reprehenderit velit ab, quibusdam expedita qui quidem libero quod minima quo sequi amet aspernatur cupiditate quam odit.</p>
            </div>
        </div>
    </div>
    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 site-login">
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

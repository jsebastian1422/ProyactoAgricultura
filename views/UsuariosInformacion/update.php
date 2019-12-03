<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsuariosInformacion */

$this->title = 'Update Usuarios Informacion: ' . $model->usuario_info;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios Informacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->usuario_info, 'url' => ['view', 'id' => $model->usuario_info]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="usuarios-informacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

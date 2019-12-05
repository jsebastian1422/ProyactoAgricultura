<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsuariosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuarios-index">
        <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Create Usuarios', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'usuario_id',
            'usuario',
            'tipo_documento',
            'documento',
            'nombre',
            'edad',
            //'contrasena',
            //'fecha_registro',
            'sexo_id',
            //'estado',
            //'foto_usuario',
            //'rol_id',
            //'celular',
            //'direccion',
            //'eps:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

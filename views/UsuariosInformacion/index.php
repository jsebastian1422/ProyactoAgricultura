<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsuariosInformacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios Informacions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuarios-informacion-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Usuarios Informacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'usuario_info',
            'usuario_id',
            'documento',
            'tipo_documento',
            'nombre',
            //'edad',
            //'sexo_id',
            //'celular',
            //'direccion',
            //'eps:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

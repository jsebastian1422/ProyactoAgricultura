<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FincasInformacion */

$this->title = 'Create Fincas Informacion';
$this->params['breadcrumbs'][] = ['label' => 'Fincas Informacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fincas-informacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelDocuments' => $modelDocuments,
    ]) ?>

</div>

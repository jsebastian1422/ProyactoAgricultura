<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use kartik\sidenav\SideNav;
use kartik\icons\Icon;

AppAsset::register($this);
Icon::map($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php    
    Icon::map($this, Icon::EL);
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    if (Yii::$app->user->isGuest) {
        $menuItems[] = [
            'label' => 'Login', 'url' => ['/site/login']
        ];
    }else{
        $menuItems[] = [
            'label' => 'Home', 'url' => ['/home']
        ];
        $menuItems[] = [
            'label' => 'Logout (' . Yii::$app->user->identity->usuario . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems
    ]);
    NavBar::end();
        if (!Yii::$app->user->isGuest) {
    ?>
    
    <?php
       //Crear los permisos del rol
       $rol = Yii::$app->user->identity->rol_id;
        switch ($rol) {
           case '1':
                $menuItemsSideVar[] = [
                    'url' => ['/home'],'label' => 'Home','icon' => 'home'
                ];
                $menuItemsSideVar[] = [
                    'url' => ['/usuarios'],'label' => 'Creacion Usuarios','icon' => 'user'
                ];
                $menuItemsSideVar[] = [
                    'url' => ['/fincas-informacion'],'label' => 'Creacion Fincas','icon' => 'book'
                ];
               break;
           default:
                $menuItemsSideVar[] = [
                    'url' => '#','label' => 'Home','icon' => 'home'
                ];
               break;
       }
    ?>
    <div class="container col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10" style="padding-left: 0px; padding-top:30px;">
        <div class="container col-xs-5 col-sm- col-lg-3 sidenav-wrap">
            <div class="">    
            <?php    
                echo SideNav::widget([
                    'type' => SideNav::TYPE_DEFAULT,
                    'items' => $menuItemsSideVar,
                ]);
            ?>
            </div>
        </div>    
        <div class="col-xs-7 col-sm-9 col-lg-10 body-panel-container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>
    <?php }else{?>
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    <?php }?>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Gestion Agricola<?= date('Y') ?></p>

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

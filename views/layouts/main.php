<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl; ?>/favicon.ico" type="image/x-icon" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('images/logo.jpg',array('height' => '40px', 'width' => '40px', 'style' => 'float: left; clear: left; margin-top: -9px;', 'alt' => 'ONGC Logo')).'&nbsp;&nbsp;Geophysical Services',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'encodeLabels' => false,
        'items' => [
            [
                'label' => '<span class="glyphicon glyphicon-globe"></span> Acquistion',
                'items' => [
                    ['label' => 'Chennai', 'url' => ['/site/acqchennai']],
                    ['label' => 'Dehradun', 'url' => ['/site/acqdehradun']],
                    ['label' => 'Jorhat', 'url' => ['/site/acqjorhat']],
                    ['label' => 'Kolkata', 'url' => ['/site/acqkolkata']],
                    ['label' => 'Mumbai', 'url' => ['/site/acqmumbai']],
                    ['label' => 'Vadodara', 'url' => ['/site/acqvadodara']],
                ],
            ],
            [
                'label' => '<span class="glyphicon glyphicon-wrench"></span> Processing',
                'items' => [
                    ['label' => 'Chennai', 'url' => ['/site/prochennai']],
                    ['label' => 'Jorhat', 'url' => ['/site/projorhat']],
                    ['label' => 'Kolkata', 'url' => ['/site/prokolkata']],
                    ['label' => 'Mumbai', 'url' => ['/site/promumbai']],
                    ['label' => 'Vadodara', 'url' => ['/site/provadodara']],
                ],
            ],
            [
                'label' => '<span class="glyphicon glyphicon-check"></span> Achievements',
                'url' => ['/site/achievement']
            ],
            [
                'label' => '<span class="glyphicon glyphicon-tree-deciduous"></span> HSE',
                'url' => ['/site/hse'],
            ],
            /*[
                'label' => '<span class="glyphicon glyphicon-user"></span> People',
                'url' => ['/site/people']
            ],*/
            [
                'label' => '<span class="glyphicon glyphicon-picture"></span> Gallery',
                'url' => ['/site/gallery']
            ],
            [
                'label' => '<span class="glyphicon glyphicon-book"></span> GeoDocs',
                'url' => null, 'linkOptions' => ['href' => 'http://10.205.134.143:8080/share/page/', 'target' => '_blank']
            ],
            /*Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )*/
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Geophysical Services, ONGC <?= date('Y') ?></p>

        <p class="pull-right">Designed &amp; Maintained by CGS Office, ONGC</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

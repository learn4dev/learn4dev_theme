<?php
/* @var $this \yii\web\View */
/* @var $content string */

use humhub\libs\LogoImage;
use yii\helpers\Html;
use humhub\modules\gallery\models\BaseGallery as Gallery;
use humhub\modules\gallery\models\Media;

\humhub\assets\AppAsset::register($this);


//$this->theme->publishResources();

$logo = $this->theme->getBaseUrl() . '/img/logo.png';
?>
<?php
$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <title><?= strip_tags($this->pageTitle); ?></title>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <?php $this->head() ?>
        <?= $this->render('head'); ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="row" id="top-menu-fixed">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8 col-sm-4" id="topbar-column-left">

                        <a href="<?= Yii::$app->homeUrl; ?>">
                            <img src="<?= $logo; ?>" alt="<?= Yii::t('base', 'Logo of {appName}', ['appName' => Html::encode(Yii::$app->name)]) ?>" id="img-logo"/>
                        </a>

                    </div>
                    <div class="col-xs-4 col-sm-8"  id="topbar-column-right">
                        <div id="topbar-column-right-top">
                            <div id ="topbar-first" class="topbar">
                                <div class="notifications">
                                    <?= \humhub\widgets\NotificationArea::widget(); ?>
                                </div>

                                <?php if (!Yii::$app->user->isGuest) { ?>
                                    <div class="nav topbar-actions pull-right">
                                        <?= \humhub\modules\user\widgets\AccountTopMenu::widget(); ?>
                                    </div>

                                <?php } ?>
                                <ul class="nav pull-right" id="search-menu-nav">

                                    <?= Yii::$app->user->isGuest ? \humhub\modules\user\widgets\AccountTopMenu::widget() : ''; ?> 
                                    <?= \humhub\widgets\TopMenuRightStack::widget() ?>
                                </ul>
                            </div>
                        </div>
                        <div id="topbar-column-right">
                            <div id="topbar-second" class="topbar">
                                <ul class="nav" id="top-menu-nav">
                                    <!-- load space chooser widget -->
                                    <?= \humhub\modules\space\widgets\Chooser::widget(); ?>
                                </ul>
                                <ul class="nav pull-right" id="top-menu-nav">
                                    <!-- load navigation from widget -->
                                    <?= \humhub\widgets\TopMenu::widget(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $content; ?>

        <footer class="footer">
            <div class="container">
                <div class="col-md-3">
                    The network for a great experience as a development practitioner.
                </div>

                <div class="col-md-3">
                    <h3>Get in Touch</h3>
                    <p>
                        <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> +32 (05) 2 505 37 85
                    </p>
                    <p>
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 
                    </p>
                    <p>
                        <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                    </p>
                </div>

                <div class="col-md-3">
                    <h3>Useful Resources</h3>
                </div>

                <div class="col-md-3">

                </div>

            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>

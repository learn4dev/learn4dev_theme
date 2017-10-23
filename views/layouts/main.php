<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

\humhub\assets\AppAsset::register($this);
$logo = $this->theme->getBaseUrl() . '/img/logo.png';
$youtubeLogo = $this->theme->getBaseUrl() . '/img/social/youtube.png';
$twitterLogo = $this->theme->getBaseUrl() . '/img/social/twitter.png';
$linkedinLogo = $this->theme->getBaseUrl() . '/img/social/linkedin.png';
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
                                    <?= \humhub\widgets\TopMenuRightStack::widget() ?>
                                    <?= Yii::$app->user->isGuest ? \humhub\modules\user\widgets\AccountTopMenu::widget() : ''; ?> 

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
                <div class="row">
                    <div class="col-xs-6 col-md-2" style="padding-left:0">
                        <h3>Follow Us</h3>
                        <a href="https://www.youtube.com/channel/UC49bQph1vAOUr5AxAVAQ0Lw">
                            <img class="social-img" src="<?= $youtubeLogo; ?>" alt="<?= Yii::t('base', 'Logo of {appName}', ['appName' => Html::encode(Yii::$app->name)]) ?>" id="img-logo"/>
                        </a>
                        <a href="https://twitter.com/learn4d">
                            <img class="social-img" src="<?= $twitterLogo; ?>" alt="<?= Yii::t('base', 'Logo of {appName}', ['appName' => Html::encode(Yii::$app->name)]) ?>" id="img-logo"/>
                        </a>
                        <a href="https://www.linkedin.com/company/learn4dev">
                            <img class="social-img" src="<?= $linkedinLogo; ?>" alt="<?= Yii::t('base', 'Logo of {appName}', ['appName' => Html::encode(Yii::$app->name)]) ?>" id="img-logo"/>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <h3>Legal Notice</h3>  
                        <ul style="margin-bottom: 50px;">                   
                            <li><?= Html::a('Terms and Conditions', ['/public/legal/terms-and-conditions']) ?></li>
                            <li><?= Html::a('Cookies', ['/public/legal/cookies']) ?></li>
                        </ul> 
                    </div>
                    <div class="col-xs-hidden col-md-8">
                        <div class="container">
                            <h3>Send us an e-mail</h3>  
                            <form id ="contactform">
                                <div class="col-md-3 form-line">
                                    <div class="form-group">
                                        <label for="exampleInputUsername">Your name</label>
                                        <input type="text" class="form-control" id="" placeholder=" Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail">Email Address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id">
                                    </div>	
                                    <div class="form-group">
                                        <label for="telephone">Occupation</label>
                                        <input type="tel" class="form-control" id="telephone" placeholder=" Your affiliation with the project">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for ="description"> Message</label>
                                        <textarea  rows="5" class="form-control" id="description" placeholder="Enter Your Message"></textarea>
                                    </div>
                                    <div>

                                        <button type="button" class="btn btn-primary submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>

                </div>

            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>

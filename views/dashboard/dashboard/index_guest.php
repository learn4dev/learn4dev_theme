<?php ?>
<style>
    body {padding-top: 120px;
    }
    .img-responsive{
        padding-bottom: 50px;
    }
</style>
<?php
$splash = $this->theme->getBaseUrl() . '/img/splash.jpg';
?>
<div class="img-responsive" id="splash">
    <h3>Welcome to<br> learn4dev<br><span>Your gateway for learning opportunities in the development sector.  </span></h3>


    <?= \yii\helpers\Html::img($splash) ?>

    <div id="splash-bg">

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?= \humhub\modules\dashboard\widgets\DashboardContent::widget(); ?>
        </div>
        <div class="col-md-4 layout-sidebar-container">
            <?php
            echo \humhub\modules\calendar\widgets\UpcomingEvents::widget();
            echo \humhub\modules\dashboard\widgets\Sidebar::widget([
                'widgets' => [

                    [
                        \humhub\modules\learn4dev\widgets\LearnSpaces::className(),
                        ['showMoreButton' => true],
                        ['sortOrder' => 400]
                    ],
                    [
                        \humhub\modules\learn4dev\widgets\ExpertSpaces::className(),
                        ['aside' => true],
                        ['showMoreButton' => true],
                        ['sortOrder' => 400]
                    ],
                ]
            ]);
            ?>
        </div>
    </div>
</div>

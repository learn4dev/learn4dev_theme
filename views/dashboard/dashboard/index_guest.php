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
<div class="img-responsive" style="margin-top:-20px;">
    <?= \yii\helpers\Html::img($splash) ?>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?= \humhub\modules\dashboard\widgets\DashboardContent::widget(); ?>
        </div>
        <div class="col-md-4 layout-sidebar-container">
            <?php
            echo \humhub\modules\dashboard\widgets\Sidebar::widget([
                'widgets' => [
                    [
                        \humhub\modules\directory\widgets\NewMembers::className(),
                        ['showMoreButton' => true],
                        ['sortOrder' => 300]
                    ],
                    [
                        \humhub\modules\directory\widgets\NewSpaces::className(),
                        ['showMoreButton' => true],
                        ['sortOrder' => 400]
                    ],
                ]
            ]);
            ?>
        </div>
    </div>
</div>

<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>
    <div class="container-fluid">
        <div class="row" style="height: 100vh;" >
          
        <nav id="sidebar" class="col-md-2 col-lg-2 d-md-block sidebar collapse border flex-column h-100 ">
                <div class="position-sticky">
                    <div class="list-group list-group-flush mx-3 mt-4">
                        <div class="nav-item">
                            <h5 class="nav-title">Naloga</h5>
                        </div>
                        <a class="nav-item">
                            <?= Html::a('Home', ['site/index'], ['class' => 'nav-link']) ?>
                        </a>
                        <a class="nav-item">
                            <?= Html::a('About', ['site/about'], ['class' => 'nav-link']) ?>
                        </a>
                        <a class="nav-item">
                            <?= Html::a('Contact', ['site/contact'], ['class' => 'nav-link']) ?>
                        </a>
                        <a class="nav-item">
                            <?= Html::a('Progress', ['tom-project/progress'], ['class' => 'nav-link']) ?>
                        </a>
                    </div>
                </div>
            </nav>

            <main class="col-md-8 ms-sm-auto col-lg-8 px-md-4 border">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2"><?= Html::encode($this->title) ?></h1>
                </div>
                <?= $content ?>
            </main>

            <aside class="col-md-2 col-lg-2 d-md-block sidebar border">
                <div class="position-sticky">
                    Third column
                </div>
            </aside>
        </div>
    </div>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
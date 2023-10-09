<?php


$this->title = Yii::t('app', 'Progress Bar Example');
?>

<div class="container">
    <div class="project-item">
        <h4><?= $name ?></h4>
        <div class="progress m-3">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?= $percentage ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $percentage ?>%;">
                <?= $percentage ?>%
            </div>
        </div>
    </div>
</div>
<?php


$this->title = Yii::t('app', 'Progress Bar Example');
?>

<div class="container">
    <?php foreach ($projects as $project) : ?>
        <div class="project-item">
            <h4><?= $project->name ?></h4>
            <?php
            $projectPercentage = $percentages[$project->name];
            ?>
            <div class="progress m-3">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?= $projectPercentage ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $projectPercentage ?>%;">
                    <?= $projectPercentage ?>%

                </div>
            </div>
        <?php endforeach; ?>
        </div>
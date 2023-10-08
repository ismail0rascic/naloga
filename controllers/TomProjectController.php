<?php

namespace app\controllers;

use app\models\TomProject;

class TomProjectController extends \yii\web\Controller
{
    public function actionProgress()
    {
        $projects = TomProject::find()->all();
        $percentages = [];
        foreach ($projects as $project) {
            $projectTotal = 0;
            $numReports = 0;

            foreach ($project->tomTasks as $task) {
                $taskPercent = 0;
                $numReports += count($task->tomReports);

                foreach ($task->tomReports as $report) {
                    $taskPercent += $report->percent_done;
                }
                $projectTotal += $taskPercent;
            }

            $projectTotal = $projectTotal / $numReports;

            $percentages[$project->name] = $projectTotal;
        };

        return $this->render('progress', ['projects' => $projects, 'percentages' => $percentages]);
    }
}

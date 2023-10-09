<?php

namespace app\controllers;

use app\models\TomProject;
use Yii;

class TomProjectController extends \yii\web\Controller
{
    public function actionProgress()
    {
        $result = TomProject::find()->progress(1);

        $name = $result['project_name'];
        $percentage = $result['project_percentage'];
        return $this->render('progress', ['name' => $name, 'percentage' => $percentage]);
    }
}

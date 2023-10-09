<?php

namespace app\models;

use Yii;

class ProgressQuery extends \yii\db\ActiveRecord
{
    public function progress($projectId)
    {
        $connection = Yii::$app->db;

        $sql = "SELECT
            p.name AS project_name,
            IFNULL(SUM(t.percent_done), 0) AS project_percentage
        FROM
            tom_project p
        LEFT JOIN (
            SELECT
                t.project_id,
                CASE
                    WHEN COUNT(r.id) = 0 THEN 0
                    ELSE SUM(r.percent_done) / COUNT(r.id)
                END AS percent_done
            FROM
                tom_task t
            LEFT JOIN tom_report r ON t.id = r.task_id
            GROUP BY
                t.project_id
        ) t ON p.id = t.project_id
        WHERE
            p.id = :projectId";

        return $connection->createCommand($sql, [':projectId' => $projectId])->queryOne();
    }
    
}

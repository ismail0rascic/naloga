<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tom_report".
 *
 * @property int $id
 * @property int|null $task_id
 * @property string|null $name
 * @property int|null $percent_done
 *
 * @property TomTask $task
 */
class TomReport extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tom_report';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task_id', 'percent_done'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['task_id'], 'exist', 'skipOnError' => true, 'targetClass' => TomTask::class, 'targetAttribute' => ['task_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'task_id' => 'Task ID',
            'name' => 'Name',
            'percent_done' => 'Percent Done',
        ];
    }

    /**
     * Gets query for [[Task]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTask()
    {
        return $this->hasOne(TomTask::class, ['id' => 'task_id']);
    }
}

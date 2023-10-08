<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tom_task".
 *
 * @property int $id
 * @property int|null $project_id
 * @property string|null $name
 * @property string $start_date
 * @property string $end_date
 *
 * @property TomProject $project
 * @property TomReport[] $tomReports
 */
class TomTask extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tom_task';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id'], 'integer'],
            [['start_date', 'end_date'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => TomProject::class, 'targetAttribute' => ['project_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_id' => 'Project ID',
            'name' => 'Name',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
        ];
    }

    /**
     * Gets query for [[Project]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(TomProject::class, ['id' => 'project_id']);
    }

    /**
     * Gets query for [[TomReports]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTomReports()
    {
        return $this->hasMany(TomReport::class, ['task_id' => 'id']);
    }
}

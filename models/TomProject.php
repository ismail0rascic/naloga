<?php

namespace app\models;


use Yii;

/**
 * This is the model class for table "tom_project".
 *
 * @property int $id
 * @property string|null $name
 *
 * @property TomTask[] $tomTasks
 */
class TomProject extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tom_project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[TomTasks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTomTasks()
    {
        return $this->hasMany(TomTask::class, ['project_id' => 'id']);
    }
 
     public static function find()
    {
        return new ProgressQuery();
    }
}

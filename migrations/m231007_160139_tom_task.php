<?php

use yii\db\Migration;

/**
 * Class m231007_160139_tom_task
 */
class m231007_160139_tom_task extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tom_task', [
            'id' => $this->primaryKey(),
            'project_id' => $this->integer(),
            'name' => $this->string(255),
            'start_date' => $this->timestamp(6)->defaultExpression('CURRENT_TIMESTAMP(6)'),
            'end_date' => $this->timestamp(6)->defaultExpression('CURRENT_TIMESTAMP(6)')
        ]);

        $this->addForeignKey('fk_task_project', 'tom_task', 'project_id', 'tom_project', 'id', 'CASCADE', 'CASCADE');


        $this->batchInsert('tom_task', ['id', 'project_id', 'name', 'start_date', 'end_date'], [
            [1, 1, 'Naloga 1', '2014-05-23 00:00:00', '2014-05-25 23:00:00'],
            [2, 1, 'Naloga 2', '2014-05-23 00:00:00', '2014-06-23 23:00:00'],
            [3, 1, 'Naloga 3', '2014-05-23 00:00:00', '2014-05-26 23:00:00'],
            [4, 2, 'Naloga 1', '2014-05-23 00:00:00', '2014-06-23 23:00:00'],
            [5, 3, 'Naloga 1', '2014-05-23 00:00:00', '2014-05-23 23:00:00'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231007_160139_tom_task cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231007_160139_tom_task cannot be reverted.\n";

        return false;
    }
    */
}

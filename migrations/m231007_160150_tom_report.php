<?php

use yii\db\Migration;

/**
 * Class m231007_160150_tom_report
 */
class m231007_160150_tom_report extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('tom_report', [
            'id' => $this->primaryKey(),
            'task_id' => $this->integer(),
            'name' => $this->string(255),
            'percent_done' => $this->integer(),
        ]);

        $this->addForeignKey('fk_report_task', 'tom_report', 'task_id', 'tom_task', 'id', 'CASCADE', 'CASCADE');
        
        $this->batchInsert('tom_report', ['id', 'task_id', 'name', 'percent_done'], [
            [1, 1, 'Porocilo 1', 100],
            [2, 2, 'Porocilo 2', 30],
            [3, 2, 'Porocilo 3', 20],
            [4, 5, 'Porocilo 1', 100],
            [5, 4, 'Porocilo 1', 100],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231007_160150_tom_report cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231007_160150_tom_report cannot be reverted.\n";

        return false;
    }
    */
}

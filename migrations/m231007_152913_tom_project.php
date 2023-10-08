<?php

use yii\db\Migration;

/**
 * Class m231007_152913_tom_project
 */
class m231007_152913_tom_project extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tom_project', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
        ]);

    
        $this->batchInsert('tom_project', ['id', 'name'], [
            [1, 'Projekt'],
            [2, 'Projekt 2'],
            [3, 'Projekt 3'],
        ]);
        
        
        
    
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231007_152913_tom_project cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231007_152913_tom_project cannot be reverted.\n";

        return false;
    }
    */
}

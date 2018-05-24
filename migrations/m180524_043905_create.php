<?php

use yii\db\Migration;

/**
 * Class m180524_043905_create
 */
class m180524_043905_create extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
$this->createTable('category',[
    'id'=>$this->primaryKey(),
    'title'=>$this->string(),
    'content'=>$this->text(),
]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180524_043905_create cannot be reverted.\n";

        return false;
    }
    */
}

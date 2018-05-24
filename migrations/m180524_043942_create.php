<?php

use yii\db\Migration;

/**
 * Class m180524_043942_create
 */
class m180524_043942_create extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product',[
            'id'=>$this->primaryKey(),
            'title'=>$this->string(),
            'description'=>$this->text(),
            'content'=>$this->text(),
            'price'=>$this->integer(),
            'category_id'=>$this->integer(),
            'active'=>$this->boolean(),
            'amount'=>$this->integer(),
            'slug'=>$this->string(),
        ]);
      $this->addForeignKey('product_to_cat','product','category_id','category','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropTable('product');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180524_043942_create cannot be reverted.\n";

        return false;
    }
    */
}

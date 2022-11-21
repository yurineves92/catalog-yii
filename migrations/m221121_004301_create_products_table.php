<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m221121_004301_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(20)->notNull(),
            'description' => $this->string(20)->notNull(),
            'price' => $this->string(20)->notNull(),
            'cover' => $this->string(20)->notNull(),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products}}');
    }
}

<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products_categories}}`.
 */
class m221121_012159_create_products_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products_categories}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer()->notNull(),
            'category_id' => $this->integer()->notNull(),
        ]);

        $this->addForeignKey('fk_product_id', '{{%products_categories}}', 'product_id', '{{%products}}', 'id');
        $this->addForeignKey('fk_category_id', '{{%products_categories}}', 'category_id', '{{%categories}}', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_product_id', '{{%products_categories}}');
        $this->dropForeignKey('fk_category_id', '{{%products_categories}}');
        $this->dropTable('{{%products_categories}}');
    }
}

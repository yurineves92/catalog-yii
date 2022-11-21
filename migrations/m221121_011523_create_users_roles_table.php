<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users_roles}}`.
 */
class m221121_011523_create_users_roles_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users_roles}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'role_id' => $this->integer()->notNull(),
        ]);


        $this->addForeignKey('fk_users_id', '{{%users_roles}}', 'user_id', '{{%users}}', 'id');
        $this->addForeignKey('fk_roles_id', '{{%users_roles}}', 'role_id', '{{%roles}}', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_users_id', '{{%users_roles}}');
        $this->dropForeignKey('fk_roles_id', '{{%users_roles}}');
        $this->dropTable('{{%users_roles}}');
    }
}

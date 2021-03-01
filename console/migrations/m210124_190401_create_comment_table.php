<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%comment}}`.
 */
class m210124_190401_create_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comment}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(512),
            'body' => $this->text(),
            'post_id' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
        ]);
        $this->addForeignKey(
            'fk_comment_user_created_by',
            '{{%comment}}',
            'created_by',
            '{{%user}}',
            'id'
        ); $this->addForeignKey(
            'fk_comment_post_post_id',
            '{{%comment}}',
            'post_id',
            '{{%post}}',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_comment_user_created_by', '{{%comment}}');
        $this->dropForeignKey('fk_comment_post_post_id', '{{%comment}}');
        $this->dropTable('{{%comment}}');
    }
}

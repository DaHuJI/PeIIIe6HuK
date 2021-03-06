<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tag`.
 */
class m180316_151127_create_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('tag', [ 
            'id' => $this->primaryKey(), 
            'name' => $this->string(64)->notNull()->unique(), 
            'created_at' => $this->datetime()->notNull(), 
            'updated_at' => $this->datetime(), 
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('tag');
    }
}

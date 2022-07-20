<?php

use yii\db\Migration;

/**
 * Class m220720_105651_addMenuTable
 */
class m220720_105651_addMenuTable extends Migration
{
	/**
	 * {@inheritdoc}
	 */
	public function safeUp()
	{
        $this->createTable('menu', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->unique(),
            'label' => $this->string(),
        ]);

        $this->createTable('menu_item', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'menu_id' => $this->integer()->notNull(),
            'lft' => $this->integer()->notNull(),
            'rgt' => $this->integer()->notNull(),
            'depth' => $this->integer()->notNull(),
            'position' => $this->integer()->notNull()->defaultValue(0),
            'url' => $this->string(),
        ]);
    }

	/**
	 * {@inheritdoc}
	 */
	public function safeDown()
	{
        $this->dropTable('menu_item');
        $this->dropTable('menu');
	}
}

<?php

use yii\db\Migration;
use app\traits\migrations\CreateTableOptions;

/**
 * Handles the creation of table `{{%page}}`.
 */
class m221214_220558_create_page_table extends Migration
{
	use CreateTableOptions;

	/**
	 * {@inheritdoc}
	 */
	public function safeUp()
	{
		$this->createTable('{{%page}}', [
			'id' => $this->primaryKey()->notNull(),
			'link' => $this->string()->notNull()->unique(),
			'name' => $this->string()->notNull(),
			'title' => $this->string(),
			'text' => $this->text(),
			'meta_title' => $this->string(),
			'meta_description' => $this->text(),
		], $this->createTableOptions());
	}

	/**
	 * {@inheritdoc}
	 */
	public function safeDown()
	{
		$this->dropTable('{{%page}}');
	}
}

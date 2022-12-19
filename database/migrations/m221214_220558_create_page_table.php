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
		], $this->createTableOptions());

        $this->createTable('{{%page_lang}}', [
            'id' => $this->primaryKey(),
            'page_id' => $this->integer(),
            'language' => $this->string(),
            'title' => $this->string(),
            'text' => $this->text(),
            'meta_title' => $this->string(),
            'meta_description' => $this->text(),
        ], $this->createTableOptions());

        $this->addForeignKey(
            'fk-page_id',
            'page_lang',
            'page_id',
            'page',
            'id',
            'CASCADE',
            'CASCADE'
        );
	}

	/**
	 * {@inheritdoc}
	 */
	public function safeDown()
	{
        $this->dropForeignKey('fk-page_id', '{{%menu_lang}}');
		$this->dropTable('{{%page}}');
        $this->dropTable('{{%page_lang}}');
	}
}

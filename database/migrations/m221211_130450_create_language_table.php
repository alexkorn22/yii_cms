<?php

use yii\db\Migration;
use app\traits\migrations\CreateTableOptions;

/**
 * Handles the creation of table `{{%language}}`.
 */
class m221211_130450_create_language_table extends Migration
{
	use CreateTableOptions;

	/**
	 * {@inheritdoc}
	 */
	public function safeUp()
	{
		$this->createTable('{{%language}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'label' => $this->string(),
            'code' => $this->string(),
            'visible' => $this->boolean()->defaultValue(false),
            'position' => $this->integer()->defaultValue(1)->notNull(),
		], $this->createTableOptions());

        $this->batchInsert('language', ['name', 'label', 'code', 'visible', 'position'], [
            ['Русский', 'RU', 'ru', 1, 1]
        ]);
	}

	/**
	 * {@inheritdoc}
	 */
	public function safeDown()
	{
		$this->dropTable('{{%language}}');
	}
}

<?php

use app\models\activeRecord\MenuItem;
use yii\db\Migration;

/**
 * Class m220720_122439_addMainMenu
 */
class m220720_122439_addMainMenu extends Migration
{
	/**
	 * {@inheritdoc}
	 */
	public function safeUp()
	{
        $this->insert('menu' , ['name' => 'Main', 'label' => 'Основное']);

        $model = new MenuItem();
        $model->menu_id = 1;
        $model->name = 'Root';
        $model->validate();
        $model->makeRoot();
	}

	/**
	 * {@inheritdoc}
	 */
	public function safeDown()
	{
		return true;
	}
}

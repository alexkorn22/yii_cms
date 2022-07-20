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
        $this->insert('menu' , ['name' => 'Main']);

        $model = new MenuItem();
        $model->menu_id = 1;
        $model->name = 'Root';
        $model->validate();
        $model->makeRoot();

        $this->insert('menu' , ['name' => 'Main 2']);

        $model = new MenuItem();
        $model->menu_id = 2;
        $model->name = 'Root 2';
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

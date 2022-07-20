<?php

namespace app\models\activeRecord;

use app\models\activeQuery\MenuItemQuery;
use creocoder\nestedsets\NestedSetsBehavior;
use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "menu_item".
 *
 * @property int $id
 * @property string $name
 * @property int $menu_id
 * @property int $lft
 * @property int $rgt
 * @property int $depth
 * @property int $position
 * @property string $url
 *
 * @mixin NestedSetsBehavior
 */
class MenuItem extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return 'menu_item';
    }

    public static function find(): MenuItemQuery
    {
        return new MenuItemQuery(get_called_class());
    }

    public function behaviors(): array
    {
        return [
            'tree' => [
                'class' => NestedSetsBehavior::class,
                'treeAttribute' => 'menu_id',
                // 'leftAttribute' => 'lft',
                // 'rightAttribute' => 'rgt',
                // 'depthAttribute' => 'depth',
            ],
        ];
    }

    public function transactions(): array
    {
        return [
            self::SCENARIO_DEFAULT => self::OP_ALL,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['name', 'menu_id'], 'required'],
            [['menu_id', 'lft', 'rgt', 'depth', 'position'], 'integer'],
            [['name', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'menu_id' => Yii::t('app', 'Vty'),
            'lft' => Yii::t('app', 'Lft'),
            'rgt' => Yii::t('app', 'Rgt'),
            'depth' => Yii::t('app', 'Depth'),
            'position' => Yii::t('app', 'Position'),
            'url' => Yii::t('app', 'Url'),
        ];
    }
}

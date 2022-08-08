<?php

namespace app\models\activeRecord;

use app\models\activeQuery\MenuItemQuery;
use creocoder\nestedsets\NestedSetsBehavior;
use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

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
 * @property-read MenuItem parent
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

    public function fields(): array
    {
        return ArrayHelper::merge(parent::fields(), [
            'parentId',
        ]);
    }

    /**
     * Get parent's ID
     * @return int
     */
    public function getParentId(): ?int
    {
        $parent = $this->parent;
        return $parent ? $parent->id : null;
    }

    /**
     * Get parent's node
     * @return array|\yii\db\ActiveQuery|ActiveRecord
     */
    public function getParent()
    {
        return $this->parents(1)->one();
    }

    /**
     * Get a full tree as a list, except the node and its children
     * @param  integer $node_id node's ID
     * @return array array of node
     */
    public static function getTree($menuId, $node_id = 0)
    {
        // don't include children and the node
        $children = [];

        if ( ! empty($node_id))
            $children = array_merge(
                self::findOne($node_id)->where(['menu_id' => $menuId])->children()->column(),
                [$node_id]
            );

        $rows = self::find()
            ->select('id, name, depth')
            ->where(['NOT IN', 'id', $children])
            ->andWhere(['menu_id' => $menuId])
            ->orderBy('lft, position')
            ->all();

        $return = [];
        foreach ($rows as $row)
            $return[$row->id] = str_repeat('---', $row->depth) . ' ' . $row->name;

        return $return;
    }
}

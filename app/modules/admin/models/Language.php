<?php

namespace app\modules\admin\models;

use app\traits\models\WithVisible;
use Yii;

/**
 * This is the model class for table "language".
 *
 * @property int $id
 * @property string $label
 * @property string $code
 * @property int $visible
 * @property int $position
 */
class Language extends \yii\db\ActiveRecord
{
    use WithVisible;

    const VISIBLE_FALSE = 0;
    const VISIBLE_TRUE = 1;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'language';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['visible', 'default', 'value' => self::VISIBLE_FALSE],
            ['visible', 'in', 'range' => [self::VISIBLE_TRUE, self::VISIBLE_FALSE]],
            [['position'], 'integer'],
            [['visible'], 'boolean'],
            [['label', 'code'], 'string', 'max' => 255],
            [['label'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'label' => 'Label',
            'code' => 'Code',
            'visible' => 'Visible',
            'position' => 'Position',
        ];
    }

    /**
     * List of language visible aliases
     *
     * @return array
     */
    public static function getVisibleList()
    {
        return [
            static::VISIBLE_TRUE  => 'Visible',
            static::VISIBLE_FALSE => 'Hide',
        ];
    }
}

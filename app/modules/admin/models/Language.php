<?php

namespace app\modules\admin\models;

use app\components\enums\VisibleEnum;
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
            ['visible', 'default', 'value' => VisibleEnum::HIDDEN],
            ['visible', 'in', 'range' => [VisibleEnum::VISIBLE, VisibleEnum::HIDDEN]],
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
}

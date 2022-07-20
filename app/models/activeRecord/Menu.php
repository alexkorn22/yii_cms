<?php

namespace app\models\activeRecord;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $name
 * @property string $label
 */
class Menu extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['name', 'label'], 'string', 'max' => 255],
            [['name'], 'unique'],
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
            'label' => Yii::t('app', 'Label'),
        ];
    }
}

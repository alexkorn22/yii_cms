<?php

namespace app\modules\admin\models;

use app\traits\models\LangTrait;
use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "page".
 *
 * @property int $id
 * @property string $link
 * @property string $name
 *
 * @property PageLang[] $pageLangs
 */
class Page extends ActiveRecord
{
    use LangTrait;

    public function behaviors()
    {
        $behaviors = [];

        return array_merge(
            $behaviors,
            $this->langBehaviors(['title', 'text', 'meta_title', 'meta_description'])
        );
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['link', 'name'], 'required'],
            ['link', 'match',
                'pattern' => '/^[a-z0-9_-]+$/',
                'message' => 'Link can only contain alphanumeric characters, underscores and dashes.'],
            [['link', 'name'], 'string', 'max' => 255],
            [['link'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'link' => 'Link',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPageLangs()
    {
        return $this->hasMany(PageLang::className(), ['page_id' => 'id']);
    }
}

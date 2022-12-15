<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "page".
 *
 * @property int $id
 * @property string $link
 * @property string $name
 * @property string $title
 * @property string $text
 * @property string $meta_title
 * @property string $meta_description
 */
class Page extends \yii\db\ActiveRecord
{
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
            [['text', 'meta_description'], 'string'],
            [['link', 'name', 'title', 'meta_title'], 'string', 'max' => 255],
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
            'title' => 'Title',
            'text' => 'Text',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
        ];
    }
}

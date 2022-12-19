<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "page_lang".
 *
 * @property int $id
 * @property int $page_id
 * @property string $language
 * @property string $title
 * @property string $text
 * @property string $meta_title
 * @property string $meta_description
 *
 * @property Page $page
 */
class PageLang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'page_lang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['page_id'], 'integer'],
            [['text', 'meta_description'], 'string'],
            [['language', 'title', 'meta_title'], 'string', 'max' => 255],
            [['page_id'], 'exist', 'skipOnError' => true, 'targetClass' => Page::class, 'targetAttribute' => ['page_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'page_id' => 'Page ID',
            'language' => 'Language',
            'title' => 'Title',
            'text' => 'Text',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPage()
    {
        return $this->hasOne(Page::class, ['id' => 'page_id']);
    }
}

<?php

namespace app\modules\admin\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "source_message".
 *
 * @property int $id
 * @property string $category
 * @property string $message
 *
 * @property Message[] $messages
 */
class SourceMessage extends \yii\db\ActiveRecord
{
    public $languages;

    public function __construct($config = [])
    {
        foreach (Yii::$app->getUrlManager()->languages as $one) {
            $config['languages'][$one] = null;
        }
        parent::__construct($config);
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'source_message';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['message'], 'string'],
            [['category'], 'string', 'max' => 255],
            ['languages', 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'message' => 'Message',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMessages()
    {
        return $this->hasMany(Message::class, ['id' => 'id']);
    }

    public function getTranslations()
    {
        return ArrayHelper::map($this->messages, 'language', 'translation');
    }

    public function getTranslation($lang)
    {
        return (isset($this->translations[$lang])) ? $this->translations[$lang] : null;
    }

    public function afterFind()
    {
        foreach ($this->languages as $key => $one) {
            $this->languages[$key] = $this->getTranslation($key);
        }
    }

    public function afterSave($insert, $changedAttributes)
    {
        if ($insert) {
            foreach ($this->languages as $key => $one) {
                $model = new Message();
                $model->id = $this->id;
                $model->language = $key;
                if (empty($one)) {
                    $model->translation = null;
                } else {
                    $model->translation = $one;
                }
                $model->save();
            }
        } else {
            foreach ($this->messages as $one) {
                $lang = $one->language;
                if (empty($this->languages[$lang])) {
                    $one->translation = null;
                } else {
                    $one->translation = $this->languages[$lang];
                }
                $one->save();
            }
        }

        parent::afterSave($insert, $changedAttributes);
    }
}
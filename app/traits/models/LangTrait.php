<?php

namespace app\traits\models;

use dosamigos\translateable\TranslateableBehavior;
use Yii;

/**
 * @method hasOne(string $langClass, string[] $array)
 * @method static tableName()
 * @method hasMany(string $langClass, string[] $array)
 */
trait LangTrait
{
    public static function langClass(): string
    {
        return self::class . 'Lang';
    }

    public static function langTableName(): string
    {
        return self::tableName() . '_lang';
    }

    public function langBehaviors($translationAttributes): array
    {
        return [
            'trans' => [
                'class' => TranslateableBehavior::class,
                'translationAttributes' => $translationAttributes,
                'relation' => 'translations',
                'languageField' => 'language',
                'fallbackLanguage' => 'ru'
            ],
        ];
    }

    public function getLang()
    {
        return $this->hasOne(self::langClass(), ['page_id' => 'id'])->where([self::langTableName() . '.language' => Yii::$app->language]);
    }

    public function getTranslations()
    {
        return $this->hasMany(self::langClass(), ['page_id' => 'id']);
    }
}
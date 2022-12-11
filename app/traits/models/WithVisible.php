<?php

namespace app\traits\models;

use yii\helpers\ArrayHelper;

/**
 * Trait HasVisible
 *
 * @property int $visible
 *
 * @package app\traits\models
 */
trait WithVisible
{
    public static function getVisibleList()
    {
        return [
        ];
    }

    public function getVisibleAlias()
    {
        return ArrayHelper::getValue(static::getVisibleList(), $this->visible);
    }
}

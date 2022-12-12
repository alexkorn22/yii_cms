<?php

namespace app\traits\models;

use app\components\enums\VisibleEnum;
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
    public function getVisibleAlias()
    {
        return ArrayHelper::getValue(VisibleEnum::listData(), $this->visible);
    }
}

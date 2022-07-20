<?php

namespace app\models\activeQuery;

use creocoder\nestedsets\NestedSetsQueryBehavior;
use yii\db\ActiveQuery;

class MenuItemQuery extends ActiveQuery
{
    /**
     * @return array
     */
    public function behaviors(): array
    {
        return [
            NestedSetsQueryBehavior::class,
        ];
    }
}
<?php

namespace app\components\enums;

use yii2mod\enum\helpers\BaseEnum;

class VisibleEnum extends BaseEnum {
    const VISIBLE = 1;
    const HIDDEN = 0;

    public static $list = [
        self::VISIBLE => 'Visible',
        self::HIDDEN => 'Hidden'
    ];
}
<?php

use yii\helpers\Url;

/* @var $this View
 * @var $label string
 * @var $languages app\modules\admin\models\Language[]
 * @var $icon boolean
 */

?>

<li class="pll-parent-menu-item menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
    <a href="#pll_switcher">
        <? if ($icon): ?>
            <i class="fa fa-globe" style="margin-right: 5px;"></i>
        <? endif; ?>
        <?= $label ?>
    </a>
    <ul class="dropdown menu" data-toggle <? if ($icon): ?> style="left: 20px" <? endif; ?>>
        <? foreach ($languages as $language): ?>
            <li class="lang-item menu-item">
                <a href="<?= Url::to(array_merge([Yii::$app->controller->route, 'language' => Yii::$app->language !== $language->code ? $language->code : null], $_GET)) ?>"
                   hreflang="<?= $language->code ?>"
                   lang="<?= $language->code ?>">
                    <?= $language->label ?>
                </a>
            </li>
        <? endforeach; ?>
    </ul>
</li>
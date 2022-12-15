<?php

namespace app\modules\admin\widgets;

use app\modules\admin\assets\SummernoteAsset;
use yii\base\Model;
use yii\base\Widget;
use yii\helpers\Html;
use yii\web\View;

class Summernote extends Widget {
    public ?Model $model;
    public string $attribute;

    public function init()
    {
        $view = $this->getView();
        SummernoteAsset::register($view);
        $view->registerJs("$('[data-summernote-id=$this->attribute]').summernote();", View::POS_READY);
    }

    public function run()
    {
        if ($this->model) {
            return Html::activeTextarea($this->model, $this->attribute, [
                'data-summernote-id' => $this->attribute
            ]);
        }
    }
}
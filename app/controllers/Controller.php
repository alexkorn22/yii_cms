<?php

namespace app\controllers;

use yii\helpers\Url;

abstract class Controller extends \yii\web\Controller
{
    public function notFound()
    {
        return $this->redirect('site/error', 404);
    }
}
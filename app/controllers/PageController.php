<?php

namespace app\controllers;

use app\modules\admin\models\Page;

class PageController extends Controller
{

    public function actionView($id): string
    {
        return $this->render('index', [
            'model' => Page::findOne(['id' => $id])
        ]);
    }

}

<?php

namespace app\controllers;

use app\modules\admin\models\Page;

class PageController extends Controller
{

    public function actionView($id): string
    {
        $model = Page::findOne(['id' => $id]);

        $view = $this->getView();

        $view->title = $model->title;

        $view->registerMetaTag([
            'name' => 'title',
            'content' => $model->meta_title
        ]);

        $view->registerMetaTag([
            'name' => 'description',
            'content' => $model->meta_description
        ]);

        return $this->render('index.twig', [
            'model' => $model,
        ]);
    }

}

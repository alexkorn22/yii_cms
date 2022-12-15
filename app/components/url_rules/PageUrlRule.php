<?php

namespace app\components\url_rules;

use app\modules\admin\models\Page;
use yii\web\UrlRuleInterface;
use yii\base\Component;
use Yii;

class PageUrlRule extends Component implements UrlRuleInterface
{

    public function createUrl($manager, $route, $params)
    {
        if ($route === 'page/view' && isset($params['link'])) {
            $url = $params['link'];
            unset($params['link']);
            return $url;
        }

        return false;
    }

    public function parseRequest($manager, $request)
    {
        $pathInfo = trim($request->getPathInfo(), '/');

        if($pathInfo){

            if(strpos($pathInfo, 'upload')!==false)
                return false;

            $firstPath = explode('/',$pathInfo)[0];
            if($firstPath=='site')
                return false;
            $moduleIDs = array_keys(Yii::$app->modules);
            if(in_array($firstPath, $moduleIDs))
                return false;

            if($page = Page::findOne(['link' => $pathInfo])){
                $params = $_GET;
                $params['id']=$page->id;
                $params['link']=$page->link;
                return ['page/view', $params ];
            }
        }
        return false;
    }
}
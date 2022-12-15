<?php
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Page */

use yii\helpers\Html;

$this->title = $model->title;

$this->registerMetaTag([
    'name' => 'title',
    'content' => $model->meta_title
]);

$this->registerMetaTag([
    'name' => 'description',
    'content' => $model->meta_description
]);

?>

<div class="page-view">
    <h1 class="title"><?= Html::encode($this->title) ?></h1>

    <p>
        <?=$model->text;?>
    </p>
</div>

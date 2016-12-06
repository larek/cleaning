<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\components\StockView;
use app\components\SideMenu;
use app\components\CalculatorEkoView;

/* @var $this yii\web\View */
/* @var $model app\models\Pages */

$this->registerJsFile('/js/site.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('/fancyapps/source/jquery.fancybox.pack.js?v=2.1.5', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerCssFile('/fancyapps/source/jquery.fancybox.css?v=2.1.5');
$this->registerJs('
$(document).ready(function() {
  $(".fancybox").fancybox();
});
');
$this->title = $model->seo_title !== "" ? $model->seo_title : $model->title;
if($page_parent!==""){
  $this->params['breadcrumbs'][] = [
    'label' => $page_parent->title,
    'url' => ['pages/content', 'id'=>$page_parent->guid],
  ];
}
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-view">


<div class='row'>
  <div class='col-md-3'>
    <?//= StockView::widget();?>
    <?= SideMenu::widget(['model' => $model_child,'guid' => $guid]); ?>
  </div>
    <div class='col-md-9'>
        <h1 style='margin-top:0px'><?= Html::encode($this->title) ?></h1>

        <?= CalculatorEkoView::widget();?>
        <?= $model->content;?>
    </div>

</div>
</div>

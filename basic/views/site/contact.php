<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use app\components\StockView;

/* @var $this yii\web\View */
/* @var $model app\models\Pages */


$this->title = "Русуборка - Контакты";
$this->params['breadcrumbs'][] = 'Контакты';
?>
<div class="pages-view">


<div class='row'>

    <div class='col-md-9'>
        <h1 style='margin-top:0px'>Контакты</h1>

<div itemscope itemtype="http://schema.org/Organization">
  <span itemprop="name">Русуборка</span>
  Контакты:
  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    Адрес:
    <span itemprop="streetAddress">Минина, 6а</span>,
    <span itemprop="postalCode">603005</span>,
    <span itemprop="addressLocality">Нижний Новгород</span>,
  </div>
  Телефон:<span itemprop="telephone">+7 831 423–91–81</span>,<br>
  Электронная почта: <span itemprop="email">rusuborka@mail.ru</span>
</div>



            <br><br>
<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=GLBK85Lge0VXnd4AuqlkSHVw_FaBUGVS&width=675&height=409&lang=ru_RU&sourceType=constructor"></script>    </div>
    <div class='col-md-3'>
      <?= StockView::widget();?>
    </div>
</div>
</div>

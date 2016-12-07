<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use app\components\StockView;

/* @var $this yii\web\View */
/* @var $model app\models\Pages */


$this->title = "All Clean Management - Контакты";
$this->params['breadcrumbs'][] = 'Контакты';
?>
<div class="pages-view">


<div class='row'>

    <div class='col-md-12'>
        <h1 style='margin-top:0px'>Контакты</h1>

<div itemscope itemtype="http://schema.org/Organization">
  <span itemprop="name">All Clean Management</span>
  <br>
  Контакты:
  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    Адрес:
    <span itemprop="streetAddress">Стрелка, 4б</span>,
    <span itemprop="postalCode">603086</span>,
    <span itemprop="addressLocality">Нижний Новгород</span>,
  </div>
  Телефон:<span itemprop="telephone">+7 831 283–96–99</span>,<br>
  Электронная почта: <span itemprop="email">acm-clean@mail.ru</span>
</div>



            <br><br>
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=hUT-YFfk3PV_ECPx5FPdoQcfjDPDy9nm&amp;width=100%25&amp;height=316&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
</div>

</div>
</div>

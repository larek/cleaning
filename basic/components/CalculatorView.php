<?
namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;
use app\models\Calculator;
use app\models\CleanType;
class CalculatorView extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Hello World';
        }
    }

    public function run()
    {


        ?>



  <div class="panel panel-primary">
    <div class="panel-heading">Расчет стоимости уборки КВАРТИР и КОТТЕДЖЕЙ!</div>
    <div class="panel-body">


    <div class="form-group email required user_basic_email">
            <?
                echo Html::beginTag('select',['name' => 'cleanType','class' => 'clean calcSelectorType form-control']);

                echo Html::tag('option','Выберете тип уборки',['value' => "0"]);
                echo Html::tag('option','Генеральная уборка',['value' => "1"]);
                echo Html::tag('option','Уборка после ремонта',['value' => "2"]);

                echo Html::endTag('select');
             ?>
    </div>

    <div class="form-group password required user_basic_password">

            <?
                echo Html::beginTag('select',['name' => 'cleanType','class' => 'clean calcSelectorSq form-control']);

                echo Html::tag('option','Выберете площадь помещения',['value' => "0"]);
                echo Html::tag('option','до 50 кв.м.',['value' => "50"]);
                echo Html::tag('option','до 60 кв.м.',['value' => "60"]);
                echo Html::tag('option','до 70 кв.м.',['value' => "70"]);
                echo Html::tag('option','до 80 кв.м.',['value' => "80"]);
                echo Html::tag('option','до 90 кв.м.',['value' => "90"]);
                echo Html::tag('option','Свыше 90 кв.м.',['value' => "100"]);

                echo Html::endTag('select');
             ?>

    </div>
    <div class="form-group password required user_basic_password">
            <input type='text' class='form-control calcInputSq' placeholder='Укажите площадь помещения' style='display:none;'>
    </div>

    <span class='btn btn-primary btn-calc col-md-12'>Посчитать</span>
    <br><br>
    <div class='ResultWrap' style='display:none;'>
      <div class='CleaningContent-1 alert alert-info' style='display:none'>
          <span class="CalcResult col-md-12" style="font-size: 25px;margin: -6px 0px;color: #337AB7;text-align: center;padding: 5px 0px;"></span>
          <h5 style='text-align: center;'><span class="glyphicon glyphicon-info-sign"></span> В стоимость работ входит:</h5>
          <ul style='font-size:12px'>
              <li>Удаление пыли со стен, мебели, бытовой техники, отопительных приборов, зеркал, дверей, предметов интерьера.</li>
              <li>Удаление пыли и загрязнений с плинтусов, оконных рам, подоконников. (* окна рассчитываются и моются за отдельную стоимость)</li>
              <li>Сухая уборка ковровых покрытий, мягкой мебели с помощью пылесоса</li>
              <li>Очистка труднодоступных поверхностей (потолочных светильников, люстр, карнизов).</li>
              <li>Мытье полов.</li>
              <li>Мытье окрашенных поверхностей дверей.</li>
              <li>Уборка в туалетах, ванных комнатах, включая чистку сантехники</li>
              <li>Мытье наружной поверхности кухонной бытовой техники (холодильник, плита, СВЧ, стиральная/посудомоечная машинка и др.)</li>
          </ul>
          <div class='snoska'>*Точную стоимость услуг Вы узнаете после выезда наших специалистов на объект оказания услуг</div>
      </div>
      <div class='CleaningContent-2 alert alert-info' style='display:none;'>
          <span class="CalcResult col-md-12" style="font-size: 31px;margin: -6px 0px;color: #337AB7;text-align: center;padding: 5px 0px;"></span>
          <h4 style='text-align: center;'><span class="glyphicon glyphicon-info-sign"></span> В стоимость работ входит:</h4>
          <ul style='font-size:12px'>
            <li>Удаление последствий ремонта (пятен краски, клея, строительной/цементной пыли и т.д.)</li>
            <li>Удаление пыли со стен, мебели, бытовой техники, отопительных приборов, зеркал, дверей, предметов интерьера.</li>
            <li>Удаление пыли и загрязнений с плинтусов, оконных рам, подоконников. (* окна рассчитываются и моются за отдельную стоимость) </li>
            <li>Сухая уборка ковровых покрытий, мягкой мебели с помощью пылесоса</li>
            <li>Очистка труднодоступных поверхностей (потолочных светильников, люстр, карнизов).</li>
            <li>Мытье полов.</li>
            <li>Мытье окрашенных поверхностей дверей.</li>
            <li>Уборка в туалетах, ванных комнатах, включая чистку сантехники</li>
            <li>Мытье наружной поверхности кухонной бытовой техники (холодильник, плита, СВЧ, стиральная/посудомоечная машинка и др.)</li>
          </ul>
           <div class='snoska'>*Точную стоимость услуг Вы узнаете после выезда наших специалистов на объект оказания услуг</div>
      </div>
      <div class='alert alert-danger' style='display:none;font-size:12px'>
          <span class="glyphicon glyphicon-alert"></span> <span class='danger-text'></span>
      </div>

      <div class='alert alert-success' style='display:none;font-size:12px'>
          <span class="glyphicon glyphicon-ok"></span> <span class='success-text'></span>
      </div>

      <div class="input-group zakaz-wrap" >
              <input type="text" class="form-control phone" placeholder="Ваш номер телефона">
              <input type='text' class='form-control name' placeholder="Ваше имя">
              <span class="input-group-btn">
                <button class="btn btn-primary btn-zakaz" type="button" style='height: 68px'>Заказать уборку</button>
              </span>
      </div><!-- /input-group -->

      <div style="padding-top:10px;text-align:center;" class='HideCalc'><span class='btn btn-link text-center'>ЗАКРЫТЬ <span class="glyphicon glyphicon-arrow-up"></span></span></div>

    </div><!-- /ResultWrap -->
    </div>
  </div>

        <?

    }
}
?>

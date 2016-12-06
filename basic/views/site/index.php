<?php

/* @var $this yii\web\View */
use app\components\CalculatorView;
use yii\helpers\Html;

$this->registerJsFile('/js/site.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->title = 'Русуборка. Клининговая компания в Нижнем Новгороде';
?>

<div class='row' style='height:320px;'>
  <div class='list1'>
    <h3><?= Html::a('Уборка квартир',['pages/content', 'id' => 'uborka-kvartir'])?></h3>
    <table>
      <tbody>
      <tr><td>1 комнатная</td><td class='right price'>1200 рублей*</td></tr>
      <tr><td>2-х комнатная</td><td class='right price'>1400 рублей*</td></tr>
      <tr><td>3-x комнатная</td><td class='right price'>1600 рублей*</td></tr>
    </tbody>
    </table>
    <span class='btn btn-primary btn-list1' data-toggle="modal" data-target="#myModalList1">Подробнее</span>
    </div>
        <!-- Modal -->
    <div class="modal fade" id="myModalList1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">В поддерживающую уборку квартиры входит:</h4>
          </div>
          <div class="modal-body">

              <p>- влажная уборка полов(паркет, линолеум, ламинат, плитка);</p>

              <p>- влажная протирка батарей, плинтусов, подоконников;</p>

              <p>- мойка зеркал;</p>

              <p>- влажная, сухая протирка оргтехники, осветительных приборов(напольных, настольных);</p>

              <p>- влажная уборка мебели (столов, шкафов, полок);</p>

              <p>- влажная протирка внешних поверхностей холодильника, кухонной плиты, столешницы, стен</p>

              <p>- вынос мусора, замена пакетов в мусорных корзинах;</p>

              <p>- обеспыливание всех поверхностей</p>

              <p>- чистка и дезинфекция сантехники(на кухне и ванной комнате)</p>
              <div class='alert alert-info'>
              <p>*Стоимость услуги указана за разовую уборку квартиры </p>
              <p>*Стоимость уборки зависит от степени загрязнения квартиры </p>
              </div>
          </div>

        </div>
      </div>
    </div>

  <img src='/images/rusuborka_banner3.jpg' style='position:absolute;width:940px;'>
  <div class='list2'>
    <h3><?= Html::a("Уборка офисов", ['pages/content' , 'id' => 'uborka-ofisov'])?></h3>
    <table>
      <tbody>
      <tr><td>до 30 кв.м.</td><td class='right price'>400 рублей*</td></tr>
      <tr><td>до 50 кв.м.</td><td class='right price'>550 рублей*</td></tr>
      <tr><td>до 70 кв.м.</td><td class='right price'>700 рублей*</td></tr>
      <tr><td>до 100 кв.м.</td><td class='right price'>1000 рублей*</td></tr>
    </tbody>
    </table>
    <span class='btn btn-primary btn-list2' data-toggle="modal" data-target="#myModalList2">Подробнее</span>
  </div>
    <!-- Modal -->
  <div class="modal fade" id="myModalList2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">В поддерживающую уборку офисов входит:</h4>
      </div>
      <div class="modal-body">


        <p>- влажная уборка полов(паркет, линолеум, ламинат, плитка);</p>

        <p>- влажная протирка батарей, плинтусов, подоконников;</p>

        <p>- влажная, сухая протирка оргтехники, осветительных приборов (напольных, настольных);</p>

        <p>- влажная уборка мебели (столов, шкафов, полок);</p>

        <p>- вынос мусора, замена пакетов в мусорных корзинах;</p>
        <div class='alert alert-info'>
        <p>*Стоимость услуги указана за разовую уборку офисного помещения</p>
        <p>*Стоимость уборки зависит от степени загрязнения офисного помещения</p>
        </div>
      </div>

    </div>
  </div>
  </div>
</div>

<br><br>
<div class='row'>
  <div class='col-md-12'>
<h2 class='text-center'>ПРИЧИНЫ РАБОТАТЬ С НАМИ</h2>
    <img src='/images/banner2.png'>
      <h2>Клининговая компания? Просто чисто.</h2>
<p>Многие из нас знают и помнят, что “cleaning” — это уборка. Клининговая компания «Русуборка» занимается профессиональной уборкой на высококлассном оборудовании от ведущего бренда Karcher. Наша клининговая компания входит в группу компаний Task4U, где встречаются интересы заказчиков и исполнителей самых разных сфер бизнеса.</p>
<h3>Кому и зачем могут понадобиться услуги клининговой компании?</h3>
<p>Но как обычный, неподготовленный человек может помыть фасад здания вместе с большими окнами, да ещё на высоте нескольких этажей?! Или очистить крышу дома от наледи, сосулек и мусора?! Для этого нужны промышленные альпинисты и специальное оборудование, которые имеются в арсенале средств по борьбе с беспорядком у клининговой компании «Русуборка».</p>
<blockquote class='main_blockquote'>
	<h4><a href='http://rusuborka.com/pg/okna-i-fasadi'>•	Мытье фасадов</a></h4>
  <p>Клининговая компания «Русуборка» с радостью наведет блеск в таких труднодоступных местах, как внешняя сторона окон и всего дома в целом. Даже в холод наши чистящие средства не замерзнут, а специалисты не подведут. </p>
	<h4>•	Уборка территорий</h4>
  <p>Нашим сотрудникам по плечу очистить от загрязнений и мусора обширные придомовые территории и участки.</p>

  <h4><a href='http://rusuborka.com/pg/uborka-pomesheniy'>•	Уборка помещений</a></h4>
  <p>Клининговая компания «Русуборка» возьмет на себя уборку в офисах и квартирах, производственных цехах, отмоет различные помещения кафе и ресторанов. Мы выполняем как ежедневную, так и генеральную уборку помещений.</p>

  <h4>•	Уборка после строительства или ремонта.</h4>
  <p>после отделки нового помещения остается много строительной пыли, разводов от штукатурки и прочих смесей, которые необходимо устранить. Ремонт же предполагает демонтаж материалов, в результате чего иногда после «вскрытия» обнаруживается плесень В таких случаях клининг требуется еще на начальной стадии ремонта. Сотрудники клининговой компании в количестве нескольких человек оперативно отмоют пол, стены и окна от загрязнений, вынесут строительный мусор. </p>

  <h4>•	<a href='http://rusuborka.com/pg/himchistka-mebeli'>Химчистка ковров</a> и <a href='http://rusuborka.com/pg/himchistka-mebeli'>мягкой мебели</a></h4>
  <p>Ни одна уборка не обходится без чистки ковровых и мебельных покрытий, пятна на которых бывают трудновыводимыми. Наши сотрудники профессионально и в срок произведут химчистку ковров, диванов и кресел</p>
</blockquote>
<h3>Интересуют расценки на услуги клининговой компании?</h3>
<p>Наш специалист бесплатно выезжает на объект для осмотра, согласования объёма, оценки услуг и сроков выполнения работ. </p>









  </div>
</div>

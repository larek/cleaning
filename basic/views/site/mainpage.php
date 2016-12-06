<?php

/* @var $this yii\web\View */
use app\components\CalculatorView;
use yii\helpers\Html;

$this->registerJsFile('/js/site.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->title = 'Русуборка. Клининговая компания в Нижнем Новгороде';
?>

<div class="row">
  <div class="fotorama" data-autoplay='7000' data-width='940' data-height='300'>
    <!-- <div>
      <div class='list1v2'>
        <h3><?= Html::a('Уборка квартир',['pages/content', 'id' => 'uborka-kvartir'])?></h3>
        <table>
          <tbody>
          <tr><td>1 комнатная</td><td class='right price'>1200 рублей</td></tr>
          <tr><td>2-х комнатная</td><td class='right price'>1400 рублей</td></tr>
          <tr><td>3-x комнатная</td><td class='right price'>1600 рублей</td></tr>
        </tbody>
        </table>
        <?= Html::a('Подробнее', ['pages/content', 'id' => 'uborka-kvartir'], ['class' => 'btn-list1v2']);?>
        </div>


      <img src='/images/slide1.png' style='position:absolute;width:940px'>
      <div class='list2v2'>
        <h3><?= Html::a("Уборка офисов", ['pages/content' , 'id' => 'uborka-ofisov'])?></h3>
        <table>
          <tbody>
          <tr><td>до 30 кв.м.</td><td class='right price'>400 рублей</td></tr>
          <tr><td>до 50 кв.м.</td><td class='right price'>550 рублей</td></tr>
          <tr><td>до 70 кв.м.</td><td class='right price'>700 рублей</td></tr>
          <tr><td>до 100 кв.м.</td><td class='right price'>1000 рублей</td></tr>
        </tbody>
        </table>
        <?= Html::a('Подробнее', ['pages/content', 'id' => 'uborka-ofisov'], ['class' => 'btn-list2v2']);?>
      </div>

    </div> -->

    <div>
      <?= Html::a('', ['pages/content', 'id' => 'uborka-kvartir'], ['class' => 'btn-list1v2']);?>

      <img src='/images/slide1_2.png' style='position:absolute;width:940px'>
      <?= Html::a('', ['pages/content', 'id' => 'uborka-ofisov'], ['class' => 'btn-list2v2']);?>

    </div>

    <div>
      <span style="
            position: absolute;
            z-index: 10;
            margin: 64px 323px;
            font-size: 23px;
            display: block;
            width: 458px;
        ">Химчистка мягкой мебели от 140 рублей</span>
        <a href="/pg/himchistka-mebeli" style="
            position: absolute;
            z-index: 10;
            margin: 107px 484px;
            padding: 3px 15px;
            border: 2px solid black;
            border-radius: 7px;
            font-size: 17px;
            font-weight: bold;
        ">Подробнее</a>

        <span style="
              position: absolute;
              z-index: 10;
              margin: 248px 58px;
              font-size: 23px;
              display: block;
              width: 458px;
          ">Чистка ковровых покрытий от 60 руб</span>
          <a href="/pg/himchistka-kovrov" style="
              position: absolute;
              z-index: 10;
              margin: 248px 484px;
              padding: 3px 15px;
              border: 2px solid black;
              border-radius: 7px;
              font-size: 17px;
              font-weight: bold;
          ">Подробнее</a>


      <img src='/images/slide2.png' style='position:absolute;width:940px'>
    </div>

    <div>

      <span style="
            position: absolute;
            z-index: 10;
            margin: 182px 240px;
            font-size: 27px;
            display: block;
            width: 459px;
            text-align: center;
            line-height: 31px;
            color: #6A3716;
        ">Комплексное обслуживание <br> ресторанов и гостиниц</span>
        <a href="/pg/restaurant-and-hotel" style="
            position: absolute;
            z-index: 10;
            margin: 249px 402px;
            padding: 3px 15px;
            border: 2px solid #6A3716;
            border-radius: 7px;
            font-size: 17px;
            font-weight: bold;
            color: #6A3716;
        ">Подробнее</a>
      <img src="/images/slide3.png" style="position:absolute;width:940px">
    </div>

    <div>

        <span style="
              position: absolute;
              z-index: 10;
              margin: 41px 342px;
              font-size: 27px;
              display: block;
              width: 459px;
              text-align: center;
              line-height: 31px;
              color: white;
          ">Мойка окон и фасадов зданий</span>
          <span style="
                position: absolute;
                z-index: 10;
                margin: 79px 388px;
                font-size: 27px;
                text-align: center;
                line-height: 31px;
                color: white;
                width: 200px;
            ">от 20 руб. кв.м.</span>
          <a href="/pg/okna-i-fasadi" style="
              position: absolute;
              z-index: 10;
              margin: 78px 607px;
              padding: 3px 15px;
              border: 2px solid #FFFFFF;
              border-radius: 7px;
              font-size: 17px;
              font-weight: bold;
              color: #FFFFFF;
          ">Подробнее</a>
        <img src="/images/slide4.png" style="position:absolute;width:940px">
      </div>

    <div>
      <span style="
            position: absolute;
            z-index: 10;
            margin: 70px 725px;
            font-size: 27px;
            display: block;
            width: 164px;
            text-align: center;
            line-height: 31px;
            color: white;
        ">Эко-уборка - <br>здоровая <br>семья</span>

        <a href="/pg/eko-uborka" style="
            position: absolute;
            z-index: 10;
            margin: 178px 747px;
            padding: 3px 15px;
            border: 2px solid #FFFFFF;
            border-radius: 7px;
            font-size: 17px;
            font-weight: bold;
            color: #FFFFFF;
        ">Подробнее</a>
      <img src='/images/slide5.png' style='position:absolute;width:940px'>
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

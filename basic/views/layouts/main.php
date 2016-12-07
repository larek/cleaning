<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=1024">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
   
</head>
<body>
<?php $this->beginBody() ?>

<div class="wraper">
<div class="header">
    <div class="row header-top">
      <div class="col-md-6">
        <a href="/"><img src="/images/acm-world-logo.png"></a>
      </div>      
      <div class="col-md-6 text-right header-contact">
        <span class="header-phone">Телефон - 8 (831) 283-96-99</span><br>
        <span class='header-time'>Режим работы - Пн-Пт 9:00-18:00</span>
      </div>              
    </div>

<div class='bootstrap-menu-wrapper'> <!--bootstrap menu wrapper-->
        <!-- bootstrap menu -->
        <nav class="navbar navbar-default" >
        <div class="">


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav ru-navbar">
        
        <li class="<?= !isset($_GET['id']) ? "active" : ""?>">
        <?= Html::a('Главная', '/');?>
        
        </li>

        <li class="<?= isset($_GET['id']) && $_GET['id'] == "uborka-pomesheniy" ? "active" : ""?>">
        <?= Html::a('Уборка помещений', ['pages/content', 'id' => 'uborka-pomesheniy' ]);?>
        
        </li>




        <li class="<?= isset($_GET['id']) && $_GET['id'] == "himchistka-mebeli-i-kovrov" ? "active" : ""?>">
        <?= Html::a('Химчистка мебели и ковров', ['pages/content', 'id' => 'himchistka-mebeli-i-kovrov' ]);?>
        
        </li>

        <li class="<?= isset($_GET['id']) && $_GET['id'] == "okna-i-fasadi" ? "active" : ""?>">
        <?= Html::a('Мытье окон и фасадов', ['pages/content', 'id' => 'okna-i-fasadi' ]);?>
        
        </li>



        <li class="<?= isset($_GET['id']) && $_GET['id'] == "rabota-s-urlicami" ? "active" : ""?>">

        <?= Html::a('Работа с юр.лицами', ['pages/content', 'id'=>'rabota-s-urlicami' ]); ?>
      
        </li>





        <li class="<?= Yii::$app->controller->action->id == "contact" ? "active" : "";?>">
            <?= Html::a('Контакты',['site/contact']);?>
         
        </li>
        </ul>


        </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        </nav>

        <!-- end bootstrap menu -->
</div> <!--end bootstrap menu wrappere-->
        <div class="header-nav-container hide">
            <div class="header-nav">
                <h4 class="no-display">&nbsp;</h4>
                <div class="menu" style="width: 100%;">
                  <ul id="nav" class="">



                    <li class="active">

                        <?= Html::a('<span class="glyphicon glyphicon-home"></span>', ['/'])?>
                      <ul id="col_951289">

                      </ul>
                    </li>

                    <li class="">
                      <?= Html::a('Уборка помещений', ['pages/content', 'id' => 'uborka-pomesheniy' ]);?>
                      <ul id="col_1598512">

                      </ul>
                    </li>

                    <li class="">
                      <?= Html::a('Химчистка мебели', ['pages/content', 'id' => 'himchistka-mebeli' ]);?>
                      <ul id="col_1024955">

                      </ul>
                    </li>

                    <li class="">
                      <?= Html::a('Мытье окон и фасадов', ['pages/content', 'id' => 'okna-i-fasadi' ]);?>
                      <ul id="col_2962669">

                      </ul>
                    </li>

                    <li class="">
                      <?= Html::a('Химчистка ковров', ['pages/content', 'id' => 'himchistka-kovrov' ]);?>
                      <ul id="col_1024955">

                      </ul>
                    </li>

                    <li class="">

                      <?= Html::a('Работа с юр.лицами', ['pages/content', 'id'=>'rabota-s-urlicami' ]); ?>
                      <ul id="col_1143887">

                      </ul>
                    </li>



                      <li class="">
                          <?= Html::a('Новости',['news/index']);?>
                        <ul id="col_1039917">

                        </ul>
                      </li>

                        <li class="">
                            <?= Html::a('Контакты',['site/contact']);?>
                          <ul id="col_1039917">

                          </ul>
                        </li>

                  </ul>
                </div>
            </div>



        </div>
     </div>

    <div class="middle-container">
      <div class="middle col-layout">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
      </div>
    </div>
</div>

<div class="footer-container">
    <div class="footer">
        <div class="informational">

           <p>All Clean Management © <?= date('Y');?></p>
           

        </div>

    </div>

</div>


<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'UGbyhRmHMc';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

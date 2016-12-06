<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Order;
use app\models\Pages;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('mainpage');
    }
    public function actionSitemap(){
      // if (!$xml_sitemap = Yii::$app->cache->get('sitemap')) {
      //   // проверяем есть ли закэшированная версия sitemap $urls = array();
      //   // Выбираем категории сайта
      //   $categories = Categories::find()->all();
      //   foreach ($categories as $category) {
      //     $urls[] = array(
      //       Yii::$app->urlManager->createUrl(['/blog/' . $category->alias]) // создаем ссылки на выбранные категории
      //       , 'daily' // вероятная частота изменения категории
      //     );
      //   }
      //
      //   // Записи Блога
      //   $posts = (new Query())
      //   ->select('b.alias, c.alias as c_alias')
      //   ->from('blog as b')
      //   ->leftJoin('blog_categories as c', 'b.catid = c.id')
      //   ->where('b.publish = 1 AND b.created <= NOW()')->all();
      //
      //   foreach ($posts as $post) {
      //     $urls[] = array( Yii::$app->urlManager->createUrl(['/blog/' . $post['c_alias'] . '/' . $post['alias']]) // строим ссылки на записи блога
      //     , 'weekly' );
      //   }
      //   $xml_sitemap = $this->renderPartial('index', array( // записываем view на переменную для последующего кэширования
      //     'host' => Yii::$app->request->hostInfo, // текущий домен сайта
      //     'urls' => $urls, // с генерированные ссылки для sitemap
      //   ));
      //   Yii::$app->cache->set('sitemap', $xml_sitemap, 3600*12); // кэшируем результат, чтобы не нагружать сервер и не выполнять код при каждом запросе карты сайта.
      // }
      // Yii::$app->response->format = \yii\web\Response::FORMAT_XML; // устанавливаем формат отдачи контента
      // echo $xml_sitemap;
      $model = Pages::find()->all();
      $sitemap = $this->render('sitemap',[
        'model' => $model,
      ]);
      Yii::$app->response->format = \yii\web\Response::FORMAT_XML; // устанавливаем формат отдачи контента

      echo $sitemap;

    }

    public function actionMainpage(){
      return $this->render('mainpage');
    }

    public function actionZakaz(){
        $model = new Order();
        $model->type = $_POST['type'];
        $model->square = $_POST['square'];
        $model->money = $_POST['money'];
        $model->phone = $_POST['phone'];
        $model->name = $_POST['name'];
        $model->dateCreated = date("Y-m-d");
        echo $model->save() ? 'true' : 'false';

            Yii::$app->mail->compose('layouts/sendemail',['type' => $_POST['type'],'square' => $_POST['square'], 'money' => $_POST['money'], 'phone' => $_POST['phone'], 'name' => $_POST['name']])
            ->setFrom(['zumbazuzumba@yandex.ru' => 'rusuborka.com'])
            ->setTo(['t9101029991@gmail.com','rusuborka@mail.ru'])
            ->setSubject('Заказ №'.$model->id)
            ->send();


    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {

        return $this->render('contact');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
}

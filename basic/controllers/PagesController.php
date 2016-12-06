<?php

namespace app\controllers;

use Yii;
use app\models\Pages;
use app\models\PagesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Images;
use yii\imagine\Image;

/**
 * PagesController implements the CRUD actions for Pages model.
 */
class PagesController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Pages models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PagesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pages model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionContent($id){
        $model = Pages::find()->where(['guid' => $id])->one();
        //$model_child = Pages::find()->where(['parent_id' => $model->id])->all();
        if($model->parent_id == 0){
            $model_child = Pages::find()->where(['parent_id' => $model->id])->all();
            $page_parent = "";
        }
        else{
            $model_child = Pages::find()->where(['parent_id' => $model->parent_id])->all();
            $page_parent = Pages::find()->where(['id' => $model->parent_id])->one();
        }
        $view = $model->type == "" ? 'content' : $model->type;
        $images = Images::find()->where(['project_id' => $model->id])->all();
        return $this->render($view,[
                'model' => $model,
                'model_child' => $model_child,
                'guid' => $id,
                'page_parent' => $page_parent,
                'images' => $images,
            ]);
    }

    /**
     * Creates a new Pages model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pages();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Pages model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Pages model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionUpload($id){
        $this->layout = 'main';
        return $this->render('upload',[
                'id' => $id,
            ]);
    }

    public function actionUploader(){

        $output_dir = "uploads/";
        if(isset($_FILES["myfile"]))
        {
        	$ret = array();

        //	This is for custom errors;
        /*	$custom_error= array();
        	$custom_error['jquery-upload-file-error']="File already exists";
        	echo json_encode($custom_error);
        	die();
        */
        	$error =$_FILES["myfile"]["error"];
        	//You need to handle  both cases
        	//If Any browser does not support serializing of multiple files using FormData()
        	if(!is_array($_FILES["myfile"]["name"])) //single file
        	{
        	    $info = pathinfo($_FILES["myfile"]["name"]);
        	    $basenameNewFile =  md5(time().$info['filename']);
        	    $newFile =$basenameNewFile.".jpg";
        	    $fileName = $basenameNewFile. "." .$info['extension'];
         		move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$fileName);

        	    $mode = \Imagine\Image\ManipulatorInterface::THUMBNAIL_OUTBOUND; // or THUMBNAIL_INSET
        	    $img = $_SERVER['DOCUMENT_ROOT']."uploads/".$fileName;
                $size = Image::getImagine()->open($img)->getSize()->widen(1000);

                Image::thumbnail($img, 100, 100, $mode)->save('uploads/100x100/'. $newFile, ['quality' => 100]);
                Image::thumbnail($img, 240, 180, $mode)->save('uploads/240x180/'. $newFile, ['quality' => 100]);
                Image::thumbnail($img, 400, 200, $mode)->save('uploads/400x200/'. $newFile, ['quality' => 100]);
            	Image::getImagine()->open($img)->resize($size)->save('uploads/1000px/'. $newFile, ['quality' => 100]);


            	$model = new Images();
            	$model->img = $newFile;
            	$model->project_id = $_GET['id'];
            	$model->save();

            	$ret[]= $newFile;
        	}
        	else  //Multiple files, file[]
        	{
        	  $fileCount = count($_FILES["myfile"]["name"]);
        	  for($i=0; $i < $fileCount; $i++)
        	  {
        	  	$fileName = $_FILES["myfile"]["name"][$i];
        		move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$fileName);
        	  	$ret[]= $fileName;
        	  }

        	}

            echo json_encode($ret);
         }
    }

    /**
     * Finds the Pages model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pages the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pages::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

<?
namespace app\components;

use yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\Pages;

class SideMenu extends Widget
{
    public $message;
    public $parent_id;
    public $model;
    public $guid;

    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Hello World';
        }
    }

    public function run()
    {

            if(count($this->model)>0){

        ?>

                                                <div class="list-group">

                                                                    <?

                                                                    foreach($this->model as $item){
                                                                        if($this->guid == $item->guid){
                                                                                    $active = "active";
                                                                                }
                                                                                else{
                                                                                    $active = "";
                                                                        }

                                                                        echo Html::a("<span class='glyphicon glyphicon-option-vertical'></span> ".$item->title,['pages/content','id' => $item->guid],['class' => 'list-group-item '.$active]);

                                                                    }?>




                                                </div>

        <?
      }
        ?>
        <div class='alert alert-info'>
            <h5 style="text-align: center;"><span class="glyphicon glyphicon-info-sign"></span> Вернем деньги</h5>
            <p>Если вы посоветуете компанию «Русуборка» своим друзьям или близким, которые воспользуются нашими услугами, мы вернем Вам 500 рублей!!!</p>
        </div>
        <?



    }
}
?>

<?
namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;
class StockView extends Widget
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


            

    
    <div class='alert alert-info'>
        <h5 style="text-align: center;"><span class="glyphicon glyphicon-info-sign"></span> Вернем деньги</h5>
        <p>Если вы посоветуете компанию «Русуборка» своим друзьям или близким, которые воспользуются нашими услугами, мы вернем Вам 500 рублей!!!</p>
    </div>



        <?

    }
}
?>
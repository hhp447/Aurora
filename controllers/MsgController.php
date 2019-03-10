<?php
namespace front\controllers;
use Yii;
use yii\web\Controller;
use common\models\message\Message;
class MsgController extends Controller{
	public $defaultAction = "list";
	public $layout = "admin";
	//访问控制 todo
	public function actionList(){
		$result =  Message::getMessagesNoRead();
		$noReadMessage = $result[0];
		$pagination = $result[1];
		return $this->render('list',[
				'noReadMessage'=>$noReadMessage,
				'pagination'=>$pagination,
			]);
	}

	public function actionView($id=""){
		$message =  Message::findOne($id);
		return $this->render('view',[
			'message'=>$message,
			]);
	}

	public function actionDelete($id){
		if(Message::delMessage($id)){
			return $this->redirect(['msg/list']);
		}
	}
}
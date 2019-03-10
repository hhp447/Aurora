<?php
namespace front\controllers;
use yii\web\Controller;
use common\models\user\ImageForm;
use Yii;
use yii\web\UploadedFile;
class UserController extends Controller{
	public $defaultAction = "list";
	public $layout = "admin";
	public function actionList(){
		return $this->render('detail');
	}
	//upload image and stroge templately
	public function actionHeadface(){
		$model = new ImageForm();
		if(Yii::$app->request->isPost){
			$model->imageFile = UploadedFile::getInstance($model, 'imageFile');
			if($imgPath = $model->upload()){
				return $this->render('headface',[
					'model'=>$model,
					'imgPath'=>$imgPath,
					]);
			}
		}
		return $this->render('headface',['model'=>$model]);
	}
	//crop the img properly
	public function actionCropImg(){
		$model = new ImageForm();
		if($post = Yii::$app->request->post()){
			Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
			return $model->cropImg($post);
		}	
	}
	//if user click the button of cancel, it will ridirect to del the temporary img;
	public function actionDeltmpimg(){
		$session = Yii::$app->session->getFlash('tmpimg');
		if($session && !(Yii::$app->user->isGuest)){
			unlink($session);
		}
		return $this->redirect(['user/headface']);
	}
}
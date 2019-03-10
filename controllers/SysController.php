<?php
namespace front\controllers;
use yii\web\Controller;
class SysController extends Controller{
	public $defaultAction = "list";
	public $layout = "admin";
	public function actionList(){
		return $this->render('list');
	}
}
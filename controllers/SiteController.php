<?php
namespace front\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $defaultAction = 'admin';
    /**
     * @inheritdoc
     */
    public function behaviors(){
        return [
            'access'=>[
                'class'=>AccessControl::className(),
                'rules'=>[
                        [
                            'actions'=>['login','index'],
                            'allow'=>true,
                            'roles'=>['?'],
                        ],
                        [
                            'allow'=>true,
                            'roles'=>['@'],
                        ]
                ],
                
            ]
        ];
    }
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction'
            ]
        ];
    }
    public function actionLogin()
    {   
        return $this->render('login');
    }
    public function actionAdmin(){
        $this->layout = 'admin';
        return $this->render('admin');
    }
    
    




    
    
    
}

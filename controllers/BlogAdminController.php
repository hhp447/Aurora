<?php
namespace front\controllers;

use Yii;
use Yii\web\NotFoundHttpException;
use front\controllers\BaseBlogContrller;
use front\models\post\AddForm;
use front\models\post\EditForm;
use blog\models\about\About;
use front\models\post\Post;
use blog\models\blog\AuroraBlog;
/**
 * Site controller
 */
class BlogAdminController extends BaseBlogController
{
    public $layout = 'admin';
    /**
     * @inheritdoc
     */
    public function actionAdd(){
    	$model = new AddForm();
    	if($model->load(Yii::$app->request->post()) && $model->add()){
    			
    		$this->redirect(['blog-admin/add']);
    		return ;
    	}
        return $this->render('add',['model'=>$model]);
    }
    public function actionEdit($id){
        $model = EditForm::getEditModel($id);
         //如果想要修改其他的人的页面则直接跳到阅读
        if(!Yii::$app->user->can('updatePost',['post'=>$model])){  
            return $this->redirect(['blog/post','id'=>$id]);
        }
        if($model->load(Yii::$app->request->post()) && $model->edit()){
            ;
        }
        if($model){
            return $this->render('edit',['model'=>$model]);
        }else{
            throw new NotFoundHttpException();
        }
    }
    public function actionSetBlog(){
        $blog = AuroraBlog::findOne(Yii::$app->user->identity->name);
        if($blog->load(Yii::$app->request->post()) && $blog->updateOne()){
            return $this->refresh();
        }    
        return $this->render('setblog',[
                'blog'=>$blog
            ]);
    }
    public function actionAboutEdit($id){
        $model = About::findOne($id);
        if($model->load(Yii::$app->request->post()) && $model->updateOne()){
            return $this->refresh();
        }
        if($model){
            return $this->render('aboutEdit',['model'=>$model]);
        }else{
            throw new NotFoundHttpException();
        }
    }
    public function actionDelete($id){
        $one = Post::findOne($id);
        if($one){
           $one->delete();
        }
        return $this->goBack();

    }


    
    




    
    
    
}

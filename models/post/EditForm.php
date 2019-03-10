<?php
namespace front\models\post;
use Yii;
class EditForm extends PostForm{
	public function edit(){
		if(Yii::$app->user->can('updateOwnPost',['post'=>$this]) && $this->validate()){
			return $this->save();
		}else{
			return false;
		}
	}
}
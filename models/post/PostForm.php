<?php
namespace front\models\post;
use yii\db\ActiveRecord;
class PostForm extends Post{
	
	public function attributeLabels(){
		return [
			'title'=>"标　　题",
			'content'=>"正　　文",
			'subtitle'=>'内容简介',
		];
	}
	public function rules(){
		return [
			[['title','content'],'required'],
		];
	}
	/**
	 * 验证，看是不是空白插入，因为html的空白也会被认为不是为空值而被requred成功
	 * todo
	 * @return [type] [description]
	 */
	public function checkSpace(){
		return true;
	}


}
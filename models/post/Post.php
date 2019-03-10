<?php
namespace front\models\post;
use yii\db\ActiveRecord;
use Yii;
use yii\helpers\Html;
use yii\behaviors\TimestampBehavior;
use common\models\user\User;
use common\models\BaseAR;
class Post extends BaseAR{
	public $author;
	public $isAuthor;
	public function behaviors(){
		return [
			TimestampBehavior::className(),
		];
	}
	public static function tableName(){
		return "post";
	}
	public function add(){
		if($this->validate()){
			$this->uid = Yii::$app->user->identity->id;
			$this->save();
			return true;
		}else{
			return false;
		}
	}
	public static function getEditModel($id){
		return static::find()->where(['id'=>$id])->one();
	}
	public function getUser(){
		return $this->hasOne(User::className(),['id'=>'uid']);
	}
	public static function findByName($name){
		$user = User::findByName($name);
		return static::find()->where(['uid'=>$user->id]);
	}
	public static function findTitleByName($name,$array=true){
		if($array){
			return self::findByName($name)->select(['id','subtitle','title','updated_at'])->asArray()->all();
		}else{
			return self::findByName($name)->select(['id','subtitle','title','updated_at'])->all();
		}
	}
	public  static function findPostByName($name,$array=true){
		$user = User::findByName($name);
		if($user){
			$result =  Post::find()->where(['uid'=>$user->id]);
			if($array){
				return $result->asArray()->all();
			}else{
				return $result->all();
			}			
		}
		return false;
	}	
	public static function findOneById($id){
		return static::find()->where(['id'=>$id])->one();
	}

}
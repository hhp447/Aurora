<?php
$name = Yii::$app->user->identity->name;
$nickname =  Yii::$app->user->identity->nickname;
$titlename = $nickname ? $nickname : $name;
$face = Yii::$app->user->identity->headface ? Yii::$app->user->identity->headface : "";
?>
<div class="row" id="header">		
	<div class="col-sm-12">
		<?php if($face){
			echo '<img src="img/face/'.$face.'" class="img-responsive img-circle pull-center"/>';
		}else{
			echo '<img src="img/default/face/face.png" class="img-responsive img-circle pull-center"/>';
			}?>
	</div>
	<div class="col-sm-12">
		<div>
			<h1 class="text-center"><?= $titlename?>个人中心</h1>
		</div>
	</div>
</div>
<div class="row" id="nav">
	<div class="col-sm-2 odd">
		<span><a href="<?php echo Yii::$app->homeurl->createUrl("")?>">Aurora首页</a></span>
	</div>
	<div class="col-sm-2">
		<span><a href="<?php echo Yii::$app->blogurl->createUrl(['blog/index','name'=>$name]);?>">博客首页</a></span>
	</div>
	<div class="col-sm-2 odd">
		<span><a href="?r=user/list">用户信息</a></span>
	</div>
	<div class="col-sm-2">
		<span><a href="?r=blog-admin/add">博客</a></span>
	</div>
	<div class="col-sm-2 odd">
		<span><a href="?r=msg/list">消息</a></span>
	</div>
	<div class="col-sm-2">
		<span><a href="?r=sys/list">系统设置</a></span>
	</div>
</div>
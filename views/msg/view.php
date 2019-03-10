<?php

$this->params['breadcrumbs'] = ['label'=>'阅读消息'];
?>
<?php $this->beginContent("@app/views/msg/msg.php");?>

<?php
if($message){
?>
<div>
	<h3>标题：<?php echo $message->title;?></h3>
	<p class="datetime">发送时间：<?php echo Yii::$app->formatter->asDatetime($message->created_at);?> 发送人：<?php echo $message->sender->name;?></p>
	<hr/>
	<div class="col-lg-8 message-content">
		<p>
			<?php echo $message->content;?>
		</p>
	</div>
	<div class="col-sm-12">
		<hr/>
		<button class="btn btn-default">回复</button>
		<a href="?r=msg/delete&id=<?php echo $message->id;?>" class="btn btn-default">删除</a>
	</div>
</div>
<?php
}
?>

<?php $this->endContent();?>
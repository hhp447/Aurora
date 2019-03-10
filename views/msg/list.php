<?php
use yii\widgets\LinkPager;

$this->params['breadcrumbs'] = ['label'=>'未读消息'];
?>
<?php $this->beginContent("@app/views/msg/msg.php");?>



<?php
if(!empty($noReadMessage)){
	foreach($noReadMessage as $message){
		?>
	<div class="text-message">
		<p class="message-title"><a href="?r=msg/view&id=<?php echo $message['id'];?>"><?php echo $message['title']?></a></p>
		<p class="message-info">发送人：<?php echo $message['uname'];?> | 发送时间：<?php echo Yii::$app->formatter->asDatetime($message['created_at'])?></p>
	</div>	
<?php
	}
}else{
	echo '<div class="text-message">';
	echo '<p class="message-title">没有未读消息</p>';
	echo '</div>';
}
echo LinkPager::widget([
		'pagination'=>$pagination,
	]);
?>

<?php $this->endContent();?>
<?php
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
?>
<div class="row">
	<div class="col-sm-2 siderbar">
		<div>
			<ul>
				<li class="odd"><a href="?r=msg/list">未读消息</a></li>
				<li class="odd"><a href="?r=msg/view">具体消息</a></li>
			</ul>
		</div>	
	</div>
	<div class="col-sm-10 content">
		<div>
			<?php 
				if(isset($this->params['breadcrumbs'])){
					array_unshift($this->params['breadcrumbs'],['label'=>'系统设置','url'=>'?r=msg/list']);
				}else{
					$this->params['breadcrumbs'][] = '未知';
				}
				echo Breadcrumbs::widget([
					'homeLabel'=>'首页',
					'links'=>$this->params['breadcrumbs']
					]);
			?>
		</div>
		<?php (new Alert())->init();?>
		<?php echo $content?>
	</div>
</div>
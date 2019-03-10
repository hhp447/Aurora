<?php
use yii\widgets\Breadcrumbs;
?>
<div class="row">
	<div class="col-sm-2 siderbar">
		<div>
			<ul>
				<li class="odd"><a href="">详细信息</a></li>
				<li class="odd"><a href="?r=user/headface">更改头像</a></li>
			</ul>
		</div>	
	</div>
	<div class="col-sm-10 content">
		<div>
			<?php 
				if(isset($this->params['breadcrumbs'])){
					array_unshift($this->params['breadcrumbs'],['label'=>'用户信息','url'=>'?r=admin/user-list']);
				}else{
					$this->params['breadcrumbs'][] = '未知';
				}
				echo Breadcrumbs::widget([
					'homeLabel'=>'首页',
					'links'=>$this->params['breadcrumbs']
					]);
			?>
		</div>
		<?php echo $content?>
	</div>
</div>
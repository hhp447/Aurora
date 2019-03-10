<?php
use yii\widgets\Breadcrumbs;
use common\assets\EditorAsset;
use common\widgets\Alert;
EditorAsset::register($this);
?>
<div class="row">
	<div class="col-sm-2 siderbar">
		<div>
			<ul>
				<li class="odd"><a href="?r=blog-admin/add">发表文章</a></li>
				<li class="odd"><a href="?r=blog-admin/set-blog">博客设置</a></li>
			</ul>
		</div>	
	</div>
	<div class="col-sm-10 content">
		<div>
			<?php 
				if(isset($this->params['breadcrumbs'])){
					array_unshift($this->params['breadcrumbs'],['label'=>'博客','url'=>'?r=user']);
				}else{
					$this->params['breadcrumbs'][] = '博客';
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
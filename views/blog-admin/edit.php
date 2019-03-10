<?php
use yii\bootstrap\ActiveForm;
use common\widgets\Alert;
$this->params['breadcrumbs'] = ['label'=>'修改文章'];
?>
<?php $this->beginContent("@app/views/blog-admin/blog.php");?>
	<?php $form = ActiveForm::begin([
		'layout'=>'horizontal',
		'fieldConfig'=>[
		    'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
		    'horizontalCssClasses' => [
		        'label' => 'col-sm-1',
		        'offset' => 'col-sm-offset-4',
		        'wrapper' => 'col-sm-10',
		        'error' => '',
		        'hint' => '',
		    ],	
		],
	]);?>
	<?php (new Alert())->init();?>
	<?php
	echo $form->field($model,"title");
	echo $form->field($model,"subtitle");
	echo $form->field($model,'content')->textarea(['id'=>'trumbowyg']);
	?>
	<div class="form-group">
		<div class="col-sm-2 col-sm-offset-1">
			<button class="btn btn-default">修改</button>
			<a class="btn btn-default" href="?r=blog-admin/delete&id=<?= $model->id;?>">删除</a>
		</div>
	</div>
	<br/><br/><br/><br/>
	

	<?php ActiveForm::end();?>
<?php $this->endContent();?>
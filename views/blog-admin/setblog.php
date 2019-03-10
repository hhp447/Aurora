<?php
use yii\bootstrap\ActiveForm;
use common\widgets\Alert;
$this->params['breadcrumbs'] = ['label'=>'博客设置'];
?>
<?php $this->beginContent("@app/views/blog-admin/blog.php");?>
	<?php $form = ActiveForm::begin([
		'layout'=>'horizontal',
		'fieldConfig'=>[
		    'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
		    'horizontalCssClasses' => [
		        'label' => 'col-sm-1',
		        'offset' => 'col-sm-offset-4',
		        'wrapper' => 'col-sm-5',
		        'error' => '',
		        'hint' => '',
		    ],	
		],
	]);?>
	<?php
	echo $form->field($blog,"title");
	echo $form->field($blog,"subtitle");
	?>
	<div class="form-group">
		<div class="col-sm-2 col-sm-offset-1">
			<button class="btn btn-default">确认修改</button>
		</div>
	</div>
	<br/><br/><br/><br/>
	

	<?php ActiveForm::end();?>
<?php $this->endContent();?>
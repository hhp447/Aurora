<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->params['breadcrumbs'] = ['label'=>'更改头像'];
$face = Yii::$app->user->identity->headface ? Yii::$app->user->identity->headface : null;
?>
<?php $this->beginContent("@app/views/user/user.php");?>
<div class="col-sm-12">
	<h3>系统头像</h3>
	<div class="default-headface">
		<img src="img/default/face/face.png"/>
		<img src="img/default/face/face.png"/>
		<img src="img/default/face/face.png"/>
		<img src="img/default/face/face.png"/>
		<img src="img/default/face/face.png"/>
		<img src="img/default/face/face.png"/>
		<img src="img/default/face/face.png"/>
		<img src="img/default/face/face.png"/>
	</div>
	<hr/>
	<h3>自定义头像</h3>
	<?php $form= ActiveForm::begin( [
		'options'=>['enctype' => 'multipart/form-data'],
		'layout'=>'default',
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
	])?>

	<?= $form->field($model, 'imageFile')->fileInput() ?>

	<div class="form-group">
		<div class="col-sm-12">
			<button class="btn btn-default">上传</button>
		</div>
	</div>	


	<?php ActiveForm::end();?>
</div>
<div class="col-sm-12">
	<hr/>
	<h3>当前头像</h3>
	<div id="current-face">
		<?php if($face){
			echo "<img src='img/face/".$face."'/ class='img-circle'>";
		}else{
			echo "<img src='img/default/face/face.png' class='img-circle'>";
		}?>
	</div>
</div>



<div id="uploader">
		<form method="post" action="?r=user/crop-img" id="imgform">
			<div class="panel panel-info">
			  	<div class="panel-heading">上传头像-调整位置</div>
			  	<div class="panel-body">
			  		<div class='wrapper-bk'></div>
			  		<div class="wrapper">
			  			<img src=''>
			  		</div>
			  		<div class="inner">
		  				<img src=''>
		  			</div>
					<div id="ui-range">
						<div class="range-bar"></div>
						<div class="range-btn"></div>		
						<input type="hidden" value=0 name="radis" class="radisInput"/>
					</div>
						<?php echo Html::hiddenInput(Yii::$app->request->csrfParam,Yii::$app->request->getCsrfToken());?>
						<input type="hidden" name='left'class="leftInput"/>	
						<input type="hidden" name="top" class="topInput"/>
						<input type="hidden" name="imgurl" class="imgInput"/>
						<input type="hidden" name="width" class="widthInput"/>
						<input type="hidden" name="height" class="heightInput"/>
					<hr/>
					<div>
						<button class="btn btn-default" id="sure-btn">确认</button>
						<a href="?r=user/deltmpimg" class="btn-default btn">取消</a>
					</div>
			  	</div>
			</div>
		</form>	
	</div>




<?php 
if(isset($imgPath)){
?>
<input type="hidden" id="showFaceWindow" value="<?php echo $imgPath;?>" />
<?php
}
?>




<?php $this->endContent();?>
<?php
use yii\bootstrap\ActiveForm;
$this->params['breadcrumbs'] = ['label'=>'更改头像'];
?>
<?php $this->beginContent("@app/views/user/user.php");?>


<?php
if(isset($img)){
	echo "<img src='img/face/".$img."'/>";
}
?>


<?php $this->endContent();?>


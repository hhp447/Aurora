<?php 
use common\assets\BaseCssAsset;
use yii\widgets\ActiveForm;
use front\assets\AppAsset;
use yii\helpers\Html;


AppAsset::register($this);
BaseCssAsset::register($this);
$this->title = "极光AURORA-个人中心";
?>
<?php $this->beginPage();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= Html::encode($this->title)?></title>
<?php $this->head();?>
<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body class="container-fluid">
<?php $this->beginBody();?>
<?php include_once 'adminheader.php'?>
<div class="main" style="">
	<?=$content?>
</div>








<?php $this->endBody();?>
</body>
</html>
<?php $this->endPage();?>




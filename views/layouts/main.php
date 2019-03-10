<?php 
use front\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
$this->title = "极光AURORA";
?>
<?php $this->beginPage();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?= Html::encode($this->title)?></title>
<?php $this->head();?>
</head>
<body class="container-fluid">
<?php $this->beginBody();?>
<?php include_once('header.php');?>
<div class="main" style="">
	<?=$content?>
</div>
<?php $this->endBody();?>
</body>
</html>
<?php $this->endPage();?>


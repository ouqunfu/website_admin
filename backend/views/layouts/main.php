<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);

?>
<!--自定义js-->
<?php $this->beginBlock('loading') ?>
window.onload=function(){
$(".overlay").remove();
}
<?php $this->endBlock() ?>
<?php $this->registerJs($this->blocks['loading'], \yii\web\View::POS_HEAD); ?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->beginBody() ?>
<div class="wrapper">
    <?php $this->beginContent('@app/views/layouts/main-header.php'); $this->endContent(); ?>
    <?php $this->beginContent('@app/views/layouts/main-sidebar.php'); $this->endContent(); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?= $content ?>
  </div>
  <!-- /.content-wrapper -->
    <?php $this->beginContent('@app/views/layouts/main-footer.php'); $this->endContent(); ?>
</div>
<!-- ./wrapper -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

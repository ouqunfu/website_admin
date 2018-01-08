<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

AppAsset::register($this);
//load text editor css and js file
AppAsset::addCss($this, '@web/frontend/plugins/iCheck/square/blue.css');
AppAsset::addScript($this, '@web/frontend/plugins/iCheck/icheck.min.js');

?>
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
<body class="hold-transition login-page">
<?php $this->beginBody() ?>
<div class="login-box">
  <div class="login-logo">
    <b>Admin</b>SYS
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p></p>
    <form action="<?php echo Url::toRoute('users/login'); ?>" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
<!--          <div class="checkbox icheck">-->
<!--            <label>-->
<!--              <input type="checkbox"> 记住我?-->
<!--            </label>-->
<!--          </div>-->
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <a href="#">忘记密码？</a>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<!--自定义js-->
<?php $this->beginBlock('custom') ?>
$(function () {
$('input').iCheck({
checkboxClass: 'icheckbox_square-blue',
radioClass: 'iradio_square-blue',
increaseArea: '20%' // optional
});
});
<?php $this->endBlock() ?>
<?php $this->registerJs($this->blocks['custom'], \yii\web\View::POS_END); ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

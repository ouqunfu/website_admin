<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use backend\assets\AppAsset;

$this->title = 'AdminSYS - 后台管理中心';

//load text editor css and js file
AppAsset::addScript($this, '@web/frontend/bower_components/ckeditor/ckeditor.js');

AppAsset::addCss($this, '@web/frontend/bower_components/bootstrap-fileinput/css/fileinput.min.css');
AppAsset::addScript($this, '@web/frontend/bower_components/bootstrap-fileinput/js/fileinput.min.js');
AppAsset::addScript($this, '@web/frontend/bower_components/bootstrap-fileinput/js/locales/zh.js');

//自定义css
$cssString = ".nav-tabs-custom{box-shadow: none;}";
$this->registerCss($cssString);
?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      标签管理
      <small>添加标签</small>
    </h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-dashboard"></i> 内容</li>
      <li class="active"><a href="<?php echo Url::toRoute('tags/add'); ?>">添加标签</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <form class="form-horizontal">
            <div class="box-body">
              <div class="form-group">
                <label for="tagName" class="col-sm-2 control-label">名称</label>
                <div class="col-sm-8 col-md-5">
                  <input type="text" class="form-control" id="tagName" placeholder="">
                </div>
                <div class="col-sm-1 custom-input-icon">
                  <span data-toggle="tooltip" data-placement="top" class="badge bg-yellow-gradient custom-tooltip"
                        data-original-title="请填写标签名称！">!</span>
                </div>
              </div>
              <div class="form-group">
                <label for="alias" class="col-sm-2 control-label">别名</label>
                <div class="col-sm-8 col-md-5">
                  <input type="text" class="form-control" id="alias" placeholder="">
                </div>
                <div class="col-sm-1 custom-input-icon">
                  <span data-toggle="tooltip" data-placement="top" class="badge bg-yellow-gradient custom-tooltip"
                        data-original-title="“别名”是在URL中使用的别称，它可以令URL更美观。通常使用小写，只能包含字母，数字和连字符（-）。">!</span>
                </div>
              </div>
              <div class="form-group">
                <label for="description" class="col-sm-2 control-label">描述</label>
                <div class="col-sm-8 col-md-5">
                  <textarea class="form-control" id="description" rows="8" cols="105"></textarea>
                </div>
                <div class="col-sm-1 custom-input-icon">
                  <span data-toggle="tooltip" data-placement="top" class="badge bg-yellow-gradient custom-tooltip"
                        data-original-title="请填写标签描述！">!</span>
                </div>
              </div>
            </div>
            <div class="box-footer">
              <div class="col-sm-2 col-md-1">
                <button type="submit" class="btn btn-block btn-primary">提交</button>
              </div>
            </div>
          </form>
          <div class="overlay">
            <i class="fa fa-spinner fa-spin"></i>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- /.content -->
  <!--自定义js-->
<?php $this->beginBlock('custom') ?>
  $(function () {
  // ckeditor init
  CKEDITOR.replace('editor', { height: '400px'});
  // fileinput init
  $("#img").fileinput();
  })
<?php $this->endBlock() ?>
<?php $this->registerJs($this->blocks['custom'], \yii\web\View::POS_END); ?>
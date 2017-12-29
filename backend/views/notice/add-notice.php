<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use backend\assets\AppAsset;

$this->title = 'AdminSYS - 后台管理中心';

//load text editor css and js file
AppAsset::addScript($this, '@web/frontend/bower_components/ckeditor/ckeditor.js');

?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      公告管理
      <small>添加公告</small>
    </h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-dashboard"></i> 功能</li>
      <li class="active"><a href="<?php echo Url::toRoute('notice/add-notice'); ?>">添加公告</a></li>
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
                <label for="noticeName" class="col-sm-2 control-label">公告标题</label>
                <div class="col-sm-8 col-md-5">
                  <input type="text" class="form-control" id="noticeName" placeholder="">
                </div>
                <div class="col-sm-2 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="请填写公告标题！">!</span>
                </div>
              </div>
              <div class="form-group">
                <label for="editor" class="col-sm-2 control-label">公告内容</label>
                <div class="col-sm-8 col-md-8">
                  <textarea id="editor" name="editor" rows="50" cols="80" style="display: none;"></textarea>
                </div>
                <div class="col-sm-2 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="请填写公告内容！">!</span>
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
  })
<?php $this->endBlock() ?>
<?php $this->registerJs($this->blocks['custom'], \yii\web\View::POS_END); ?>
<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use backend\assets\AppAsset;

$this->title = 'AdminSYS - 后台管理中心';

//load text editor css and js file
AppAsset::addScript($this,'@web/frontend/bower_components/ckeditor/ckeditor.js');

AppAsset::addCss($this,'@web/frontend/bower_components/bootstrap-fileinput/css/fileinput.min.css');
AppAsset::addScript($this,'@web/frontend/bower_components/bootstrap-fileinput/js/fileinput.min.js');
AppAsset::addScript($this,'@web/frontend/bower_components/bootstrap-fileinput/js/locales/zh.js');

//自定义css
//$cssString = ".cke{visibility:hidden;}";
//$this->registerCss($cssString);
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    专题管理
    <small>添加专题</small>
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-dashboard"></i> 内容</li>
    <li class="active"><a href="<?php echo Url::toRoute('subjects/add'); ?>">添加专题</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-body">
          <div class="row">
            <div class="col-sm-12"><p></p></div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <form class="form-horizontal">
                <div class="row">
                  <div class="form-group">
                    <label for="subjectName" class="col-md-2 control-label">专题名称</label>
                    <div class="col-md-5">
                      <input type="text" class="form-control" id="subjectName" placeholder="">
                    </div>
                    <div class="col-md-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="请填写专题名称！">!</span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group">
                    <label for="alias" class="col-md-2 control-label">别名</label>
                    <div class="col-md-5">
                      <input type="text" class="form-control" id="alias" placeholder="">
                    </div>
                    <div class="col-md-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="“别名”是在URL中使用的别称，它可以令URL更美观。通常使用小写，只能包含字母，数字和连字符（-）。">!</span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group">
                    <label for="ishtml" class="col-md-2 control-label">是否生成HTML</label>
                    <div class="col-md-5">
                      <label class="radio-inline">
                        <input type="radio" name="ishtml" class="minimal" value="0" checked="checked">
                        不生成
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="isshow" class="minimal" value="1">
                        生成
                      </label>
                    </div>
                    <div class="col-md-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="选择专题是否生成HTML静态页面！">!</span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group">
                    <label for="img" class="col-md-2 control-label">专题图片</label>
                    <div class="col-md-5">
                      <input type="file" name="img" id="img" class="file" data-show-preview="false" >
                    </div>
                    <div class="col-md-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="专题图片！">!</span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group">
                    <label for="editor" class="col-md-2 control-label">描述</label>
                    <div class="col-md-8">
                      <textarea id="editor" name="editor" rows="50" cols="80"></textarea>
                    </div>
                    <div class="col-md-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="专题描述内容！">!</span>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-1">
              <button type="button" class="btn btn-block btn-primary">提交</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12"><p></p></div>
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
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
      角色管理
      <small>添加标签</small>
    </h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-dashboard"></i> 用户</li>
      <li class="active"><a href="<?php echo Url::toRoute('role/add'); ?>">添加角色</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <form class="form-horizontal">
            <div class="box-body">
              <!-- Custom Tabs -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">基本信息</a></li>
                  <li><a href="#tab_2" data-toggle="tab">权限设置</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <div class="form-group">
                      <label for="rolename" class="col-sm-2 control-label">角色名称</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="rolename" placeholder="">
                      </div>
                      <div class="col-sm-1 custom-input-icon"><span data-toggle="tooltip" data-placement="top"
                                                                    class="badge bg-yellow-gradient custom-tooltip"
                                                                    data-original-title="请填写角色名称！">!</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="status" class="col-sm-2 control-label">状态</label>
                      <div class="col-sm-8 col-md-5">
                        <label class="radio-inline">
                          <input id="status" type="radio" name="status" class="minimal" value="1" checked="checked">
                          启用
                        </label>
                        <label class="radio-inline">
                          <input id="status" type="radio" name="status" class="minimal" value="0">
                          禁用
                      </div>
                      <div class="col-sm-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="请选择状态！">!</span>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    <div class="form-group">
                      <div class="col-sm-12 col-md-12">
                        <table id="contents-role-list" class="table table-striped dataTable" role="grid">
                          <tbody>
                          <tr role="row" class="odd">
                            <td><input type="checkbox">内容</td>
                          </tr>
                          <tr role="row" class="odd">
                            <td>栏目管理</td>
                            <td>超级管理员</td>
                            <td>。。。</td>
                          </tr>
                          <tr role="row" class="odd">
                            <td>1</td>
                            <td>超级管理员</td>
                            <td>。。。</td>
                          </tr>
                          <tr role="row" class="odd"><td colspan="4"><hr></td></tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
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
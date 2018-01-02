<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use backend\assets\AppAsset;

$this->title = 'AdminSYS - 后台管理中心';

//load text editor css and js file

//自定义css
$cssString = ".nav-tabs-custom{box-shadow: none;}";
$this->registerCss($cssString);
?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      用户管理
      <small>添加用户</small>
    </h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-dashboard"></i> 用户</li>
      <li class="active"><a href="<?php echo Url::toRoute('tags/add'); ?>">添加用户</a></li>
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
                  <li><a href="#tab_2" data-toggle="tab">自定义信息</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <div class="form-group">
                      <label for="username" class="col-sm-2 control-label">用户名</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="username" placeholder="">
                      </div>
                      <div class="col-sm-1 custom-input-icon"><span data-toggle="tooltip" data-placement="top"
                                                                    class="badge bg-yellow-gradient custom-tooltip"
                                                                    data-original-title="请填写用户名！">!</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nickname" class="col-sm-2 control-label">昵称</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="nickname" placeholder="">
                      </div>
                      <div class="col-sm-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="请填写昵称">!</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password" class="col-sm-2 control-label">密码</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="password" class="form-control" id="password" placeholder="">
                      </div>
                      <div class="col-sm-1 custom-input-icon"><span data-toggle="tooltip" data-placement="top"
                                                                    class="badge bg-yellow-gradient custom-tooltip"
                                                                    data-original-title="请填写密码">!</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="securityquestion" class="col-sm-2 control-label">安全问题</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="securityquestion" placeholder="">
                      </div>
                      <div class="col-sm-1 custom-input-icon"><span data-toggle="tooltip" data-placement="top"
                                                                    class="badge bg-yellow-gradient custom-tooltip"
                                                                    data-original-title="请填写安全问题">!</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="answer" class="col-sm-2 control-label">您的答案</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="answer" placeholder="">
                      </div>
                      <div class="col-sm-1 custom-input-icon"><span data-toggle="tooltip" data-placement="top"
                                                                    class="badge bg-yellow-gradient custom-tooltip"
                                                                    data-original-title="请填写安全问题的答案">!</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="usergroup" class="col-sm-2 control-label">用户组</label>
                      <div class="col-sm-8 col-md-5">
                        <select class="form-control" id="usergroup">
                          <option value="0" selected="">请选择...</option>
                        </select>
                      </div>
                      <div class="col-sm-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="选择用户组！">!</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="email" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="email" class="form-control" id="email" placeholder="">
                      </div>
                      <div class="col-sm-1 custom-input-icon"><span data-toggle="tooltip" data-placement="top"
                                                                    class="badge bg-yellow-gradient custom-tooltip"
                                                                    data-original-title="请填写邮箱账号">!</span>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2"></div>
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
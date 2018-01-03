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
      内容字段
      <small>添加字段</small>
    </h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-dashboard"></i> 自定义</li>
      <li class="active"><a href="<?php echo Url::toRoute('customs/add-content-field'); ?>">添加字段</a></li>
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
                <label for="filed_name" class="col-sm-2 control-label">字段名</label>
                <div class="col-sm-8 col-md-5">
                  <input type="text" class="form-control" id="filed_name" placeholder="">
                </div>
                <div class="col-sm-1 custom-input-icon">
                  <span data-toggle="tooltip" data-placement="top" class="badge bg-yellow-gradient custom-tooltip"
                        data-original-title="请填写字段名，只能由英文字母、数字和下划线组成，并且仅能字母开头，不以下划线结尾！">!</span>
                </div>
              </div>
              <div class="form-group">
                <label for="field_des" class="col-sm-2 control-label">字段说明</label>
                <div class="col-sm-8 col-md-5">
                  <input type="text" class="form-control" id="field_des" placeholder="">
                </div>
                <div class="col-sm-1 custom-input-icon">
                  <span data-toggle="tooltip" data-placement="top" class="badge bg-yellow-gradient custom-tooltip"
                        data-original-title="“别名”是在URL中使用的别称，它可以令URL更美观。通常使用小写，只能包含字母，数字和连字符（-）。">!</span>
                </div>
              </div>
              <div class="form-group">
                <label for="field_tips" class="col-sm-2 control-label">字段提示信息</label>
                <div class="col-sm-8 col-md-5">
                  <input type="text" class="form-control" id="field_tips" placeholder="">
                </div>
                <div class="col-sm-1 custom-input-icon">
                  <span data-toggle="tooltip" data-placement="top" class="badge bg-yellow-gradient custom-tooltip"
                        data-original-title="输入框右侧说明文字！">!</span>
                </div>
              </div>
              <div class="form-group">
                <label for="field_is_null" class="col-sm-2 control-label">是否必填</label>
                <div class="col-sm-8 col-md-5">
                  <select class="form-control" id="field_is_null">
                    <option value="0">否</option>
                    <option value="1">是</option>
                  </select>
                </div>
                <div class="col-sm-1 custom-input-icon">
                  <span data-toggle="tooltip" data-placement="top" class="badge bg-yellow-gradient custom-tooltip"
                        data-original-title="是否必填项！">!</span>
                </div>
              </div>
              <div class="form-group">
                <label for="field_is_unique" class="col-sm-2 control-label">是否唯一</label>
                <div class="col-sm-8 col-md-5">
                  <select class="form-control" id="field_is_unique">
                    <option value="0">否</option>
                    <option value="1">是</option>
                  </select>
                </div>
                <div class="col-sm-1 custom-input-icon">
                  <span data-toggle="tooltip" data-placement="top" class="badge bg-yellow-gradient custom-tooltip"
                        data-original-title="是否唯一项！">!</span>
                </div>
              </div>
              <div class="form-group">
                <label for="field_type" class="col-sm-2 control-label">类型</label>
                <div class="col-sm-8 col-md-5">
                  <select class="form-control" id="field_type">
                    <option value="int">整数</option>
                    <option value="varchar">单行文本</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="field_length" class="col-sm-2 control-label">长度</label>
                <div class="col-sm-8 col-md-5">
                  <input type="text" class="form-control" id="field_length" placeholder="">
                </div>
                <div class="col-sm-1 custom-input-icon">
                  <span data-toggle="tooltip" data-placement="top" class="badge bg-yellow-gradient custom-tooltip"
                        data-original-title="请输入数字！">!</span>
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
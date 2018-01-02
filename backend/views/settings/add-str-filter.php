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
      敏感词管理
      <small>添加敏感词</small>
    </h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-dashboard"></i> 设置</li>
      <li class="active"><a href="<?php echo Url::toRoute('cato/add'); ?>">添加敏感词</a></li>
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
                  <li class="active"><a href="#tab_1" data-toggle="tab">单条添加</a></li>
                  <li><a href="#tab_2" data-toggle="tab">批量添加</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <div class="form-group">
                      <label for="filter_word" class="col-sm-2 control-label">敏感词</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="columnName" placeholder="">
                      </div>
                      <div class="col-sm-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="请填写敏感词！">!</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="replace_word" class="col-sm-2 control-label">替换词</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="replace_word" placeholder="">
                      </div>
                      <div class="col-sm-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="请填写替换词，可以为空！">!</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="filter_level" class="col-sm-2 control-label">敏感级别</label>
                      <div class="col-sm-8 col-md-5">
                        <select class="form-control" id="filter_level">
                          <option value="1" selected>一般</option>
                          <option value="2">危险</option>
                        </select>
                      </div>
                      <div class="col-sm-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="一般: 用替换词替换 , 危险: 直接去除。">!</span>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    <div class="form-group">
                      <label for="filter_word_batch" class="col-sm-2 control-label">敏感词</label>
                      <div class="col-sm-8 col-md-5">
                        <textarea class="form-control" id="filter_word_batch" rows="8" placeholder="test,测试,1"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="keywords" class="col-sm-2 control-label">规则说明</label>
                      <div class="col-sm-8 col-md-5">
                        <p class="form-control-static">
                          1.内容要求每行一个敏感词条目；<br/>
                          2.请使用英文标点，参数之间用英文","隔开。<br/>
                          3.敏感级别由数字 1,2代替，1--一般；2--敏感；
                        </p>
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
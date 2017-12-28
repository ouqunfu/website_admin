<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use backend\assets\AppAsset;

$this->title = 'AdminSYS - 后台管理中心';

//load text editor css and js file

//自定义css
//$cssString = ".cke{visibility:hidden;}";
//$this->registerCss($cssString);
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    URL规则管理
    <small>添加规则</small>
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-dashboard"></i> 内容</li>
    <li class="active"><a href="<?php echo Url::toRoute('url-manage/add'); ?>">URL规则管理</a></li>
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
              <label for="urlName" class="col-sm-2 control-label">URL规则名称</label>
              <div class="col-sm-8 col-md-5">
                <input type="text" class="form-control" id="urlName" placeholder="">
              </div>
              <div class="col-sm-2 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="请填写URL规则名称！">!</span>
              </div>
            </div>
            <div class="form-group">
              <label for="parent" class="col-sm-2 control-label">所属模块</label>
              <div class="col-sm-8 col-md-5">
                <select class="form-control" id="parent">
                  <option value="0" selected="">请选择...</option>
                </select>
              </div>
              <div class="col-sm-2 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="请选择URL规则所属模块！">!</span>
              </div>
            </div>
            <div class="form-group">
              <label for="urlExample" class="col-sm-2 control-label">URL示例</label>
              <div class="col-sm-8 col-md-5">
                <input type="text" class="form-control" id="urlExample" placeholder="">
              </div>
              <div class="col-sm-2 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="请填写URL规则名称！">!</span>
              </div>
            </div>
            <div class="form-group">
              <label for="urlRule" class="col-sm-2 control-label">URL规则</label>
              <div class="col-sm-8 col-md-5">
                <div class="row">
                  <div class="col-md-12"><input type="text" class="form-control" id="urlRule" placeholder="">
                  </div>
                </div>
                <div class="row blank">
                  <div class="col-md-12"><p></p></div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    可选变量：
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <button type="button" class="btn btn-default btn-sm select-url-tag margin"
                            title="year（文章的年份，四位数字，形如2004。）"
                            data-rule="%year%">年：%year%
                    </button>
                    <button type="button" class="btn btn-default btn-sm select-url-tag margin"
                            title="monthnum（月份，形如05。）" data-rule="%monthnum%">
                      月：%monthnum%
                    </button>
                    <button type="button" class="btn btn-default btn-sm select-url-tag margin"
                            title="day（日期，形如28。）" data-rule="%day%">日：%day%
                    </button>
                    <button type="button" class="btn btn-default btn-sm select-url-tag margin"
                            title="hour（小时，形如15。）" data-rule="%hour%">时：%hour%
                    </button>
                    <button type="button" class="btn btn-default btn-sm select-url-tag margin"
                            title="minute（分钟，形如43。）" data-rule="%minute%">
                      分：%minute%
                    </button>
                    <button type="button" class="btn btn-default btn-sm select-url-tag margin"
                            title="second（秒数，形如33。）" data-rule="%second%">
                      秒：%second%
                    </button>
                    <button type="button" class="btn btn-default btn-sm select-url-tag margin"
                            title="post_id（内容的唯一ID，形如423。）"
                            data-rule="%post_id%">ID：%post_id%
                    </button>
                    <button type="button" class="btn btn-default btn-sm select-url-tag margin"
                            title="postname（清理过的内容标题（别名）。）"
                            data-rule="%postname%">name：%postname%
                    </button>
                    <button type="button" class="btn btn-default btn-sm select-url-tag margin"
                            title="category（分类别名，嵌套的子分类在URL中会显示为嵌套的文件夹。）"
                            data-rule="%category%">分类：%category%
                    </button>
                    <button type="button" class="btn btn-default btn-sm select-url-tag margin"
                            title="tag（标签名。）" data-rule="%tag%">标签：%tag%
                    </button>
                    <button type="button" class="btn btn-default btn-sm select-url-tag margin"
                            title="author（清理过的作者姓名。）" data-rule="%author%">
                      作者：%author%
                    </button>
                    <button type="button" class="btn btn-default btn-sm select-url-tag margin"
                            title="page（分页的页码。）" data-rule="%page%">分页：%page%
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-sm-2 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="请填写URL规则！">!</span>
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
</section>
<!-- /.content -->
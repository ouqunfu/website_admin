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
    SEO管理
    <small>添加规则</small>
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-dashboard"></i> 营销</li>
    <li class="active"><a href="<?php echo Url::toRoute('url-manage/add'); ?>">SEO管理</a></li>
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
              <label for="seo_rule_name" class="col-sm-2 control-label">名称</label>
              <div class="col-sm-8 col-md-5">
                <input type="text" class="form-control" id="seo_rule_name" placeholder="">
              </div>
              <div class="col-sm-2 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="请填写SEO规则名称！">!</span>
              </div>
            </div>
            <div class="form-group">
              <label for="parent" class="col-sm-2 control-label">所属模块</label>
              <div class="col-sm-8 col-md-5">
                <select class="form-control" id="parent">
                  <option value="0">通用</option>
                  <option value="栏目">栏目</option>
                  <option value="分类">分类</option>
                  <option value="专题">专题</option>
                  <option value="内容">内容</option>
                </select>
              </div>
              <div class="col-sm-2 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="请选择SEO规则所属模块！">!</span>
              </div>
            </div>
            <div class="form-group">
              <label for="seo_type" class="col-sm-2 control-label">类型</label>
              <div class="col-sm-8 col-md-5">
                <select class="form-control" id="seo_type">
                  <option value="0">通用</option>
                  <option value="title">title</option>
                  <option value="keywords">keywords</option>
                  <option value="description">description</option>
                </select>
              </div>
              <div class="col-sm-2 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="请选择SEO规则类型！">!</span>
              </div>
            </div>
            <div class="form-group">
              <label for="seo_rule_example" class="col-sm-2 control-label">示例</label>
              <div class="col-sm-8 col-md-5">
                <textarea class="form-control" id="seo_rule_example" rows="5" cols="105"></textarea>
              </div>
              <div class="col-sm-2 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="请填写SEO规则示例！">!</span>
              </div>
            </div>
            <div class="form-group">
              <label for="seo_rule" class="col-sm-2 control-label">规则</label>
              <div class="col-sm-8 col-md-5">
                <div class="row">
                  <div class="col-md-12">
                    <textarea class="form-control" id="seo_rule" rows="5" cols="105"></textarea>
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
                                  data-original-title="请填写SEO规则！">!</span>
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
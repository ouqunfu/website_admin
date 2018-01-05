<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use backend\assets\AppAsset;

$this->title = 'AdminSYS - 后台管理中心';

//load text editor css and js file
AppAsset::addScript($this, '@web/frontend/plugins/insertAtCursor/insertAtCursor.min.js');

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
                <textarea class="form-control" id="seo_rule_example" rows="5" cols="105" placeholder="李宁新款男子半掌气垫潮流休闲鞋Bubble Up男运动鞋GLAL007  市场价359.000元，名鞋库价仅179.000元，全场3-7折优惠。购买正品李宁 GLAL007-6，了解李宁GLAL007-6商品信息就上名鞋库。"></textarea>
              </div>
              <div class="col-sm-2 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="请填写SEO规则示例！">!</span>
              </div>
            </div>
            <div class="form-group">
              <label for="seo_rule" class="col-sm-2 control-label">规则内容</label>
              <div class="col-sm-8 col-md-5">
                <div class="row">
                  <div class="col-md-12">
                    <textarea class="form-control" id="seo_rule" rows="5" cols="105" placeholder="%title%休闲鞋%tags%男运动鞋%tags%  市场价%price%元，%siteName%价仅%price%元，全场3-7折优惠。购买正品%title% %tags%，了解%title%%tags%商品信息就上%siteName%。"></textarea>
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
                    <button type="button" class="btn btn-default btn-sm select-seo-tag margin"
                            title="标题（文章的SEO信息页面标题，若不存在则使用文章的标题）"
                            data-rule="%title%">标题：%title%
                    </button>
                    <button type="button" class="btn btn-default btn-sm select-seo-tag margin"
                            title="关键词（文章的SEO信息页面关键词）" data-rule="%keywords%">
                      关键词：%keywords%
                    </button>
                    <button type="button" class="btn btn-default btn-sm select-seo-tag margin"
                            title="描述（文章的SEO信息页面描述）" data-rule="%description%">描述：%description%
                    </button>
                    <button type="button" class="btn btn-default btn-sm select-seo-tag margin"
                            title="标签（文章的标签）" data-rule="%tags%">标签：%tags%
                    </button>
                    <button type="button" class="btn btn-default btn-sm select-seo-tag margin"
                            title="分类（文章的分类）" data-rule="%cato%">
                      分类：%cato%
                    </button>
                    <button type="button" class="btn btn-default btn-sm select-seo-tag margin"
                            title="栏目（文章的栏目）" data-rule="%column%">
                      栏目：%column%
                    </button>
                    <button type="button" class="btn btn-default btn-sm select-seo-tag margin"
                            title="专题（文章所属专题）"
                            data-rule="%subject%">专题：%subject%
                    </button>
                    <button type="button" class="btn btn-default btn-sm select-seo-tag margin"
                            title="网站名称（设置的网站名称）"
                            data-rule="%siteName%">网站名称：%siteName%
                    </button>
                    <button type="button" class="btn btn-default btn-sm select-seo-tag margin"
                            title="价格（产品的价格）"
                            data-rule="%price%">价格：%price%
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-sm-2 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="请填写SEO规则内容！">!</span>
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
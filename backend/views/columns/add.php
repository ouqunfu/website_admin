<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'AdminSYS - 后台管理中心';
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    栏目管理
    <small>添加栏目</small>
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-dashboard"></i> 内容</li>
    <li class="active"><a href="<?php echo Url::toRoute('columns/add');?>">添加栏目</a></li>
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
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab">基本信息</a></li>
                    <li><a href="#tab_2" data-toggle="tab">SEO信息</a></li>
                    <li><a href="#tab_3" data-toggle="tab">属性设置</a></li>
                    <li><a href="#tab_4" data-toggle="tab">扩展信息</a></li>
                    <li><a href="#tab_5" data-toggle="tab">权限设置</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                      <div class="row">
                        <div class="form-group">
                          <label for="parent" class="col-md-2 control-label">所属栏目</label>
                          <div class="col-md-5">
                            <select class="form-control" id="parent">
                              <option value="0" selected="">请选择...</option>
                            </select>
                          </div>
                          <div class="col-md-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="如果为一级栏目，不需要选择！">!</span>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group">
                          <label for="columnName" class="col-md-2 control-label">栏目名称</label>
                          <div class="col-md-5">
                            <input type="text" class="form-control" id="columnName" placeholder="">
                          </div>
                          <div class="col-md-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="请填写栏目名称！">!</span>
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
                          <label for="isNav" class="col-md-2 control-label">在导航中显示</label>
                          <div class="col-md-5">
                            <select class="form-control" id="isNav">
                              <option value="1">显示</option>
                              <option value="0">不显示</option>
                            </select>
                          </div>
                          <div class="col-md-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="是否在导航栏中显示！">!</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2">
                      The European languages are members of the same family. Their separate existence
                      is a myth.
                      For science, music, sport, etc, Europe uses the same vocabulary. The languages
                      only differ
                      in their grammar, their pronunciation and their most common words. Everyone
                      realizes why a
                      new common language would be desirable: one could refuse to pay expensive
                      translators. To
                      achieve this, it would be necessary to have uniform grammar, pronunciation and
                      more common
                      words. If several languages coalesce, the grammar of the resulting language is
                      more simple
                      and regular than that of the individual languages.
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                      Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                      when an unknown printer took a galley of type and scrambled it to make a type
                      specimen book.
                      It has survived not only five centuries, but also the leap into electronic
                      typesetting,
                      remaining essentially unchanged. It was popularised in the 1960s with the
                      release of Letraset
                      sheets containing Lorem Ipsum passages, and more recently with desktop
                      publishing software
                      like Aldus PageMaker including versions of Lorem Ipsum.
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_4">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                      Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                      when an unknown printer took a galley of type and scrambled it to make a type
                      specimen book.
                      It has survived not only five centuries, but also the leap into electronic
                      typesetting,
                      remaining essentially unchanged. It was popularised in the 1960s with the
                      release of Letraset
                      sheets containing Lorem Ipsum passages, and more recently with desktop
                      publishing software
                      like Aldus PageMaker including versions of Lorem Ipsum.
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_5">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                      Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                      when an unknown printer took a galley of type and scrambled it to make a type
                      specimen book.
                      It has survived not only five centuries, but also the leap into electronic
                      typesetting,
                      remaining essentially unchanged. It was popularised in the 1960s with the
                      release of Letraset
                      sheets containing Lorem Ipsum passages, and more recently with desktop
                      publishing software
                      like Aldus PageMaker including versions of Lorem Ipsum.
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
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
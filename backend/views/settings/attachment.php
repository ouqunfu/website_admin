<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use backend\assets\AppAsset;

$this->title = 'AdminSYS - 后台管理中心';

//load text editor css and js file

//自定义css
$cssString = " .nav-tabs-custom{box-shadow: none;} ";
$this->registerCss($cssString);
?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      设置
      <small>附件设置</small>
    </h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-dashboard"></i> 设置</li>
      <li class="active"><a href="<?php echo Url::toRoute('settings/watermark'); ?>">附件设置</a></li>
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
                  <li class="active"><a href="#tab_1" data-toggle="tab">附件设置</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <div class="form-group">
                      <label for="attachment_type" class="col-sm-2 control-label">附件类型</label>
                      <div class="col-sm-8 col-md-5">
                        <textarea class="form-control" id="attachment_type" rows="8"
                                  placeholder="jpg,gif,bmp,jpeg,png,doc,docx,xls,xlsx,zip,rar,7z,txt,pdf,JPG,GIF,BMP,JPEG,PNG,ZIP,RAR,7Z,TXT,PDF,DOC,DOCX,XLS,XLSX"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="attachment_size" class="col-sm-2 control-label">附件大小</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="attachment_size" placeholder="2">
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
  // fileinput init
  $("#watermark_path").fileinput();

  $('#watermark_pos_select td').each(function(){
  if($(this).html()==5)
  $(this).addClass('pos_select');
  });
  $('#watermark_pos_select td').hover(function(){
  $(this).addClass('pos_hover');
  }, function(){
  $(this).removeClass('pos_hover');
  })
  $('#watermark_pos_select td').click(function(){
  $('#watermark_pos_select td').each(function(){
  $(this).removeClass('pos_select');
  });
  $('#watermark_pos').val($(this).html());
  $(this).addClass('pos_select');
  });
  $('#watermark_pos').click(function(){
  $('#watermark_pos_select td').each(function(){
  $(this).removeClass('pos_select');
  });
  $('#watermark_pos_select td').each(function(){
  if($(this).html()== $('#watermark_pos').val())
  $(this).addClass('pos_select');
  });
  });
  })

<?php $this->endBlock() ?>
<?php $this->registerJs($this->blocks['custom'], \yii\web\View::POS_END); ?>
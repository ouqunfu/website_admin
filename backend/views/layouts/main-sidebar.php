<?php
use yii\helpers\Url;

?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo Url::to('@web/frontend/dist/img/user2-160x160.jpg'); ?>" class="img-circle"
             alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Jeffrey Ou</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">主导航</li>
      <!-- 首页 dashboard -->
      <li <?php if('index/index' == $this->params['tag_li']) echo "class='active'"; ?>><a href="<?php echo Url::toRoute('index/index');?>"><i class="fa fa-dashboard"></i> <span>首页</span></a></li>
      <!--内容-->
      <li class="treeview <?php if('contents' == $this->params['tag']) echo 'menu-open';?>">
        <a href="#"><i class="fa fa-list-alt"></i> <span>内容</span>
          <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu" <?php if('contents' == $this->params['tag']) echo 'style="display:block"';?>>
          <li <?php if('columns/list' == $this->params['tag_li']) echo "class='active'"; ?>><a href="<?php echo Url::toRoute('columns/list');?>">栏目管理</a></li>
          <li <?php if('cato/list' == $this->params['tag_li']) echo "class='active'"; ?>><a href="<?php echo Url::toRoute('cato/list');?>">分类管理</a></li>
          <li <?php if('subject/list' == $this->params['tag_li']) echo "class='active'"; ?>><a href="<?php echo Url::toRoute('subjects/list');?>">专题管理</a></li>
          <li <?php if('contents/list' == $this->params['tag_li']) echo "class='active'"; ?>><a href="<?php echo Url::toRoute('contents/list');?>">内容管理</a></li>
          <li <?php if('url-manage/list' == $this->params['tag_li']) echo "class='active'"; ?>><a href="<?php echo Url::toRoute('url-manage/list');?>">URL规则</a></li>
          <li <?php if('gallery/list-dir' == $this->params['tag_li']) echo "class='active'"; ?>><a href="<?php echo Url::toRoute('gallery/list-dir');?>">图片库</a></li>
          <li <?php if('tags/list' == $this->params['tag_li']) echo "class='active'"; ?>><a href="<?php echo Url::toRoute('tags/list');?>">标签管理</a></li>
        </ul>
      </li>
      <!--用户-->
      <li class="treeview <?php if('users' == $this->params['tag']) echo 'menu-open';?>">
        <a href="#"><i class="fa fa-users"></i> <span>用户</span>
          <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu" <?php if('users' == $this->params['tag']) echo 'style="display:block"';?>>
          <li <?php if('users/list' == $this->params['tag_li']) echo "class='active'"; ?>><a href="<?php echo Url::toRoute('users/list');?>">用户管理</a></li>
          <li <?php if('role/list' == $this->params['tag_li']) echo "class='active'"; ?>><a href="<?php echo Url::toRoute('role/list');?>">角色管理</a></li>
        </ul>
      </li>
      <!--功能-->
      <li class="treeview <?php if('functions' == $this->params['tag']) echo 'menu-open';?>">
        <a href="#"><i class="fa fa-th"></i> <span>功能</span>
          <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu" <?php if('functions' == $this->params['tag']) echo 'style="display:block"';?>>
          <li <?php if('notice/list-notice' == $this->params['tag_li']) echo "class='active'"; ?>><a href="<?php echo Url::toRoute('notice/list-notice');?>">公告管理</a></li>
          <li <?php if('notice/list-message' == $this->params['tag_li']) echo "class='active'"; ?>><a href="<?php echo Url::toRoute('notice/list-message');?>">留言管理</a></li>
          <li <?php if('comments/list' == $this->params['tag_li']) echo "class='active'"; ?>><a href="<?php echo Url::toRoute('comments/list');?>">评论管理</a></li>
          <li <?php if('data-manage/index' == $this->params['tag_li']) echo "class='active'"; ?>><a href="<?php echo Url::toRoute('data-manage/index');?>">数据管理</a></li>
        </ul>
      </li>
      <!--营销-->
      <li class="treeview <?php if('market' == $this->params['tag']) echo 'menu-open';?>">
        <a href="#"><i class="fa fa-signal"></i> <span>营销</span>
          <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu" <?php if('market' == $this->params['tag']) echo 'style="display:block"';?>>
          <li <?php if('market/list-seo-rule' == $this->params['tag_li']) echo "class='active'"; ?>><a href="<?php echo Url::toRoute('market/list-seo-rule');?>">SEO管理</a></li>
          <li <?php if('market/list-links' == $this->params['tag_li']) echo "class='active'"; ?>><a href="<?php echo Url::toRoute('market/list-links');?>">友链管理</a></li>
        </ul>
      </li>
      <!--设置-->
      <li class="treeview <?php if('settings' == $this->params['tag']) echo 'menu-open';?>">
        <a href="#"><i class="fa fa-cog"></i> <span>设置</span>
          <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu" <?php if('settings' == $this->params['tag']) echo 'style="display:block"';?>>
          <li <?php if('settings/index' == $this->params['tag_li']) echo "class='active'"; ?>><a href="<?php echo Url::toRoute('settings/index');?>">网站配置</a></li>
          <li <?php if('settings/watermark' == $this->params['tag_li']) echo "class='active'"; ?>><a href="<?php echo Url::toRoute('settings/watermark');?>">水印设置</a></li>
          <li <?php if('settings/str-filter-list' == $this->params['tag_li']) echo "class='active'"; ?>><a href="<?php echo Url::toRoute('settings/str-filter-list');?>">敏感词管理</a></li>
          <li <?php if('settings/attachment' == $this->params['tag_li']) echo "class='active'"; ?>><a href="<?php echo Url::toRoute('settings/attachment');?>">附件设置</a></li>
        </ul>
      </li>
      <!--自定义-->
      <li class="treeview <?php if('customs' == $this->params['tag']) echo 'menu-open';?>">
        <a href="#"><i class="fa fa-pencil-square-o"></i> <span>自定义</span>
          <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu" <?php if('customs' == $this->params['tag']) echo 'style="display:block"';?>>
          <li <?php if('customs/list-content-field' == $this->params['tag_li']) echo "class='active'"; ?>><a href="<?php echo Url::toRoute('customs/list-content-field');?>">内容字段</a></li>
          <li <?php if('customs/list-user-field' == $this->params['tag_li']) echo "class='active'"; ?>><a href="<?php echo Url::toRoute('customs/list-user-field');?>">用户字段</a></li>
        </ul>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
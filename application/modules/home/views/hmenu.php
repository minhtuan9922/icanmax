<div class="col-sm-12">
  <nav class="navbar hnavbar navbar-inverse">
    <div class="">
      <ul class="nav navbar-nav hmenu" style="padding-right: 10px;">
        <li><a href="<?php echo base_url('user-managerfile'); ?>"><i class="fa fa-id-card-o"></i>&nbsp;Hồ Sơ Cá Nhân</a></li>
      </ul>
      <ul class="nav navbar-nav hmenu" style="padding-right: 10px;">
        <li><a href="<?php echo base_url('user-info'); ?>" ><i class="fa fa-user"></i>&nbsp;Tài khoản</a></li>
      </ul>
      <ul class="nav navbar-nav hmenu" style="padding-right: 10px;">
        <li><a href="<?php echo base_url('employer'); ?>" <?php echo (!empty($active_employer) && $active_employer ==TRUE) ? 'class="hactive"' : ''; ?>><i class="fa fa-list"></i>&nbsp;Nhà Tuyển Dụng</a></li>
      </ul>
      <ul class="nav navbar-nav hmenu" style="padding-right: 10px;">
        <li><a href="<?php echo base_url('seeker-job'); ?>" <?php echo (!empty($active_job) && $active_job ==TRUE) ? 'class="hactive"' : ''; ?>><i class="fa fa-id-card-o"></i>&nbsp;Người Tìm Việc</a></li>
      </ul>
      <ul class="nav navbar-nav hmenu" style="padding-right: 10px;">
        <li><a href="#"><i class="fa fa-id-card-o"></i>&nbsp;Tư Vấn</a></li>
      </ul>
      <ul class="nav navbar-nav hmenu" style="padding-right: 10px;">
        <li><a href="#"><i class="fa fa-id-card-o"></i>&nbsp;Đối Tác</a></li>
      </ul>
      <ul class="nav navbar-nav hmenu">
        <li><a href="#"><i class="fa fa-id-card-o"></i>&nbsp;Gốc nghề nghệp</a></li>
      </ul>
    </div>
  </nav>
</div>
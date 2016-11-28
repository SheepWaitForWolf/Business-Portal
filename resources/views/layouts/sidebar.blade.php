  <?php 
        $id = Auth::id();
        $sql9 = DB::table('business_users_mst')->select('avatar')->where('id', '=', $id)->get();
        $avatar = $sql9[0]->avatar;
 ?>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/<?php echo $avatar ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>myaccount</p>
          <a href="/home"><i class="fa fa-circle text-success"></i>Online</a>
        </div>
      </div>
      <!-- search form -->
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
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="/home">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="/support">
            <i class="fa fa-briefcase"></i>
            <span>Business Support</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/startup"><i class="fa fa-paper-plane-o"></i>Start-Up Advice</a></li>
            <li><a href="/properties"><i class="fa fa-newspaper-o"></i>Property Directory</a></li>
            <li><a href="/businessrates"><i class="fa fa-industry"></i>Business Rates</a></li>
            <li><a href="/tradingstandards"><i class="fa fa-legal"></i>Trading Standards</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="/apply">
            <i class="fa fa-fire"></i> <span>Licenses & Permits</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/operator"><i class="fa fa-phone"></i>Taxi Operators</a></li>
            <li><a href="/taxidriver"><i class="fa fa-taxi"></i>Taxi Drivers</a></li>
            <li><a href="/windowcleaner"><i class="fa fa-bitbucket"></i>Window Cleaners</a></li>
            <li><a href="/roadclosure"><i class="fa fa-road"></i>Temporary Road Closure</a></li>
            <li><a href="/streettrading"><i class="fa fa-street-view"></i>Street Trading</a></li>
            <li><a href="/streetcafes"><i class="fa fa-coffee"></i>Street Cafes</a></li>                                   
            <li><a href="/planningapp"><i class="fa fa-building-o"></i>Submit Planning Application</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-recycle"></i> <span>Recycling & Waste</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         <ul class="treeview-menu">
            <li><a href="/waste"><i class="fa fa-trash"></i>Commercial Waste</a></li>
            <li><a href="/missedbins"><i class="fa fa-truck"></i>Report Missed Collection</a></li>
            <li><a href="/environment"><i class="fa fa-tree"></i>Environmental Health</a></li> 
          </ul>
        </li>
         <li>
          <a href="/feedback">
            <i class="fa fa-edit"></i> <span>Submit Feedback</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="/mailbox">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">16</small>
              <small class="label pull-right bg-yellow">24</small>
              <small class="label pull-right bg-green">13</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-mouse-pointer"></i> <span>User Guides</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/help"><i class="fa fa-question-circle"></i>Help</a></li>
            <li><a href="/accessibility"><i class="fa fa-wheelchair"></i>Accessibility</a></li>
            <li><a href="/termsofuse"><i class="fa fa-balance-scale"></i>Terms of Use</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>